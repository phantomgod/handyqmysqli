<?php
//*require('conexion.php');
require_once "../../includes/mysqli.php";
require "../../lang/spanish.lang.php";

//capturar el nº de la ai
//@$nom=$_POST['ai'];
//$nom = (isset ($_POST ['id'])) ? $_POST ['id'] : '';
@$nom=$_POST['id'];

//seleccionamos los datos del cliente por su nombre
        $sql = "SELECT * FROM calibraciones WHERE id='".$nom."'";;
        $sql = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_array($sql);

//mostrando el resultado
					echo "<table class=print><tr>";
                    echo "<th>"; echo EQUIPOS_EQUIPO;
                    echo "</th><th>";
                    echo ACCION;
                    echo "</th><th>";
                    echo PROCEDIMIENTO;
                    echo"</th>";
                    echo "<th>";
                    echo LUGAR;
                    echo "</th>";
                    echo "<th>";
                    echo FECHA;
                    echo "</th>";
                    echo "</tr>";
                    echo "<tr><td>"; echo $row['1']; echo "</td><td>"; echo "$row[2]"; echo "</td><td colspan=2>"; echo "$row[3]"; echo "</td>";
                    echo "<td>"; echo "$row[4]"; echo"</td><td colspan=2>"; echo "$row[5]"; echo "</td></tr>";

                    echo "<th>"; echo RESULTADO;
                    echo "</th><th>";
                    echo DESVIACION;
                    echo "</th><th>";
                    echo ESTADO;
                    echo"</th>";
                    echo "<th>";
                    echo PROXIMA;
                    echo "</th>";
                    echo "<th>";
                    echo OBSERVACIONES;
                    echo "</th>";
                    echo "</tr>";
                    echo "<tr><td>"; echo "$row[6]"; echo "</td><td>"; echo "$row[7]"; echo "</td><td colspan=2>"; echo "$row[8]"; echo "</td></tr>";
                    echo "<tr><td>"; echo "$row[9]"; echo"</td><td colspan=2>"; echo "$row[10]"; echo "</td></tr>";
                    echo "</table>";
                        echo("Error description: " . mysqli_error($mysqli));
?>
