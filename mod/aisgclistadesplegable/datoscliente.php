<?php
//*require('conexion.php');
require_once "../../includes/mysqli.php";
require "../../lang/spanish.lang.php";

//capturar el nº de la ai
@$nom=$_POST['ai'];


//seleccionamos los datos del cliente por su nombre
        $sql = "SELECT * FROM aisgc WHERE ai='".$nom."'";
        $sql = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_array($sql);



//mostrando el resultado


echo "<table class='print'><tr>"; 
                    echo "<th>"; 
                    echo FECHA; 
                    echo "</th><th>"; 
                    echo AUDITORIAS_NUMERO_AUDITORIA; 
                    echo "</th><th>"; 
                    echo AUDITORIAS_AUDITOR; 
                    echo"</th><th></th></tr>"; 
                    echo "<tr><td>"; 
                    echo "$row[fecha]"; 
                    echo "</td><td>"; 
                    echo $row['ai']; 
                    echo "</td><td colspan=2>"; 
                    echo $row['auditor1']; 
                    echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; 
                    echo CUESTIONARIO_TRATAMIENTOS; 
                    echo "</th><th colspan=2>"; 
                    echo CUESTIONARIO_CALIDAD; 
                    echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; 
                    echo "$row[obstrat]"; 
                    echo"</td><td colspan=2>"; 
                    echo "$row[obscal]"; 
                    echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; 
                    echo CUESTIONARIO_ALMACEN; 
                    echo "</th><th>"; 
                    echo CUESTIONARIO_COMPRAS; 
                    echo"</th></tr>"; 
                    echo "<tr><td colspan=2>"; 
                    echo "$row[obsalmac]"; 
                    echo "</td><td colspan=2>"; 
                    echo "$row[obscompras]"; 
                    echo"</td></tr>"; 
                    echo "<tr><th colspan=2>"; 
                    echo CUESTIONARIO_FORMACION; 
                    echo"</th><th colspan=2>"; 
                    echo CUESTIONARIO_DOCUMENTACION;
                    echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; 
                    echo "$row[obsformac]"; 
                    echo "</td><td colspan=2>"; 
                    echo "$row[obsdocum]"; 
                    echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; 
                    echo MENU_MANTENIMIENTO; 
                    echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; 
                    echo "$row[obslegio]"; 
                    echo "</td></tr></table>";

?>