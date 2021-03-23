<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$hostname_connApp = "localhost";
$database_connApp = "vault813";
$username_connApp = "root";
$password_connApp = "";//╭∩╮(Ο_Ο)╭∩╮

$db = new mysqli($hostname_connApp, $username_connApp, $password_connApp, $database_connApp);
if ($db->connect_errno) {
    die("Fallo la conexion a Mysql: (" . $db->mysqli_connect_errono() . ")" . $db->mysqli_connect_error());
}
mysqli_set_charset($db, 'utf8');

?>