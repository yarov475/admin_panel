<?php
header('Content-type: text/html; charset=utf-8');

$login = $_POST['login'];
$pas = $_POST['password'];
if ($login == 'd' && $pas == 1)
{
    session_start();
    $_SESSION['admin'] = true;
    $script = 'adminpanel.php';
}
else
    $script = 'avtadministrator.html';
header("Location: $script");
?>
