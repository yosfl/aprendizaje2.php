<?php


include "db.php"; // conexion a la DB
// INSERT THE INFORMATION

$conexion->query("INSERT INTO users VALUES (

  null,
  '$_POST[first_name]',
  '$_POST[second_name]',
  '$_POST[lastname]',
  '$_POST[second_lastname]',
  '$_POST[document]',
  '$_POST[password]',
  '$_POST[email]',
  '$_POST[phone]',
  '$_POST[age]'




)
    ")
?>


