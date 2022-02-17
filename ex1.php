<?php
$url="https://www.php.net/manual/ru/function.file-get-contents";
$page=  file_get_contents($url);
if($page) echo $page; else echo "error";