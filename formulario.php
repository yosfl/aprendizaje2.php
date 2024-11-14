<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link  rel="stylesheet" href="style.css">
</head>
<body>
    <h1 >REGISTRARSE</h1>

    <form action="create.php" method="post">
     
    <label>ingrese el primer nombre</label><br>
    <input type="text"  name="first_name"  ><br>

    <label>ingrese el segundo nombre</label><br>
    <input type="text"  name="second_name" ><br>

    <label>ingrese el primer apellido</label><br>
    <input type="text"  name="lastname" ><br>

    <label>ingrese el segundo apellido</label><br>
    <input type="text"  name="second_lastname" ><br>

    <label>ingrese el documento</label><br>
    <input type="number"  name="document" ><br>

    <label>ingrese la contraseña</label><br>
    <input type="password"  name="password" ><br>

    <label>ingrese el correo</label><br>
    <input type="email"  name="email" ><br>

    <label>ingrese el numero de telefono</label><br>
    <input type="number"  name="phone" ><br>

    <label>ingrese la edad</label><br>
    <input type="number"  min="0" name="age" ><br>

    <br>
    <button type="submit" style="color: red;">Registrar</button>

    </form>
    
</body>
</html>