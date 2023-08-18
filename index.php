<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1 class="text-center" style= "background-color:black;color:white" >LISTADO DE PRODUCTOS</h1>
    <hr>
    </div>
    <div class="container">
    <table class="table">
    <div class="container">
<a href="" class="btn btn-success">agregar</a>
</div>
  <thead>
                <tr>
                    <th scope="col">codigoalumno</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">edad</th>
                    <th scope="col">telefono</th>
                    <th scope="col">codigoinscripcion</th>
                    <th scope="col">fecha</th>
                    <th scope="col">codigoalumno</th>
                    <th scope="col">codigocarrera</th>
                    <th scope="col">codigocarrera</th>
                    <th scope="col">nombre</th>
                    <th scope="col">codigoalumno</th>
                    
                   </tr>
            </thead>
            <tbody>
            <?php
    require 'conexion.php';

    $sql= ("SELECT *FROM inscripcion 
    INNER JOIN estudiante on estudiante.codigo_alumno=inscripcion.codigo_alumno
    INNER JOIN carrera on carrera.codigo_carrera=inscripcion.codigo_carrera;");
    $resultado= $conn->query($sql);
    ?>
    <?php      
      while ($fila = $resultado->fetch_assoc()) {
        ?>
                <tr>
                    <td scope="row"><?php  echo $fila['codigo_alumno']?></td>
                    <td scope="row"><?php  echo $fila['alumno']?></td>
                    <td scope="row"><?php  echo $fila['apellido']?></td>
                    <td scope="row"><?php  echo $fila['edad']?></td>
                    <td scope="row"><?php  echo $fila['telefono']?></td>
                    <td scope="row"><?php  echo $fila['codigo_incripcion']?></td>
                    <td scope="row"><?php  echo $fila['fecha']?></td>
                    <td scope="row"><?php  echo $fila['codigo_alumno']?></td>
                    <td scope="row"><?php  echo $fila['codigo_carrera']?></td>
                    <td scope="row"><?php  echo $fila['codigo_carrera']?></td>
                    <td scope="row"><?php  echo $fila['nombre']?></td>
                    <td scope="row"><?php  echo $fila['duracion']?></td>
                    <th>
      <a href=""class="btn btn-warning">editar </a>
      <a href=""class="btn btn-success">eliminar</a>
    </th>
                    </td>
                </tr>
                    <?php } ?>
                    </tbody>
                    </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
</body>
</html>
