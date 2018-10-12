<?php
/**
* Mod administrar auditores
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

<table class='print'>
<caption><?php echo AUDITORES_ADMINISTRAR_AUDITORES; ?></caption>
 <tbody>
   <tr>
    <td>
      <a href="?seccion=auditores_admin&amp;aktion=add"><?php echo AUDITORIAS_ANADIR_AUDITOR; ?></a> ::
      <a href="?seccion=auditores_admin&amp;aktion=change"><?php echo AUDITORIAS_CAMBIAR_AUDITOR; ?></a>
    </td>
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
    if ((empty($_POST['auditor'])) AND (empty($_POST['activo']))) {
        echo '<form action="" method="POST">';
          echo '<table class="print">';
            echo '<caption>';
                 echo AUDITORIAS_ANADIR_AUDITOR;
            echo '</caption>';
            echo '<tbody>';
              echo '<tr>';
                echo '<th style width="25%">';
                   echo AUDITORIAS_AUDITOR;
                echo '</th>';
                   echo '<td style width="75%"><input style="width:60%" name="auditor" value=""></td>';
              echo '</tr>';
               ?>
                    <tr>
                         <td><input type="button" value="Subir imagen" onclick="Abrir_ventana('mod/ajaximage/index.php');"></td>
                    </tr>
             <?php
              echo '<tr>';

             ?>
                        <th>
                            <div id="help" onMouseOver="showdiv(event,'<?php echo GENERAL_IMAGEN_URLHELP ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
                            <?php  echo GENERAL_IMAGEN_URL; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/help.png" /></div>
                          </th>

                <?php
                   echo '<td>';

                       echo '<select name="imgsrc">';
                        $handle=opendir('mod/ajaximage/uploads/');
        while (false!==($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                       //echo "<option value=\"$file\">$file   - ".filesize("mod/faces/tmp/$file")." bytes</option>\n";
                        echo "<option value=\"mod/ajaximage/uploads/$file\">$file</option>\n";

            }
        }
                    closedir($handle);
                    echo "</select>";

                  //echo '<input style="width:60%" name="imgsrc" value="">';

                   echo '</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<th>';
                        echo GENERAL_ESTADO;
              echo '</th>';
                   echo '<td>';
                     echo '<select size="1" name="activo">';
                          echo '<option>...</option>';
                          echo '<option  value="1">'.GENERAL_ACTIVO.'</option>';
                          echo '<option  value="0">'.GENERAL_INACTIVO.'</option>';
                     echo '</select>';
                   echo '</td>';
              echo '</tr>';
                   echo '<td colspan="2"><input type="submit" value="'.GENERAL_ANADIR.'"></td>';
              echo '</tr>';
            echo '</tbody>';
          echo '</table>';
        echo '</form>';
    } else {


        if (isset($_POST['id'])) {
            $id_Post = $_POST['id'];
        }
        if (isset($_POST['auditor'])) {
            $auditor_Post = $_POST['auditor'];
        }
        if (isset($_POST['imgsrc'])) {
            $imgsrc_Post = $_POST['imgsrc'];
        }
        if (isset($_POST['activo'])) {
            $activo_Post = $_POST['activo'];
        }

            $sql =    mysql_query("INSERT INTO auditores (id, auditor, imgsrc, activo) VALUES ('".$id_Post."', '".$auditor_Post."', '".$imgsrc_Post."', '".$activo_Post."')");
        if ($sql) {
            echo "<span class='documenttitle'>";
            echo AUDITOR_ANADIDO;
            echo "</span>";
        } else {
            echo GENERAL_ERROR_ANADIR_REGISTRO;
        }
    }
}

if ($aktion == "change") {
    $sql = mysql_query("SELECT * FROM auditores ORDER BY auditor DESC");

        echo AUDITOR_ADVERTICE;
        echo '<table class="sortable">';
        echo '<caption>';
               echo AUDITOR_LISTA;
        echo '</caption>';
         echo '<tbody>';
           echo '<tr>';
             echo '<th>Id</th>';
             echo '<th>';
                echo AUDITORIAS_AUDITOR;
            echo '</th>';
            echo '<th>';
                echo AUDITOR_IMG;
            echo '</th>';
            echo '<th>';
                echo GENERAL_ESTADO;
            echo '</th>';
           echo '</tr>';
    while ($row = mysql_fetch_row($sql)) {
           echo "<tr>";
             echo "<td align=center>".$row['0']."</td>";
             echo "<td><a href='?seccion=auditores_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['1']."</a></td>";
             echo "<td><a href='?seccion=auditores_admin&amp;aktion=change_id&amp;id=".$row['0']."'><img src='".$row['2']."' border='0' width='100px'></a></td>";
             echo "<td><a href='?seccion=auditores_admin&amp;aktion=change_id&amp;id=".$row['0']."'>".$row['3']."</a></td>";
           echo "</tr>";
    }
         echo "</tbody>";
        echo "</table>";
}
if ($aktion == "change_id") {
    if ((empty($_POST['auditor_change'])) AND (empty($_POST['imgsrc_change'])) AND (empty($_POST['activo_change']))) {
        $id = (int)$_GET['id'];
        $sql = mysql_query("SELECT * FROM auditores WHERE id=$id ");
        $data = mysql_fetch_row($sql);

        echo '<form action="" method="POST">';
        echo '<table class="print">';
           echo '<caption>';
                 echo AUDITORIAS_CAMBIAR_AUDITOR;
           echo '</caption>';
           echo '<tbody>';
             echo '<tr>';
               echo '<th>';
                     echo AUDITORIAS_AUDITOR;
               echo '</th>';
                  echo '<td><input class="inputlargo" name="auditor_change" value="'.$data[1].'"></td>';
             echo '</tr>';
             echo '<tr>';
               echo '<th>';
                 echo AUDITORES_IMG;
              echo '</th>';
                  echo '<td>';


                     /* echo '<select name="imgsrc_change">';
                            echo '<option>'.$data[2].'</option>';
                             $sql = "SELECT imgsrc FROM auditores ORDER BY id DESC";
                             $sql = mysql_query($sql);
        if (!defined('imgsrc')) {
            define('IMGSRC', 'imgsrc');
        }
        while ($row = mysql_fetch_assoc($sql)) {
                             echo '<option value="'.$row[IMGSRC].'">'.$row[IMGSRC].'</option>';
        }
                      echo '</select>'; */





                    echo '<select name="imgsrc_change">';
                     echo '<option>'.$data[2].'</option>';
                    $handle=opendir('mod/ajaximage/uploads/');
        while (false!==($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                    //echo "<option value=\"$file\">$file   - ".filesize("mod/faces/tmp/$file")." bytes</option>\n";
                    echo "<option value=\"mod/ajaximage/uploads/$file\">/$file</option>\n";

            }
        }
                    closedir($handle);
                    echo "</select>";




                  echo '</td><td><img src='.$data[2].' border="0"></td>';
               //echo '<td><input class="inputlargo" name="imgsrc_change" value="'.$data[2].'"></td><td><img src='.$data[2].' border="0"></td>';
             echo '</tr>';
             echo '<tr>';
               echo '<th>';
                 echo GENERAL_ESTADO;
               echo '</th>';
                echo '<td><input class="inputlargo" name="activo_change" value="'.$data[3].'"></td>';
                echo '<td>1: '.GENERAL_ACTIVO.', 0: '.GENERAL_INACTIVO.'</td>';
             echo '</tr>';
                echo '<td colspan="2"><input type="submit" value="'.GENERAL_MODIFICAR.'"></td>';
             echo '</tr>';
          echo '</tbody>';
         echo '</table>';
        echo '</form>';
    } else {
        $id = (int)$_GET['id'];
        $sql = mysql_query("
               UPDATE auditores
               SET auditor='$_POST[auditor_change]',
               imgsrc='$_POST[imgsrc_change]',
               activo='$_POST[activo_change]' WHERE id=$id"
        );

    if ($sql) {

        $id = (int)$_GET['id'];
        $sql2 = mysql_query("SELECT * FROM auditores WHERE id = $id ");
        $data = mysql_fetch_row($sql2);
        echo AUDITORIAS_AUDITOR; echo '&nbsp;<span class="documenttitle">'.$data[1].'</span>&nbsp;'; echo GENERAL_ACTUALIZADO; echo '!';
            //echo AUDITORIA_ACTUALIZADA;
    }

        /*echo "<span class='documenttitle'>";
           echo AUDITORES_AUDITOR_ACTUALIZADO;
        echo "<span>";*/
    }
}
?>