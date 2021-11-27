<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAJAS</title>
</head>
<body>
    
    <?php
        require_once('header.php');
    ?>

    <h3 style="background-color:red;
                text-align: center;
                padding: 15px;"> Eliminar ALUMNOS </h3>

    <div class="alert alert-danger" role="alert" 
        style="width: 50%; margin: auto;">
            This is a success alert—check it out!
    </div>


    <?php
        include('../controlador/alumno_DAO.php');
        $aDAO = new AlumnoDAO();
        $res = $aDAO->mostrarAlumnos();
       
        //var_dump($res);

        if(mysqli_num_rows($res)>0){

            //mysqli_fetch_row  => obtiene datos como un vector normal (indices numericos)
            //mysqli_fetch_assoc  => obtiene datos como un vector asociativo

            echo "<table>";
            while($fila = mysqli_fetch_assoc($res)){
                printf("<tr>
                            <td>".$fila['num_Control']."</td>".
                            "<td>".$fila['nombre']."</td>".
                            "<td>".$fila['primer_Ap']."</td>".
                            "<td>".$fila['segundo_Ap']."</td>".
                            "<td>".$fila['edad']."</td>".
                            "<td>".$fila['semestre']."</td>".
                            "<td>".$fila['carrera']."</td>".
                            "<td> <a href='../controlador/procesar_bajas.php?num_control=%s'>ELIMINAR</a> </td> </tr>", $fila['num_Control'] );
            }

        }else{
            echo "SIN registros para mostrar";
        }
        echo "</table>";
    ?>


</body>
</html>