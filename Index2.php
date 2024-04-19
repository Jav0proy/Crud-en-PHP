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
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Formulario</title>
</head>
<body>
    <h1 class="text-center p-3">Registro Usuarios</h1>
    <div class="container-fluid row">
    <form class="col-4 p-3" action="insert_user.php" method="POST">
        <h2 class="text-center">Ingresa Registro</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name"  name="name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" >

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="text" class="form-control" id="password"  name="password">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">

  </div>

  <!--<input class="form-control" type="submit" value=" Agregar usuario">-->
<button type="submit" class="btn btn-primary" value="Agregar usuario">Agregar Usuario</button>
</form>
<div clas="col-8 p-4">
<table class="table">
  <thead class="bg-info">
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
                <th> <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-small btn-danger" >Editar</a></th>
                <th><a href="delete.php ?id=<?= $row['id'] ?>" class="btn btn-small btn-danger" id="sweetAlert">Eliminar</a></th>
                </tr>
                <?php endwhile; ?> 
  </tbody>
</table>
</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="sweetalert2.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
