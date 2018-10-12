<?php
/**
* Mod COMBINAR auditorías y no conformidades
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


$sql = "SELECT hojas . * , audit . *, aisgc . *
FROM hojasdemejora AS hojas,
      informeauditoria AS audit,
      aisgc AS aisgc
      WHERE hojas.ai = audit.ai
      AND hojas.ai = aisgc.ai
      GROUP BY hojas.id DESC
      ORDER BY `audit`.`id` DESC";

//cantidad de resultados por página (opcional, por defecto 20)
//$_pagi_cuantos = 60;

//Incluimos el script de paginación. éste ya ejecuta la consulta automáticamente
//require "includes/paginator.inc.php";

//echo "<p align=right>".$_pagi_info."</p>";


echo NCS_AUDITS_JOIN_LIST;
            ?>
        <div class="left">
        <p class="left">
        <?php echo AUDITORIAS_JOIN; ?>
        <a class="tooltip2" href="#">!!!<span class="custom warning">
                <img src="images/Warning.png" alt="Help" title="Help" height="48" width="48" />
                <em><?php echo ATENCION; ?></em><?php echo AUDITORIAS_JOIN_HELP; ?></span></a>
        </p>
        </div>


        <?php
        echo "<table id='myTable' class='sortable'>";

              echo '<thead>';
                echo "<tr>";
                echo "<th style='width:10%'>Id1:</th>";
                echo "<th style='width:10%'>";
                echo INFORME;
                echo "</th>";

                echo "<th style='width:10%'>";
                echo AUDITORIA;
                echo "</th>";

/*--------------------- IMPRIMIR-EDITAR INFORMES TH ----------------
                echo '<th>';
                echo "<a href='#' title='";
                echo MENU_ALT_ADMINISTRAR_AINFORMES;
                echo "'>";
                echo "<i class='fa fa-edit' style='color:#ff0000;'></i></th>";

                echo '<th>';
                echo "<a href='#' title='";
                echo AINFORMES_IMPRIMIR;
                echo "'>";
                echo "<i class='fa fa-print' style='color:#ff0000;'></i></th>";

//--------------------- IMPRIMIR-EDITAR INFORMES TH ----------------- */

                echo "<th style='width:30%'>";
                echo AUDITORIAS_HOJA;
                echo "</th>";

/*--------------------- IMPRIMIR-EDITAR NCS TH
                echo '<th style="width:2%">';
                echo "<a href='#' title='";
                echo NCS_EDITAR_NC;
                echo "'>";
                echo "<i class='fa fa-edit' style='color:#9fff30;'></i></th>";

                echo '<th style="width:2%">';
                echo "<a href='#' title='";
                echo NCS_IMPRIMIR;
                echo "'>";
                echo "<i class='fa fa-print' style='color:#9fff30;'></i></th>";

//--------------------- IMPRIMIR-EDITAR NCS TH ------------------- */

                echo "</tr>";
                echo '</thead>';
                echo '<tbody>';
