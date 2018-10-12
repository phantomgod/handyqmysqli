<?php
/**
* Mod ADMINISTRAR documentos
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

<?php
/* requires the class
require "class.datepicker.php";

// instantiate the object
$db = new datepicker ();

// uncomment the next line to have the calendar show up in german
$db->language = "spanish";

$db->firstDayOfWeek = 1;

// set the format in which the date to be returned
$db->dateFormat = "Y-m-d";*/
?>
<br />

        <?php echo DOCUMENTOS_ADMINISTRAR_DOCUMENTOS;?> / 

            <a href="?seccion=documentos_admin&amp;aktion=add"><?php echo DOCUMENTOS_ANADIR_DOCUMENTO; ?></a>::
            <a href="?seccion=documentos_admin&amp;aktion=change"><?php echo DOCUMENTOS_CAMBIAR_DOCUMENTO; ?></a>

<br />
<?php

// Aktionen
$aktion = '';
if (isset ( $_GET ['aktion'] )) {
    $aktion = $_GET ['aktion'];
}
if ($aktion == "") {
    echo 'Admin Area';
}

if ($aktion == "add") {
    if ((empty ( $_POST ['idsolicitud'] )) 
	and (empty ( $_POST ['fecha'] )) 
	and (empty ( $_POST ['titulo'] )) 
	and (empty ( $_POST ['link'] )) 
	and (empty ( $_POST ['comment'] )) 
	and (empty ( $_POST ['seccionid'] )) 
	and (empty ( $_POST ['clave1'] ))) {
        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<caption>' . DOCUMENTOS_ANADIR_DOCUMENTO . '</caption>';
        echo '<tbody>';
        echo '<tr>';
        echo '<th STYLE WIDTH="15%">';
        
        ?>
        <!--<div id="help"
        onMouseOver="showdiv(event,'< ?php echo DOCUMENTOS_IDSOLICITUD_HELP; ?>');"
        onMouseOut="hiddenDiv()" style='display: table;'>-->
            
        <?php
                        
                echo '<div align="center">';
                echo '<p align="left">';
                echo '<a class="tooltip2" href="#">' . DOCUMENTOS_IDSOLICITUD . ' <i class="fa fa-question-circle fa-2x" style="color: #009EBA"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>
                ' . AYUDA . '</em>' . CODIGOSINCIDENCIAS_LASTID_HELP . '</span></a></p>
                </div>';


        echo '</th>';
        
        echo '<td>';
        ?>
<!--</div>-->

    <?php

        $sql = "SELECT MAX(idsolicitud) AS idsolicitud FROM enlaces";
        $sql = mysqli_query($mysqli,  $sql );
        while ( $row = mysqli_fetch_assoc( $sql ) ) {
             echo '' . $row ['idsolicitud'] . '';
        }
        echo '&nbsp;&nbsp;&nbsp;';
		echo '<input type="text" class="form-control input-mini" id="idsolicitud" name="idsolicitud" value=""></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . FECHA . '</th>';
        echo '<td><input id="date" class="datepicker" name="fecha" /></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . NOMBRE_DOCUMENTO . '</th>';
        echo '<td><input type="text" class="form-control input-xxlarge" id="titulo" name="titulo" value=""></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        
       
                echo '<div align="center">';
                echo '<p align="left">';
                echo '<a class="tooltip2" href="#">Link <i class="fa fa-question-circle fa-2x" style="color: #009EBA"></i><span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>
                ' . AYUDA . '</em>' . DOCUMENTOS_LINK_HELP . '</span></a></p>
                </div>';
        
        
        echo '</th>';
        echo '<td><input type="text" class="form-control input-xxlarge" id="link" name="link" value=""></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . REVISIONUM . '</th>';
        echo '<td><input type="text" class="form-control input-xxlarge" id="comment" name="comment" value=""></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . DOCUMENTOS_SECCIONID . '</th>';
        echo '<td>';
        echo ' <select name="seccionid">';
        echo '<option>...</option>';
        $sql = "SELECT * FROM  `secciones`";
        $sql = mysqli_query($mysqli,  $sql );

        if (! defined ( 'nombre' )) {
            define ( 'NOMBRE', 'nombre' );
        }
        while ( $row = mysqli_fetch_assoc( $sql ) ) {

            echo '<option value="' . $row [id] . '">' . $row [id] . '-' . $row [nombre] . '</option>';
        }
        echo '</select>';
        echo ' </td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        
                echo '<div align="center">';
                echo '<p align="left">';
                echo '<a class="tooltip2" href="#">' . DISTRIBUCION . ' <span class="custom help"><img src="images/Help2.png" alt="Help" title="Help" height="48" width="48" /><em>
                ' . AYUDA . '</em>' . DOCUMENTOS_CLAVE1_HELP . '</span></a></p>
                </div>';
        
        echo '</th>';
        echo '<td><input type="text" class="form-control input-xxlarge" id="clave1" name="clave1" value=""></td>';
        echo '</tr>';
        echo '<td colspan="2"><button type="submit" class="btn btn-info">' . ANADIR . '</button></td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {

        if (isset ( $_POST ['idsolicitud'] )) {
            $idsolicitud_Post = $_POST ['idsolicitud'];
        }
        if (isset ( $_POST ['fecha'] )) {
            $fecha_Post = $_POST ['fecha'];
        }
        if (isset ( $_POST ['titulo'] )) {
            $titulo_Post = $_POST ['titulo'];
        }
        if (isset ( $_POST ['link'] )) {
            $link_Post = $_POST ['link'];
        }
        if (isset ( $_POST ['comment'] )) {
            $comment_Post = $_POST ['comment'];
        }
        if (isset ( $_POST ['seccionid'] )) {
            $seccionid_Post = $_POST ['seccionid'];
        }
        if (isset ( $_POST ['clave1'] )) {
            $clave1_Post = $_POST ['clave1'];
        }

        $sql = mysqli_query($mysqli,  "INSERT INTO enlaces (idsolicitud, fecha, titulo, link, comment, seccionid, clave1) VALUES ('" . $idsolicitud_Post . "', '" . $fecha_Post . "', '" . $titulo_Post . "', '" . $link_Post . "', '" . $comment_Post . "', '" . $seccionid_Post . "', '" . $clave1_Post . "')" );
        if ($sql) {		
		
            echo "<span class='documenttitle'>";
            echo DOCUMENTO_ANADIDO;
            echo ":</span>";
			
			$sql3 = "SELECT Id, titulo FROM enlaces WHERE id = (SELECT MAX(id) FROM enlaces)";
			$sql3 = mysqli_query($mysqli,  $sql3 );
			while ( $row3 = mysqli_fetch_assoc( $sql3 ) ) {
				echo '<div class="alert alert-info" role="alert"><strong>' . $row3 ['titulo'] . '</strong></div>';
			}
			
			
        } else {
            echo ERROR_ANADIR_REGISTRO;
        }
    }
}

