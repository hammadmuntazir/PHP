<?php
echo "Cookie Value :".$_COOKIE["user"];

setcookie("user","",time()-(86400*30),"/");

// for deleting cookie
?>
<!-- ksi aur page pr cookie ko retrieve kiya hai -->
