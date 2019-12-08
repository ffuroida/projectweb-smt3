<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: loginform.php"); // Redirecting To Home Page
}
?>