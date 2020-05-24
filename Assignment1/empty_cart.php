<?php
session_start();
session_destroy();

#print_r($_SESSION);
echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."';</script>";

?>