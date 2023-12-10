<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="skeleton.css">
<style>
.container {text-align:center;margin-top:32px;}
</style>
</head>
<body>
<div class="container">
  <form>
    <input type="text" name="ip">
    <input type="submit" value="submit" class="button button-primary">
  </form>

<?php
  require "convertip.php";
  if ($_GET["ip"]) {$get_ip = $_GET["ip"];} else {$get_ip = $_SERVER["REMOTE_ADDR"];}
  echo $get_ip."<br>";
  echo iconv("GB2312", "UTF-8", convertip($get_ip));
?>
</div>
</body>
</html>
