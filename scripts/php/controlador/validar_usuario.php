<?php
    //echo "<h3>login</h3>"
    include('../conexiones_BD/conexion_bd_usuarios.php');
    $con = new ConexionBDEscuela(); 
    $conexion = $con->getConexion(); 
    //var_dump($conexion); 
    //inputEmail
    //inputPassword
    //echo $_POST['inputEmail'];
    //echo $_POST['inputPassword'];
    

    if($conexion){
        if(isset($_POST['inputEmail']) && isset($_POST['inputPassword']) 
            && !empty($_POST['inputEmail']) && !empty($_POST['inputPassword'])){
            
            $u=$_POST['inputEmail'];
            $p=$_POST['inputPassword'];
            $u_cifrado = sha1($u); 
            $p_cifrado = sha1($p);
            
                $sql = "SELECT * FROM Datos WHERE Usuario ='$u_cifrado' AND Contraeña ='$p_cifrado'"; 

                $res = mysqli_query($conexion, $sql);

                if(mysqli_num_rows($res)==1){
                    //echo "MAGIA MAGIA con Sesiones"; 
                    session_start(); 

                    $_SESSION['usuario'] = $u; 
                    $_SESSION['u_valido'] = true; 

                    header('location:../vista/fomulario_altas.php');
                }else{
                    echo "mejor me dedico a las redes "; 
                }
                //echo "entrando al if";      
        }else{
            echo "ERROR en Variables o están vacias";
        }

    }else{
        echo "SIN CONEXION"; 
    }
?>