if ($aktion == "change") {
    $sql = mysqli_query($mysqli,  "SELECT * FROM enlaces ORDER BY titulo ASC" );

	echo '<span class="yellow">' . LISTA_DOCUMENTOS . '</span>';
    echo '<table id ="myTable" class="sortable">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th style width="50%">';
    echo NOMBRE_DOCUMENTO;
    echo '</th>';
    echo '<th>Link</th>';
    echo '<th>' . REVISIONUM . '</th>';
    echo '<th>' . DISTRIBUCION . '</th>';
	echo '<th><a href="#" title="'.EDITAR.'"><i class="fa fa-edit" style="color:#9fff30;"></i></th>';  
    echo '</tr>';
	echo '</thead><tbody>';
    while ( $row = mysqli_fetch_row( $sql ) ) {
        echo "<tr>";
        echo "<td>" . $row ['0'] . "</td>";        
        echo "<td>" . $row ['3'] . "</td>";
        //echo '<td><a href="' . $row[4] . '?keepThis=true&TB_iframe=true&height=500&width=800" alt="'.$row[3].'" title="'.$row[3].'" class="thickbox"><i class="fa fa-search fa-2x"></i></a></td>'; 
		echo '<td><a href="' . $row[4] . '" target="_blank" alt="'.$row[3].'" title="'.$row[3].'"><i class="fa fa-search"></i></a></td>';
        echo "<td>" . $row ['5'] . "</td>";
		echo "<td>".$row['7']."</td>";
		echo '<td><a href="?seccion=documentos_admin&amp;aktion=change_id&amp;id='.$row['0'].'" title="'.EDITAR.' - '.$row[0].'">
                          <i class="fa fa-pencil" style="color:#9fff30;"></i>
                          </a>
				</td>';		
        echo "</tr>";
    }
    echo '</tbody>';
    echo "</table>";
}

