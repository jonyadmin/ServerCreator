<?php 
setcookie("lang", "pt");
$back = $_SERVER['HTTP_REFERER'];
header('Location: ' . $back);
?>