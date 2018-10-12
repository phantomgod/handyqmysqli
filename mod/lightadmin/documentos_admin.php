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
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="../../jscripts/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="../../jscripts/thickbox.js"></script>

<link type="text/css" rel="stylesheet" title="default" href="../../templates/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="../../templates/printstyle.css" media="print" />
<link rel="stylesheet" href="../templates/thickbox.css" type="text/css" media="screen" />
 </head>
 <body>
<?php

include '../../lang/spanish.lang.php';
require_once '../../includes/mysql.php';
$db = new MySQL();

    // requires the class
    require "../../class.datepicker.php";

    // instantiate the object
    $db=new datepicker();

    // uncomment the next line to have the calendar show up in german
    $db->language = "spanish";

    $db->firstDayOfWeek = 1;

    // set the format in which the date to be returned
    $db->dateFormat = "Y-m-d";
?>
<br />
    <table class="print" summary="Administrar documentos">
    <caption><?php echo DOCUMENTOS_ADMINISTRAR_DOCUMENTOS;?></caption>
    <tbody>
    <tr>
    <td width="20%"><a href="?seccion=documentos_admin&amp;aktion=add"><?php echo DOCUMENTOS_ANADIR_DOCUMENTO; ?></a></td>
    <td><a href="?seccion=documentos_admin&amp;aktion=change"><?php echo DOCUMENTOS_CAMBIAR_DOCUMENTO; ?></a></td>
    </tr>
    </tbody>
    </table>
    <br>
<?php

// Aktionen
$aktion = '';
if (isset($_GET['aktion'])) {
    $aktion = $_GET['aktion'];
}
if ($aktion == "") {
     echo 'Admin Area';
}

