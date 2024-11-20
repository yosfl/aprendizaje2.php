<?php
 include "db.php";

 $conexion->query( " DELETE FROM users WHERE id = $_POST[id]");
 
?>