if ($aktion == "change_id") {
    if ((empty ( $_POST ['idsolicitud_change'] )) 
	and (empty ( $_POST ['fecha_change'] )) 
	and (empty ( $_POST ['titulo_change'] )) 
	and (empty ( $_POST ['link_change'] )) 
	and (empty ( $_POST ['comment_change'] )) 
	and (empty ( $_POST ['seccionid_change'] )) 
	and (empty ( $_POST ['clave1_change'] ))) {
        $id = $_GET ['id'];
        $sql = mysqli_query($mysqli,  "SELECT * FROM enlaces WHERE id = $_GET[id] " );
        $data = mysqli_fetch_row( $sql );

        echo '<form action="" method="POST">';
        echo '<table class="print">';
        echo '<caption>';
        echo DOCUMENTOS_PRINT_DETAILS;
        echo ':&nbsp;&nbsp;<span class="documenttitle">' . $data [3] . '</span>';
        echo '</caption>';
        echo '<tbody>';
        echo '<tr>';
        echo '<th style width="15%">';
        echo DOCUMENTOS_IDSOLICITUD;
        echo '</th>';
        echo '<td><input type="text" class="form-control input-xxlarge" name="idsolicitud_change" value="' . $data [1] . '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo FECHA;
        echo '</th>';
        echo '<td><input id="date2" class="datepicker" name="fecha_change" value="' . $data[2] . '" />';

        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>';
        echo NOMBRE_DOCUMENTO;
        echo '</th>';
        echo '<td><input type="text" class="form-control input-xxlarge" name="titulo_change" value="' . $data [3] . '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Link</th>';
        echo '<td><input type="text" class="form-control input-xxlarge" name="link_change" value="' . $data [4] . '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . REVISIONUM . '</th>';
        echo '<td><input type="text" class="form-control input-xxlarge" name="comment_change" value="' . $data [5] . '"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>' . DOCUMENTOS_SECCIONID . '</th>';
        echo '<td>';
        echo '<select name="seccionid_change">';
        echo '<option>' . $data [6] . '</option>';
        $sql = "SELECT * FROM `secciones`";
        $sql = mysqli_query($mysqli,  $sql );
        if (! defined ( 'id' )) {
            define ( 'ID', 'id' );
        }
        if (! defined ( 'nombre' )) {
            define ( 'NOMBRE', 'nombre' );
        }
        while ( $row = mysqli_fetch_assoc( $sql ) ) {
            echo '<option value="' . $row [id] . '">' . $row [id] . '-' . $row ['nombre'] . '</option>';
        }
        echo '</select>';

        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Clave1</th>';
        echo '<td><input type="text" class="form-control input-xxlarge" name="clave1_change" value="' . $data [7] . '"></td>';
        echo '</tr>';
        echo '<td colspan="2"><button type="submit" class="btn btn-info">' . MODIFICAR . '</button></td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</form>';
    } else {
        $sql = mysqli_query($mysqli,  "UPDATE enlaces
                  SET idsolicitud='$_POST[idsolicitud_change]',
                  fecha='$_POST[fecha_change]',
                  titulo='$_POST[titulo_change]',
                  link='$_POST[link_change]',
                  comment='$_POST[comment_change]',
                  seccionid='$_POST[seccionid_change]',
                  clave1='$_POST[clave1_change]'
                  WHERE id=$_GET[id]" );
        if ($sql) {

            $id = ( int ) $_GET ['id'];
            $sql2 = mysqli_query($mysqli,  "SELECT * FROM enlaces WHERE id = $id " );
            $data = mysqli_fetch_row( $sql2 );
			echo '<br /><br /><br />';
            echo DOCUMENTO;
            echo '&nbsp;<span class="documenttitle"><a href="' . $data [4] . '" target="blank">' . $data [3] . '</a></span>&nbsp;';
            echo ACTUALIZADO;
            echo '!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        }
        echo '<a href="?seccion=documentos_admin&amp;aktion=change"><button type="submit" class="btn btn-info">' . DOCUMENTOS_MODIFICAROTRO_DOCUMENTO . '</button></a>';
    }
}
?>
        </div>
    </div>
</div>