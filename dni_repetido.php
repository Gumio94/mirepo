<?php
include "conexion.php";
    $dni=$_REQUEST['dni'];
    $sql="SELECT * FROM alumno where dni=$dni";
    if(!$re=$con->query($sql)){
        echo $con->error;
    }else{
        if($re->num_rows>0){
            $nom=$re->fetch_assoc();
            echo $nom["nombre"];
            echo "-";
            echo $nom["apellido"];
        }
    }
?>