if ($aktion == "add") {
    if ((empty($_POST['idsolicitud'])) AND (empty($_POST['fecha'])) AND (empty($_POST['titulo'])) AND (empty($_POST['link'])) AND (empty($_POST['comment'])) AND (empty($_POST['seccionid']))  AND (empty($_POST['clave1']))) {
        echo '<form action="" method="POST">';
             echo '<table class="print" summary="Añadir documento">';
                 echo '<caption>'.DOCUMENTOS_ANADIR_DOCUMENTO.'</caption>';
                     echo '<tbody>';
                         echo '<tr>';
                            echo '<th style width="20%">';
                              ?>
                                <div id="help" onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_IDSOLICITUD_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                              <?php echo DOCUMENTOS_IDSOLICITUD; ?>
                                &nbsp;&nbsp;&nbsp;&nbsp; <b><img src="images/help.png" /></b></div>
                              <?php
                            echo '</th>';
                                echo '<td>';
                                ?>
                                  <div id="help" onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_IDSOLICITUD_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'></div>
                                <?php

                                $sql = "SELECT MAX(id) AS id FROM solicitudes";
                                $sql = mysql_query($sql);
        while ($row = mysql_fetch_assoc($sql)) {
                               define('ID', 'id');
                                echo ''.$row[ID].'';
        }
                                echo '&nbsp;&nbsp;&nbsp;';
                                echo '<input class="inputcorto" name="idsolicitud" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th style width="20%">'.FECHA.'</th>';
                                echo '<td>';
                                  ?>
                                  <input type="text" id="date" class="inputfecha" name="fecha" value="" /><input type="button" value="::" onclick="<?php echo $db->show('date') ?>">
                                  <?php
                                echo '</td>';

                         //echo '<td><input class="inputlargo" name="fecha" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th style width="20%">'.NOMBRE_DOCUMENTO.'</th>';
                                echo '<td><input class="inputlargo" name="titulo" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th style width="20%">';

                            ?>
                              <div id="help" onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_LINK_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>

                          Link &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <img src="images/help.png" /></div>

                            <?php
                          echo '</th>';
                                echo '<td><input class="inputlargo" name="link" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th style width="20%">'.COMENTARIOS.'</th>';
                                 echo '<td><input class="inputlargo" name="comment" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th style width="20%">'.DOCUMENTOS_SECCIONID.'</th>';
                                 echo '<td>';
                                  echo ' <select name="seccionid">';
                                  echo '<option>...</option>';
                                   $sql = "SELECT * FROM  `secciones`";
                                   $sql = mysql_query($sql);


        if (!defined('nombre')) {
             define('NOMBRE', 'nombre');
        }
        while ($row = mysql_fetch_assoc($sql)) {

                                    echo '<option value="'.$row[ID].'">'.$row[ID].'-'.$row[NOMBRE].'</option>';
        }
                                   echo '</select>';
                                 echo ' </td>';
                          //echo '<td><input class="inputlargo" name="seccionid" value=""></td>';
                        echo '</tr>';
                        echo '<tr>';
                            echo '<th style width="20%">';
                            ?>
                              <div id="help" onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_CLAVE1_HELP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                                Clave1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>
                            <?php
                          echo '</th>';
                                     echo '<td><input class="inputlargo" name="clave1" value=""></td>';
                          echo '</tr>';
                                 echo '<td colspan="2"><input type="submit" value="'.ANADIR.'"></td>';
                        echo '</tr>';
                       echo '</tbody>';
                      echo '</table>';
                    echo '</form>';
    } else {

        if (isset($_POST['idsolicitud'])) {
            $idsolicitud_Post = $_POST['idsolicitud'];
        }
        if (isset($_POST['fecha'])) {
            $fecha_Post = $_POST['fecha'];
        }
        if (isset($_POST['titulo'])) {
            $titulo_Post = $_POST['titulo'];
        }
        if (isset($_POST['link'])) {
            $link_Post = $_POST['link'];
        }
        if (isset($_POST['comment'])) {
            $comment_Post = $_POST['comment'];
        }
        if (isset($_POST['seccionid'])) {
            $seccionid_Post = $_POST['seccionid'];
        }
        if (isset($_POST['clave1'])) {
            $clave1_Post = $_POST['clave1'];
        }

        $sql =    mysql_query("INSERT INTO enlaces (idsolicitud, fecha, titulo, link, comment, seccionid, clave1) VALUES ('".$idsolicitud_Post."', '".$fecha_Post."', '".$titulo_Post."', '".$link_Post."', '".$comment_Post."', '".$seccionid_Post."', '".$clave1_Post."')");
        if ($sql) {
            echo "<span class='documenttitle'>";
            echo DOCUMENTO_ANADIDO;
            echo "</span>";
        } else {
            echo ERROR_ANADIR_REGISTRO;
        }
    }
}

if ($aktion == "change") {
    $sql = mysql_query("SELECT * FROM enlaces ORDER BY titulo ASC");


        echo '<table class="sortable" summary="Modificar documentos">';
             echo '<caption>';
                 echo DOCUMENTOS_CAMBIAR_DOCUMENTO;
             echo '</caption>';
                 echo '<tbody>';
                    echo '<tr>';
                         echo '<th>ID</th>';
                         echo '<th>';
                             echo NOMBRE_DOCUMENTO;
                         echo '</th>';
                         echo '<th>Link</th>';
                         echo '<th>'.COMENTARIOS.'</th>';
                    echo '</tr>';
    while ($row = mysql_fetch_row($sql)) {
                    echo "<tr>";
                        echo "<td>".$row['0']."</td>";
                        /*echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
                        echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['2']."</a></td>";*/
                        echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['3']."</a></td>";
                        echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['4']."</a></td>";
                        echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['5']."</a></td>";
                        /*echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['6']."</a></td>";
                        echo "<td><a href='?seccion=documentos_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['7']."</a></td>";*/
                    echo "</tr>";
    }
                 echo '</tbody>';
        echo "</table>";
}


