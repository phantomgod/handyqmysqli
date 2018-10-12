<?php

        //Ejecutamos la sentencia SQL

        $result=mysqli_query($mysqli, "SELECT *, DATE_FORMAT(fecha,'%d/%m/%Y') AS `fecha` from avisos LIMIT 0,2");
        ?>
        &nbsp;&nbsp;&nbsp;<h2>Última comunicaci&oacute;n</h2>

        <div id="contactiframe"><iframe src="pop-master/index.php"  height="100%" seamless></iframe></div>

<br /><a href="?seccion=avisos_admin">administrar este mensaje</a>
        <table class="sortable">
        <tbody>
        <tr>
        <th width="10%"><?php echo FECHA; ?></th>
        <th><?php echo COMENTARIOS; ?></th>
        <th></th>
        </tr>
        <?php
        //Mostramos los registros
        while ($row=mysqli_fetch_array($result))
        {

        echo '<tr><td style width="10%">'.$row["fecha"].'</td>';
        echo '<td>'.$row["comentarios"].'</td>';
        echo "<td><a href='?seccion=avisos_admin&amp;aktion=change_id&amp;id=".$row["id"]."'>
        <img src='images/red_edit.gif' alt='".EDITAR_AVISO."-".$row["id"]."' title='".EDITAR_AVISO."-".$row["id"]."'>
        </a></tr>";
        }
        ?>
        </tbody>
        </table>
        <p><?php echo PRESENTACION; ?></p>
        <p>© de Juan &amp; Asociados</p>