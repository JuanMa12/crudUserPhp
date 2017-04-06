<?php
require_once ("../Conexion.php");
require_once( "../models/user.php" );

$user = new User();
$result = $user->delete( $_GET["id"]);
if( $result == 1 ){
    echo "<h2>User deleted!</h2>";
    header("Location: ../index.php");
    exit();
}else{
    echo "<h2>Error!</h2>";
    header("Location: ../index.php");
    exit();
}

?>
      
