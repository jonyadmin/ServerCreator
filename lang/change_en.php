<?php 
setcookie("lang", "en");
$back = $_SERVER['HTTP_REFERER'];
header('Location: ' . $back);
?>