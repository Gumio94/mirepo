<?php require_once "conexion.php";?>
<?php require_once "include/head.php";?>
<body>
   <?php require_once "include/control_menu.php";?>
    <center>
    <div class="semanas">   
        <table class="dia">
            <tr>
                <th colspan="6">DÍA</th>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>fecha</th>
                <th>Hora</th>
                <th>Pdf</th>
            </tr>
            <?php
            $turno=$_SESSION['user']['id'];
            
            $sql="SELECT usu.id,cal.fecha,cal.hora,al.nombre,al.apellido,al.dni 
            FROM usuario as usu 
            INNER JOIN turno ON usu.id=turno.id_usuario 
            INNER JOIN alumno as al ON turno.id_alumno=al.id 
            INNER JOIN calendario as cal ON cal.id=turno.id_calendario 
            where usu.id='$turno'";
            
            $result1=$con->query($sql);
            while ($al=$result1->fetch_assoc()){
     echo "<tr>";
            echo "<td>".$al["nombre"]."</td>";
            echo "<td>".$al["apellido"]."</td>";
            echo "<td>".$al["dni"]."</td>";
            echo "<td>".$al["fecha"]."</td>";
            echo "<td>".$al["hora"]."</td>";
            echo "<td><a href='pdf/pdf.php?dni=".$al["dni"]."'>Descargar</a></td>";
        echo"</tr>"; 

            }
            ?>
 
        </table>
        </div>
   </center>
    </body>
</html>