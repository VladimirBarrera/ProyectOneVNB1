<?php
include "include/conect.php";
include "include/consultas.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dark.css">
    <link rel="stylesheet" href="css/pace.css">
    <script src="js/jquery.js"></script>
    <title>Usuarios_php</title>
</head>
<body>
    <div class="container"></div>
    <div class="row mt-2"></div>
    <h2 class="display-6 text-center">Lista de Usuarios</h2>
    <div class="row d-flex justify-content-center table-responsive"></div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Imagen</th>
      <th scope="col">Nombre</th>
      <th scope="col">ApellidoP</th>
      <th scope="col">ApellidoM</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">UserName</th>
      <th scope="col">Online</th>
      <th scope="col">Plantel</th>
      <th scope="col">TipoUsuario</th>
      <th scope="col">Expediente</th>
    </tr>
  </thead>
  <tbody>
  <?php while($LineaUsuario=$EUsuario->fetchassoc()){ ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $LineaUsuario['ImgUser'];?></td>
      <td><?php echo $LineaUsuario['Nombre'] ;?></td>
      <td><?php echo $LineaUsuario['ApellidoP'] ;?></td>
      <td><?php echo $LineaUsuario['ApellidoM'] ;?></td>
      <td><?php echo $LineaUsuario['Telefono'] ;?></td>
      <td><?php echo $LineaUsuario['Email'] ;?></td>
      <td><?php echo $LineaUsuario['UserName'] ;?></td>
      <td><?php echo $LineaUsuario['Online'] ;?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
    
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
