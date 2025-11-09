<?php
if (!isset($showBanner)) {
    $showBanner = true;
}
if (!isset($errorMessage)) {
    $errorMessage = "An unexpected error occurred.";
}
?>
<!-- Error Banner -->
<?php if ($showBanner): ?>
<style>
/* Banner style (responsive) */
#iostreak-error-banner {
  position: fixed;
  left: 16px;
  right: 16px;
  bottom: 20px;
  z-index: 99999;
  background: linear-gradient(90deg,#ff3ca6,#ff0078);
  color: #fff;
  border-radius: 12px;
  box-shadow: 0 6px 24px rgba(0,0,0,0.12);
  padding: 18px;
  display: flex;
  gap: 12px;
  align-items: center;
  max-width: calc(100% - 32px);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial;
}
#iostreak-error-banner .msg {
  flex: 1;
  font-size: 15px;
}
#iostreak-error-banner .msg strong { display: block; font-size:16px; margin-bottom:4px; font-weight:700; }
#iostreak-error-banner .actions {
  display:flex;
  gap:8px;
  align-items:center;
}
#iostreak-error-banner a.cta {
  background: #fff;
  color: #3c70e9ff;
  padding: 8px 12px;
  border-radius: 8px;
  text-decoration: none;
  font-weight:600;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}
#iostreak-error-banner button.close-btn {
  background: transparent;
  border: none;
  color: rgba(255,255,255,0.95);
  font-size: 20px;
  cursor: pointer;
  padding: 6px;
  line-height: 1;
}
@media (max-width:600px){
  #iostreak-error-banner{ flex-direction:column; align-items:flex-start; gap:10px; padding:14px; bottom:12px; }
  #iostreak-error-banner .actions { width:100%; justify-content:space-between; gap:6px; }
  #iostreak-error-banner .msg { font-size:14px; }
}
</style>

<div id="iostreak-error-banner" role="alert" aria-live="assertive">
  <div class="msg">
    <strong>Website Error — Connect with IoStreak Solutions Pvt Ltd</strong>
    <span><?php echo htmlspecialchars($errorMessage); ?></span>
  </div>

  <div class="actions">
    <!-- Update contact details as needed -->
    <a class="cta" href="mailto:hr@iostreak.com?subject=Site%20Error%20Report">Contact Us</a>
    <a class="cta" href="tel:+9067274681">Call: +91 9067274681</a>
    <button class="close-btn" aria-label="Dismiss" onclick="document.getElementById('iostreak-error-banner').style.display='none'">&times;</button>
  </div>
</div>

<!-- Optional: log a console message for developers -->
<script>console.warn("IoStreak Error Banner shown: <?php echo addslashes($errorMessage); ?>");</script>
<?php endif; ?>
