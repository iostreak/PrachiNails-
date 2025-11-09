<?php
function iostreak_log_error($level, $message, $file, $line) {
    $logFile = __DIR__ . '/logs/error.log';
    @mkdir(dirname($logFile), 0755, true);
    $time = date('Y-m-d H:i:s');
    $entry = "[$time] [$level] $message in $file on line $line" . PHP_EOL;
    error_log($entry, 3, $logFile);
}
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) {
        return false; 
    }
    iostreak_log_error('ERROR', $errstr, $errfile, $errline);
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

set_exception_handler(function($ex) {
    iostreak_log_error('EXCEPTION', $ex->getMessage(), $ex->getFile(), $ex->getLine());
    $GLOBALS['showBanner'] = true;
    $msg = "Sorry — something went wrong. Reference: #" . substr(md5($ex->getMessage().$ex->getLine()),0,8);
    $GLOBALS['errorMessage'] = $msg;
    if (!headers_sent()) {
        http_response_code(500);
    }
    $isJson = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
              || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

    if ($isJson) {
        header('Content-Type: application/json');
        echo json_encode(['error' => true, 'message' => $msg]);
    } else {
        include __DIR__ . '/../storage/logs/error-banner.php';
    }
    exit;
});
register_shutdown_function(function () {
    $err = error_get_last();
    if ($err && in_array($err['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
        iostreak_log_error('FATAL', $err['message'], $err['file'], $err['line']);
        if (!headers_sent()) {
            http_response_code(500);
        }
        $GLOBALS['showBanner'] = true;
        $GLOBALS['errorMessage'] = "A fatal error occurred. Please contact IoStreak Solutions.";
        include __DIR__ . '/../storage/logs/error-banner.php';
        exit;
    }
});
