<?php

include "db.php";

$users = $conexion->query("SELECT * FROM users ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>REGISTROS</h1>

  <table  border="1">
    <th>NOMBRES</th>
    <th>EMAIL</th>
    <th>ELIMINAR</th>
    <th>VER</th>

   <tbody>
       <?php
          while($user = $users->fetch_object()):
        ?>

        <tr>
            <td> <?=$user->first_name?> </td>
            <td> <?=$user->email ?> </td>
            <td> 
                <form action="abm.php"  method="post">
                    <input type="hidden"  name="id" value="<?= $user->id?>">
                    <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                      <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                    </svg>
                    </button>
                </form>  
            </td>
            <td> <button> ver</button></td>
        </tr>

        <?php
        endwhile;
        ?>

   </tbody>
  </table>


</body>
</html>
