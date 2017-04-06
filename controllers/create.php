<?php
require_once ("../Conexion.php");
require_once( "../models/user.php" );

$user = new User();
$result = $user->store( $_POST["name"], $_POST["last_name"], $_POST["identification"], $_POST["address"], $_POST["phone"]);
if( $result == 1 ){
    echo "<h2>User created!</h2>";
    header("Location: ../index.php");
    exit();
}else{
    echo "<h2>Error!</h2>";
    header("Location: ../index.php");
    exit();
}

?>

