<?php

include "db.php";

$users = $conexion->query("SELECT * FROM users ");


echo "<table border='2'>";
echo "<thead>";
   echo "<th style='color: blue'> DOCUMENTO </th>";
   echo "<th style='color: blue'> PRIMER NOMBRE </th>";
echo "</thead";
echo "<tbody>";

 while ($user = $users->fetch_object())
{
   
    echo "<tr>";
    echo "<td>".$user->document. "</td>";
    echo "<td>".$user->first_name. "</td>";
    echo "</tr>";
    
}
echo "</tbody>";
echo "</table>";
