<?php
/**
* Mod IMPRIMIR modificaciones por cada documento
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


		<?php echo DOCUMENTOS_JOIN; ?>


<?php

// Aktionen
$aktion = '';
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
}

if ($aktion == "") {
    echo 'Admin Area';
}

if ($aktion == "print") {


//--------------------------contamos los registros

$result = mysqli_query($mysqli, 'select count(*) AS count from ( SELECT `enlaces`.`id` id1 , `enlaces`.`link` , modifdoc. * FROM enlaces, modifdoc WHERE enlaces.titulo = modifdoc.titulo ORDER BY `enlaces`.`titulo` , `modifdoc`.`revision_num` ASC ) m');

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº registros: ';
	echo $row['0'];
	echo '</div>';
}

if($result === FALSE) {
    die(((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // TODO: better error handling
}

while($row = mysqli_fetch_array($result))
{
    echo '<div align="right">Nº registros: ';
	echo $row['0'];
	echo '</div>';
}

//--------------------------fin contar registros


        $sql = mysqli_query($mysqli, 
            "SELECT  `enlaces`.`id` `id1` ,  `enlaces`.`link` , modifdoc. *
             FROM enlaces, modifdoc
             WHERE enlaces.titulo = modifdoc.titulo
             ORDER BY  `enlaces`.`titulo` ,  `modifdoc`.`revision_num` ASC"
        );
		
			  	echo '<div align="center">';
				echo '<p align="left">';
				echo '<a class="tooltip2" href="#">' . DOCUMENTOS_MODIFICADOS . ':<span class="custom info"><img src="images/Info.png" alt="Info" title="Info" height="48" width="48" /><em>
				' . AYUDA . '</em>' . DOCUMENTOS_THEAD_ADVERTICE_JOIN . '</span></a></p>
				</div>';
		

        echo '<table class="sortable">';
		
            /*?>		
        echo '<caption>';	
			<div id="help"
				onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_THEAD_ADVERTICE_JOIN; ?>');"
				onMouseOut="hiddenDiv()" style='display: table;'>
				<?php echo DOCUMENTOS_MODIFICADOS; ?>
				&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/help.png" alt="help">
			</div>	
		echo '</caption>';
			<?php*/
			
        echo '<tbody>';
			echo '<tr><th>Id</th><th>' . REVISIONUM . '</th><th>' . NOMBRE_DOCUMENTO . '</th>
					<th>' . FECHA . '</th>
					<th><img src="images/preview.png" alt="'.VISTAPREVIA.'" title="'.VISTAPREVIA.'"></th>';
			echo '<th><img src="images/coffe_edit.gif" alt="' . EDITAR . '" title="'.EDITAR.'" /></th>'; 
			echo '<th><img src="images/coffe_print.gif" alt="' . IMPRIMIR . '" title="'.IMPRIMIR.'" /></th>';
    while ($row = mysqli_fetch_row($sql)) {
            echo "<tr>";
            echo "<td>".$row['2']."</td>";
            echo "<td>";

            echo "<a href='?seccion=modifdoc_print&amp;aktion=print_id&amp;id=$row[2]' alt='Image Tooltip' rel='tooltip' content='<table class=print2><tr>";
            echo "<th>"; echo NOMBRE_DOCUMENTO; echo "</th><th>"; echo DOCUMENTOS_NUMEROREVISION; echo "</th><th>"; echo DOCUMENTOS_MODIFICACION; echo"</th><th></th></tr>";
            echo "<tr><td>"; echo "$row[3]"; echo "</td><td>"; echo "$row[4]"; echo "</td><td colspan=2>"; echo "$row[5]"; echo "</td></tr>";
            echo "<tr><th colspan=2>"; echo DOCUMENTOS_CAPAPART; echo "</th><th colspan=2>"; echo DOCUMENTOS_FECHAMODIFICACION; echo "</th></tr>";
            echo "<tr><td colspan=2>"; echo "$row[6]"; echo"</td><td colspan=2>"; echo "$row[7]"; echo "</td></tr>";
            echo "</table>'>";

            echo "$row[4]";
            echo "</a>";

            echo "</td>";
            echo "<td>" . $row['3'] . "</td>";

            echo "<td><a href='?seccion=modifdoc_print&amp;aktion=print_id&amp;id=".$row['2']."'>".$row['7']."</a></td>";
			echo "<td><a href='" . $row['1'] . "?keepThis=true&TB_iframe=true&height=500&width=800' title=' " .$row[TITULO] . "' class='thickbox'><img src='images/preview.png' alt='" . VISTAPREVIA . "' title='" . VISTAPREVIA . "'></a></td>";
			echo '<td><a href="?seccion=modifdoc_admin&amp;aktion=change_id&amp;id='.$row[2].'">
                          <img src="images/coffe_edit.gif" alt="'.EDITAR.' - '.$row[2].'" title="'.EDITAR.' - '.$row[2].'" />
                      </a></td>';
			echo '<td><a href="?seccion=modifdoc_print&amp;aktion=print_id&amp;id='.$row[2].'">
                          <img src="images/coffe_print.gif" alt="'.IMPRIMIR.' - '.$row[2].'" title="'.IMPRIMIR.' - '.$row[2].'" />
                      </a></td>';
            echo "</tr>";
    }
         echo '</tbody>';
      echo "</table>";
	  
	  
}

		


if ($aktion == "print_id") {
        $_pagi_sql = "SELECT *
            FROM `modifdoc`
            WHERE `titulo` LIKE '$_GET[id]'";
        $sql = mysqli_query($mysqli, "SELECT * FROM enlaces WHERE `titulo` LIKE '$_GET[id]'");
        $data = mysqli_fetch_row($sql);

        //cantidad de resultados por página (opcional, por defecto 20)
        $_pagi_cuantos = 10;
        //Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente
        include "includes/paginator.inc.php";

    echo DOCUMENTOS_LISTA_MODIFICACIONES;
        echo '<table class="sortable">';
        echo '<caption>' . $data[3] . '</caption>';
              echo "<tr>";

                echo '<tbody>';
                echo '<tr>';
                //echo '<th>Id:</th>';
                //echo '<th>'.NOMBRE_DOCUMENTO.':</th>';
                echo '<th>'.DOCUMENTOS_NUMEROREVISION.':</th>';
                echo '<th>'.DOCUMENTOS_MODIFICACION.':</th>';
                echo '<th>'.DOCUMENTOS_CAPAPART.':</th>';
                echo '<th>'.DOCUMENTOS_FECHAMODIFICACION.':</th>';
                echo '</tr>';
                echo "<a href='?seccion=modificaciones_por_documento&amp;aktion=print'>";
                echo VOLVER;
                echo "</a>";

            //Leemos y escribimos los registros de la página actual
    while ($row = mysqli_fetch_array($_pagi_result)) {
                echo "<tr>";
                //echo "<td>".$row[0]."</td>";
                //echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "</tr>";
    }
        echo '</tbody>';
        echo '</table>';
}
//Incluimos la barra de navegación
echo"<br>".$_pagi_navegacion."</br>";
?>