//Leemos y escribimos los registros de la página actual
$result = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_row($result)) {

        echo "<tr>";
            echo "<td style='width: 50px;'>$row[0]</td>";

//----------------------------------------------TOOLTIP PARA INFORMES

            echo "<td>";
              ?>
              <div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
                <a href='?seccion=auditorias_admin&amp;aktion=change_id&amp;id=<?php echo $row ['17']; ?> alt='<?php echo $row ['18']; ?>><?php echo $row['18']; ?></a>

                <span>

                <a href="?seccion=auditorias_admin&aktion=change_id&id=<?php echo $row ['17']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['18']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#ffeb3b;"></i></a>

                <a href="mod/javaformdelete_informes.php?var=<?php echo $row ['17']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['18']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#ffeb3b;"></i></a>

                <a href="?seccion=auditorias_admin&amp;aktion=print_id&id=<?php echo $row ['17']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo INFORME; echo "&nbsp;"; echo $row ['18']; ?>"><i class="fa fa-print" style="position:absolute; left:130px; top:10px; color:#ffeb3b;"></i></a>

                <div style="position:absolute; left:170px; top:10px; color: white; font-size: 14px;">Informe de la auditoría <?php echo $row ['1']; ?> a: <?php echo $row ['20']; ?></div>
                <br>

                  <table>
                  <tr>
                    <th><?php echo AUDITORIAS_AUDITORIA; ?></th>
                    <th><?php echo FECHA; ?></th>
                    <th><?php echo AINFORMES_AREA_AUDITADA; ?></th>
                    <th></th>
                  </tr>
                  <tr>
                    <td><?php echo $row['18']; ?></td>
                    <td><?php echo $row['19']; ?></td>
                    <td colspan=2><?php echo $row['20']; ?></td>
                  </tr>
                  <tr>
                    <th colspan=2><?php echo DOCUMENTACION; ?></th>
                    <th colspan=2><?php echo AUDITORIAS_AUDITOR; ?></th>
                  </tr>
                  <tr>
                    <td colspan=2><?php echo $row['21']; ?></td>
                    <td colspan=2><?php echo $row['22']; ?></td>
                  </tr>
                  <tr>
                    <th colspan=2><?php echo AINFORMES_OBJETO; ?></th>
                    <th><?php echo RESULTADO; ?></th>
                  </tr>
                  <tr>
                  <td colspan=2><?php echo $row['23']; ?></td>
                  <td colspan=2><?php echo $row['24']; ?></td></tr>
                  </td></tr></table>

                </span>
              </div>


              <?php
            echo "</td>";

//---------------------------------------------- FIN TOOLTIP PARA INFORMES ---------------


//---------------------------------------------- TOOLTIP PARA AISGC ----------------

echo "<td>";
?>
<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
    <a href="index.php?seccion=aisgc_print&amp;aktion=print_id&amp;id=<?php echo $row['25'] ?>"><?php echo $row['27'] ?></a>

  <span>
    <br />
    <a href="?seccion=aisgc_admin&aktion=change_id&id=<?php echo $row ['25']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['25']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

    <a href="mod/javaformdelete.php?var=<?php echo $row ['25']; ?>" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['27']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

    <a href="?seccion=aisgc_print&amp;aktion=print_id&id=<?php echo $row ['25']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo AUDITORIAS_AUDITORIA; echo "&nbsp;"; echo $row ['27']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>
    <?php echo $row ['0']; ?>

    <div style="position:absolute; left:170px; top:10px; color: white; font-size: 14px;"><?php echo $row ['45']; ?></div>

    <?php

      echo "<table class='print2'>
        <tr>";
        echo "<th style width=20%><font color='red'>" . FECHA . "</font></th>
            <th><font color='red'>" . AUDITORIAS_NUMERO_AUDITORIA. "</font></th>
            <th><font color='red'>" . AUDITORIAS_AUDITOR . "</font></th>
            <th><font color='red'>" . DOCUMENTOS . "</font></th>
        </tr>
        <tr>
          <td style width=20%>$row[26]</td>
          <td>$row[27]</td>
          <td>$row[28]</td>
          <td>$row[31]</td>
        </tr>
        <tr>
          <th colspan=2><font color='red'>" . CUESTIONARIO_TRATAMIENTOS . "</font></th>
          <th colspan=2><font color='red'>" . CUESTIONARIO_CALIDAD . "</font></th>
        </tr>
        <tr>
          <td colspan=2>$row[38]</td>
          <td colspan=2>$row[39]</td>
        </tr>
        <tr>
          <th colspan=2><font color='red'>" . CUESTIONARIO_ALMACEN . "</font></th>
          <th><font color='red'>" . CUESTIONARIO_COMPRAS . "</font></th>
        </tr>
        <tr>
          <td colspan=2>$row[40]</td>
          <td colspan=2>$row[41]</td>
        </tr>
        <tr>
          <th colspan=2><font color='red'>" . CUESTIONARIO_FORMACION . "</font></th>
          <th colspan=2><font color='red'>" . CUESTIONARIO_DOCUMENTACION . "</font></th>
        </tr>
        <tr>
          <td colspan=2>$row[42]</td>
          <td colspan=2>$row[43]</td>
        </tr>
        <tr>
          <th colspan=2><font color='red'>" . CUESTIONARIO_EQUIPOS . "</font></th>
        </tr>
        <tr>
          <td colspan=2>$row[44]</td>
        </tr>
      </table>";
    ?>
    </span>
</div>
<?php

echo "</td>";

//---------------------------------------------- FIN TOOLTIP PARA AISGC ----------------


/*------------------------------------------ IMPRIMIR-EDITAR INFORMES TD
                    ?>
                    <td style='width: 50px;'><a href="?seccion=auditorias_admin&amp;aktion=change_id&amp;id=<?php echo $row['20'];?>" title="<?php echo AINFORMES_EDITAR; echo '- ' . $row[2] . ''; ?>">
                    <i class='fa fa-edit' style='color:#ff0000;'></i></a></div></td>
                    <td><div><a href="?seccion=auditorias_print&amp;aktion=print_id&amp;id=<?php echo $row['20'];?>" title="<?php echo AINFORMES_IMPRIMIR; echo '- ' . $row[2] . ''; ?>">
                    <i class='fa fa-print' style='color:#ff0000;'></i></a></div></td>
                    <?php

//--------------------- FIN IMPRIMIR-EDITAR INFORMES TD -------------------------- */


//---------------------------------------------- TOOLTIP PARA NCS ---------------------
            echo "<td>";
            			?>
    						<div class="ToolText"  onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'">
    								<a href="index.php?seccion=ncs_print&amp;aktion=print_id&amp;id=<?php echo $row['0'] ?>"><?php echo $row['2'] ?></a>

    								<span>
    								<br />
    								<!--<div onMouseOver="showdiv(event,'< ?php echo NCS_ANADIR_NC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
    								<a href="?seccion=ncs_admin&aktion=add" title="< ?php echo ANADIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row['0']; ?>"><i class="fa fa-plus fa-2x" style="position:absolute; left:10px; top:10px; color:#9fff30;"></i></a><!--</div>-->

    								<a href="?seccion=ncs_admin&aktion=change_id&id=<?php echo $row['0']; ?>" title="<?php echo EDITAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row['0']; ?>"><i class="fa fa-pencil fa-2x" style="position:absolute; left:50px; top:10px; color:#9fff30;"></i></a>

    								<a href="mod/javaformdelete.php" target="popup" onClick="window.open(this.href, this.target, 'width=360,height=215'); return false;" title="<?php echo BORRAR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row['0']; ?>"><i class="fa fa-trash-o fa-2x" style="position:absolute; left:90px; top:10px; color:#9fff30;"></i></a>

    								<a href="?seccion=ncs_print&amp;aktion=print_id&id=<?php echo $row ['0']; ?>" title="<?php echo IMPRIMIR; echo "&nbsp;"; echo NC; echo "&nbsp;"; echo $row['0']; ?>"><i class="fa fa-print fa-2x" style="position:absolute; left:130px; top:10px; color:#9fff30;"></i></a>

                    <div style="position:absolute; left:170px; top:10px; color: white; font-size: 14px;">NC la auditoría  <?php echo $row ['1']; ?>  a: <?php echo $row ['20']; ?></div>
                    <br>

    								<?php
    									echo "<table class=print>
    											<tbody>
    											<tr>
    											<th>" . NCS_NUMERO . " </th><td>$row[2]</td>
    											</tr>
    											<tr>
    												<th>" . DESCRIPCION . " </th><td> <font color='red'>" . strip_tags($row['4'] . '<font>, <b>') . "</font></td>
    											</tr>
    											<tr>
    												<th>" . AUDITORIAS_NUMERO_AUDITORIA . "</th><td>$row[1]</td>
    											</tr>
    											<tr>
    												<th>" . DOCUMENTACION . "</th><td>$row[6]</td>
    											</tr>
    											<tr>
    												<th>" . NCS_ABIERTOPOR . "</th><td>$row[7]</td>
    											</tr>
    											<tr>
    												<th>" . NCS_AFECTAA . "</th><td>$row[8]</td>
    											</tr>
    											<tr>
    												<th>" . NCS_CAUSAS . "</th><td>" . strip_tags($row['9'], '<font>, <b>') . "</td>
    											</tr>
    											<tr>
    												<th>" . NCS_ACCIONES . "</th><td>" . strip_tags($row['10'], '<font>, <b>') . "</td>
    											</tr>
    											<tr>
    												<th>" . NCS_EFICACIA . "</th><td>" . strip_tags($row['13'], '<font>, <b>') . "</td>
    											</tr>
    											<tr>
    												<th>" . NCS_PLAZO . "</th><td>$row[11]</td>
    											</tr>
    											<tr>
    												<th>" . NCS_CIERRE_PARCIAL . "</th><td>" . strip_tags($row['12'], '<font>, <b>') . "</td>
    											</tr>
    											<tr>
    												<th>" . FECHA . "</th><td>$row[5]</td>
    											</tr>
    											<tr>
    												<th>" . NCS_DESVIACION . "</th><td>$row[15]</td>
    											</tr>
    											<tr>
    												<th>" . NCS_FECHACIERRE . "</th><td>$row[14]</td>
    											</tr>
    											</tbody>
    											<tr> </table>";
    								?>
    								</span>
    						</div>
    					<?php
    				echo "</td>";

//---------------------------------------------- FIN TOOLTIP PARA INFORMES ----------------

/*-------------------------------------- IMPRIMIR-EDITAR NCS TD --------------------------
            echo "<td>";
                echo "<a href='?seccion=ncs_admin&amp;aktion=change_id&amp;id=$row[0]' title='".NCS_EDITAR_NC."-$row[3]'>";
                echo "<i class='fa fa-edit' style='color:#9fff30;'></i></a>";

            echo "</td>";
            echo "<td>";
                echo "<a href='?seccion=ncs_print&amp;aktion=print_id&amp;id=$row[0]' title='".NCS_IMPRIMIR."-$row[3]'>";
                echo "<i class='fa fa-print' style='color:#9fff30;'></i></a>";
            echo "</td>";

//-------------------------------------- FIN IMPRIMIR-EDITAR NCS TD -------------------------- */

        echo "</tr>";
}
    echo "</tbody>";
    echo "</table><br /><br />";

?>
<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
