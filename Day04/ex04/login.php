<?php
include("auth.php");
session_start();

if (auth($_POST['login'], $_POST['passwd']) && $_POST['submit'] === "OK")
{
    $_SESSION['loggued_on_user'] = $_POST['login'];
    echo("<iframe name='chat' src='chat.php' width='100%' height='550px'></iframe>\n<br />");
    echo("<iframe name='speak' src='speak.php' width='100%' height='50px'></iframe>");
}
else
{
    $_SESSION['loggued_on_user'] = "";
    echo "ERROR\n";
}
?>