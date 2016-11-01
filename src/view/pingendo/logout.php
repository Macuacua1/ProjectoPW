<?php


session_start();//session is a way to store information (in variables) to be used across multiple pages.
session_destroy();
//setcookie('username', '', time() - 1*24*60*60);
//setcookie('password', '', time() - 1*24*60*60);
header("Location: login.php");//use for the redirection to some page
?>