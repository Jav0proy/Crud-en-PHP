<?php
include('conexion.php');
$con= connection();
$sql="SELECT * FROM users";
$query= mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <form action="insert_user.php" method="POST" class="btn btn-dark mb-3">
            <h1>Crear usuario</h1>
            <!--<label for="name" id="name">Nombre</label>-->
            <input class="form-control" type="text" name="name" placeholder="nombre">
            <input class="form-control" type="text" name="lastname" placeholder="apellido">
            <input class="form-control" type="text" name="username" placeholder="username">
            <input class="form-control" type="text" name="password" placeholder="password">
            <input class="form-control" type="text" name="email" placeholder="email">
            <input class="form-control" type="submit" value=" Agregar usuario">
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
        <h2>Usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row= mysqli_fetch_array($query)):?>
                <tr>
                <th><?= $row['id'] ?> </th>
                <th><?= $row['name'] ?></th>
                <th><?= $row['lastname'] ?></th>
                <th><?= $row['username'] ?></th>
                <th><?= $row['password'] ?></th>
                <th><?= $row['email'] ?></th>

                <th> <a href="update.php?id=<?= $row['id'] ?>">Editar</a></th>
                <th><a href="delete.php ?id=<?= $row['id'] ?>">Eliminar</a></th>
                </tr>
                <?php endwhile; ?> 
            </tbody>
        </table>
    </div>
 </div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
