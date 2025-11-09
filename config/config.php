<?php

/*
|--------------------------------------------------------------------------
| Project Name : Prachi Nails>
| File Name    : config.php
| Company      : IoStreak Solutions Pvt Ltd
| Website      : https://iostreak.com
| Description  : DataBase Connection file
| Author       : Iostreak Soltions Pvt Ltd
| Created On   : <?php echo date('09-11-2025'); ?> 
| Version      : 1.0
|--------------------------------------------------------------------------
*/
?>

<?php
include "error-handler.php"; 
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "prachi_nails";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    throw new Exception("Demo error to show IoStreak Solutions Banner");
    showIoStreakErrorBanner($e->getMessage());
    exit;
}
?>
