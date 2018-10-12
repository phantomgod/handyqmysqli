<?php
/**
* Mod LISTAR los cursos de formación
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


?>
<form action="?seccion=lista_tareas" method="POST">

<?php


$codigoobjetivo = (isset ($_POST ['seleccione'])) ? $_POST ['seleccione'] : '';

//$_pagi_sql = "SELECT * FROM objetivosseguimiento WHERE codigoobjetivo =  '$codigoobjetivo'";

$_pagi_sql = "SELECT s.*, o.Id, o.CodigoObjetivo, o.NombreObjetivo
				FROM objetivosseguimiento s
				INNER JOIN objetivosdatosgenerales o
				ON s.codigoobjetivo =  o.CodigoObjetivo
				AND s.codigoobjetivo =  '$codigoobjetivo'
				ORDER BY s.Id DESC";

//cantidad de resultados por página (opcional, por defecto 20)
$_pagi_cuantos = 20;

//Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
require "includes/paginator.inc.php";

 //Incluimos la barra de navegación
echo"<p>".$_pagi_navegacion."</p>";


            echo '<select name="seleccione">';
                echo '<option>'.SELECCIONAR,'</option>';
                 $sql = "SELECT `Id`, `CodigoObjetivo`, `NombreObjetivo`
				 FROM `objetivosdatosgenerales`";
                 $sql = mysqli_query($mysqli, $sql);

        while ($row1 = mysqli_fetch_assoc($sql)) {
                echo '<option value="'.$row1[CodigoObjetivo].'">' . $row1[CodigoObjetivo] . ' - ' . substr($row1[NombreObjetivo], 0, 30) . '</option>';

}
            echo '</select></td>';

?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn btn-info"><?php echo CONSULTAR; ?></button>
</form>

<?php



//Leemos y escribimos los registros de la página actual

	 if(mysqli_num_rows($_pagi_result) == 0) {
						echo NOSEHAENCONTRADO;
		} else {
          echo '<br />';

				  //--------------------------contamos los registros

			$result = mysqli_query($mysqli, "SELECT COUNT(*) FROM objetivosseguimiento WHERE codigoobjetivo =  '$codigoobjetivo'");

			while($row2 = mysqli_fetch_array($result))
			{
				echo '<div align="right">Nº registros: ';
				echo $row2['0'];
				echo '</div>';
			}

			if($result === FALSE) {
				die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
			}

			//--------------------------fin contar registros


			$sql2 = "SELECT o.`NombreObjetivo`
				 FROM `objetivosdatosgenerales` o
				 WHERE o.`CodigoObjetivo`=$codigoobjetivo";
                 $sql2 = mysqli_query($mysqli, $sql2);

        while ($row2 = mysqli_fetch_assoc($sql2)) {
                echo '<span class="documenttitle">Objetivo:';
				echo '' . $row2['NombreObjetivo'] . '</span><br /><br />';
		}


	echo '<table id="myTable" class="sortable">';
        echo '<thead>';
			echo '<tr>';
			echo '<th style width="10%">Id-seg</th>';
			echo '<th>Id-obj</th>';
			echo '<th>';
			echo CODIGO;
			echo '</th>';
			 echo '<th>';
			echo RESPONSABLE;
			echo '</th>';
			echo '<th>';
			echo OBJETIVOS_ACCION;
			echo '</th>';
			echo '<th>';
			echo LIMITE;
			echo '</th>';
			echo '<th>';
			echo TERMINACION;
			echo '</th>';
			echo '<th style width=30%>';
			echo OBSERVACIONES;
			echo '</th>';

			echo '<th style width="5%"><a href="#" title="'.OBJETIVOS_MODIFICAR_TAREA.'">';
				echo '<i class="fa fa-edit" style="color:Gold;"></i></a></th>';
			echo '<th style width="5%"><a href="#" title="'.OBJETIVOS_IMPRIMIR_OBJETIVO.'">
				  <i class="fa fa-print" style="color:#752209;"></i></a></th>';

        echo '</tr>';
		echo '</th>';
		echo '<tbody>';

    while ($row = mysqli_fetch_array($_pagi_result)) {
		echo "<tr>";
            echo "<td>".$row[0]."</td>";
						echo "<td>".$row[7]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[3]."</td>";
						echo "<td style='width:20%;'>".$row[2]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td>".$row[6]."</td>";
            echo "<td>";
                echo "<a href='?seccion=seguimientos_admin&amp;aktion=change_id&amp;id=$row[0]' title='" . OBJETIVOS_MODIFICAR_TAREA . " - $row[0]'>";
                echo "<i class='fa fa-pencil' style='color:Gold;'></i></a>";
            echo "</td>";
            echo "<td>";
                echo "<a href='?seccion=objetivos_print&amp;aktion=print_id&amp;id=$row[7]' title='" . OBJETIVOS_IMPRIMIR_OBJETIVO . " - $row[1]'>";
                echo "<i class='fa fa-print' style='color:#752209;'></i></a>";
            echo "</td>";
        echo "</tr>";
         echo "</tr>";

		}
 			echo "</tbody>";
			echo "</table>";
	}

//Incluimos la barra de navegación
echo"<p>".$_pagi_navegacion."</p>";
?>
