<?php
session_start();
echo "fffff";
session_destroy();
header('Location: Page_Admin_Login.php');
?>