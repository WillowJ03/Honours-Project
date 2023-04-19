<?php
if (isset($_POST['api-key'])) {
  $apiKey = $_POST['api-key'];
  setcookie('api-key', $apiKey, time() + (86400 * 7), "/"); // 7 days
  header("Location: second.php");
  exit();
}
?>
