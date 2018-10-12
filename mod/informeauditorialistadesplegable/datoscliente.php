<?php
//*require('conexion.php');
require_once "../../includes/mysqli.php";
require "../../lang/spanish.lang.php";

//capturar el nº de la ai
@$nom=$_POST['ai'];

//seleccionamos los datos del cliente por su nombre
        $sql = "SELECT * FROM informeauditoria WHERE ai='".$nom."'";
        $sql = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_array($sql);

//mostrando el resultado
					echo "<table class=print><tr>"; 
                    echo "<th>"; echo AUDITORIAS_AUDITORIA; echo "</th><th>"; echo FECHA; echo "</th><th>"; echo AINFORMES_AREA_AUDITADA; echo"</th><th></th></tr>"; 
                    echo "<tr><td>"; echo "$row[1]"; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo DOCUMENTACION; echo "</th><th colspan=2>"; echo AUDITORIAS_AUDITOR; echo "</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[4]"; echo"</td><td colspan=2>"; echo "$row[5]"; echo "</td></tr>"; 
                    echo "<tr><th colspan=2>"; echo AINFORMES_OBJETO; echo "</th><th>"; echo RESULTADO; echo"</th></tr>"; 
                    echo "<tr><td colspan=2>"; echo "$row[6]"; echo "</td><td colspan=2>"; echo "$row[7]"; echo"</td></tr>"; 
                    echo "</td></table>"; 
?>