if ($aktion == "change_id") {
    if ((empty($_POST['idsolicitud_change'])) AND (empty($_POST['fecha_change'])) AND (empty($_POST['titulo_change'])) AND (empty($_POST['link_change'])) AND (empty($_POST['comment_change'])) AND (empty($_POST['seccionid_change'])) AND (empty($_POST['clave1_change']))) {
        $id = $_GET['id'];
        $sql = mysql_query("SELECT * FROM enlaces WHERE id = $_GET[id] ");
        $data = mysql_fetch_row($sql);

        echo '<form action="" method="POST">';
             echo '<table class="print" summary="Modificar documentos">';
                echo '<caption>';
                     echo DOCUMENTOS_PRINT_DETAILS;
                     echo ':&nbsp;&nbsp;<span class="documenttitle">'.$data[3].'</span>';
                echo '</caption>';
        echo '<tbody>';
            echo '<tr>';
                echo '<th style width="20%">';
                        echo DOCUMENTOS_IDSOLICITUD;
                echo '</th>';
                    echo '<td><input class="inputlargo" name="idsolicitud_change" value="'.$data[1].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style width="20%">';
                        echo FECHA;
                echo '</th>';
                     echo '<td>';
                       ?>
                      <input type="text" id="date" class="inputfecha" name="fecha_change" value="<?php echo $data[2];?>" /><input type="button" value="::" onclick="<?php echo $db->show('date') ?>">
                      <?php
                     echo '</td>';
          //echo '<td><input class="inputlargo" name="fecha_change" value="'.$data[2].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style width="20%">';
                    echo NOMBRE_DOCUMENTO;
                echo '</th>';
                    echo '<td><input class="inputlargo" name="titulo_change" value="'.$data[3].'"></td>';
            echo '</tr>';
            echo '<tr>';
               echo '<th style width="20%">Link</th>';
              echo '<td><input class="inputlargo" name="link_change" value="'.$data[4].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style width="20%">'.COMENTARIOS.'</th>';
                echo '<td><input class="inputlargo" name="comment_change" value="'.$data[5].'"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<th style width="20%">'.DOCUMENTOS_SECCIONID.'</th>';
                    echo '<td>';
                    echo '<select name="seccionid_change">';
                        echo '<option>'.$data[6].'</option>';
                         $sql = "SELECT * FROM `secciones`";
                         $sql = mysql_query($sql);
        if (!defined('id')) {
             define('ID', 'id');
        }
        if (!defined('nombre')) {
             define('NOMBRE', 'nombre');
        }
        while ($row = mysql_fetch_assoc($sql)) {
                        echo '<option value="'.$row[ID].'">'.$row[ID].'-'.$row[NOMBRE].'</option>';
        }
                    echo '</select>';

                    echo '</td>';
             //echo '<td><input class="inputlargo" name="seccionid_change" value="'.$data[6].'"></td>';

            echo '</tr>';
            echo '<tr>';
              echo '<th style width="20%">Clave1</th>';
              echo '<td><input class="inputlargo" name="clave1_change" value="'.$data[7].'"></td>';
            echo '</tr>';
              echo '<td colspan="2"><input type="submit" value="'.MODIFICAR.'"></td>';
            echo '</tr>';
          echo '</tbody>';
          echo '</table>';
        echo '</form>';
    } else {
        $sql = mysql_query(
                  "UPDATE enlaces
                  SET idsolicitud='$_POST[idsolicitud_change]',
                  fecha='$_POST[fecha_change]',
                  titulo='$_POST[titulo_change]',
                  link='$_POST[link_change]',
                  comment='$_POST[comment_change]',
                  seccionid='$_POST[seccionid_change]',
                  clave1='$_POST[clave1_change]'
                  WHERE id=$_GET[id]"
        );
        if ($sql) {

            $id = (int)$_GET['id'];
            $sql2 = mysql_query("SELECT * FROM enlaces WHERE id = $id ");
            $data = mysql_fetch_row($sql2);
            echo DOCUMENTO; echo '&nbsp;<span class="documenttitle"><a href="'.$data[4].'" target="blank">'.$data[3].'</a></span>&nbsp;'; echo ACTUALIZADO; echo '!';

             //echo ''.DOCUMENTO_ACTUALIZADO.'<br /><br />';
        }
         echo '<a href="?seccion=documentos_admin&amp;aktion=change"><input type="button" value="';
        echo DOCUMENTOS_MODIFICAROTRO_DOCUMENTO;
        echo '" /></a>';
    }
}
?>
 </body>
 </html>