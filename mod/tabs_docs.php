<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../templates/bootstrap.css" type="text/css" />
<title>Sistema de pestañas</title>
<style type="text/css">
/* tamaño y forma del panel principal */
div#panel {
    position: relative;
    width:400px;
    height: 300px;
}

/* configuracion de las pestañas */
ul#tabs {
    position:absolute;
    left: 0px;
    top: 0px;
    margin:0;
    padding:0;
    width: 400px;
    height: 24px;
    z-index: 20;
}
    ul#tabs li {
        float:left;
        height: 23px;
        padding-left: 8px;
        list-style: none;
        margin-right: 1px;
        background: url(tabs.png) left -48px;
    }
    ul#tabs li.actual {
        height: 24px;
        background: url(tabs.png) left -72px;
    }
        ul#tabs li a {
            display: block;
                /* hack para ie6 */
                .display: inline-block;
                /* fin del hack */
            height: 23px;
            line-height: 23px;
            padding-right: 8px;
            outline: 0px none;
            font-family: arial;
            font-size: 10px;
            text-decoration: none;
            color: #000;
            background: url(tabs.png) right 0px;
        }

        ul#tabs li.actual a {
            height: 24px;
            line-height: 24px;
            background: url(tabs.png) right -24px;
            cursor: default;
        }

/* Configuración de los paneles */
div#panel #paneles {
    position:absolute;
    left: 0px;
    top: 23px;
    width: 800px;
    height: auto;
    border: 1px solid #91a7b4;
    background: #fff;
    overflow: hidden;
    z-index: 10px;
}
    div#panel #paneles div {
        margin:10px;
        width: 734px;
        height: auto;
        font-family: arial;
        font-size: 12px;
        text-decoration: none;
        color: #000;
        overflow: auto;
    }
</style>
<script type="text/javascript">
    function tab(pestana,panel)
    {
        pst     = document.getElementById(pestana);
        pnl     = document.getElementById(panel);
        psts    = document.getElementById('tabs').getElementsByTagName('li');
        pnls    = document.getElementById('paneles').getElementsByTagName('div');

        // eliminamos las clases de las pestañas
        for(i=0; i< psts.length; i++)
        {
            psts[i].className = '';
        }

        // Añadimos la clase "actual" a la pestaña activa
        pst.className = 'actual';

        // eliminamos las clases de las pestañas
        for(i=0; i< pnls.length; i++)
        {
            pnls[i].style.display = 'none';
        }

        // Añadimos la clase "actual" a la pestaña activa
        pnl.style.display = 'block';
    }
</script>
</head>
<body>
<?php include('../lang/spanish.lang.php');?>
<div id="panel">
    <ul id="tabs">
        <li id="tab_01"><a href="#" onclick="tab('tab_01','panel_01');">opción 1</a></li>
        <li id="tab_02"><a href="#" onclick="tab('tab_02','panel_02');">opción 2</a></li>
        <li id="tab_03"><a href="#" onclick="tab('tab_03','panel_03');">opción 3</a></li>
        <li id="tab_04"><a href="#" onclick="tab('tab_04','panel_04');">opción 4</a></li>
    </ul>
    <div id="paneles">
        <div id="panel_01">


<table class="print">
<caption><?php echo DOCUMENTOS_ADMINISTRAR_DOCUMENTOS;
include('../acciones/acciones_documentos.php');?></caption>
<tbody>
<tr>
<td><a href="?seccion=tabs_docs&amp;aktion=add" target="self"><?php echo DOCUMENTOS_ANADIR_DOCUMENTO; ?></a>::
<a href="?seccion=tabs_docs&amp;aktion=change" target="self"><?php echo DOCUMENTOS_CAMBIAR_DOCUMENTO; ?></a>
</td>
</tr>
</tbody>
</table>
<br>
<?php
include('../includes/mysqli.php');
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
       echo '<table class="print">';
       echo '<caption>'.DOCUMENTOS_ANADIR_DOCUMENTO.'</caption>';
       echo '<tbody>';
        echo '<tr>';
          echo '<th>'.DOCUMENTOS_IDSOLICITUD.'</th>';
          echo '<td><input class="inputlargo" name="idsolicitud" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.FECHA.'</th>';
          echo '<td><input class="inputlargo" name="fecha" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.NOMBRE_DOCUMENTO.'</th>';
          echo '<td><input class="inputlargo" name="titulo" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>Link</th>';
          echo '<td><input class="inputlargo" name="link" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.COMENTARIOS.'</th>';
          echo '<td><input class="inputlargo" name="comment" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.DOCUMENTOS_SECCIONID.'</th>';
          echo '<td><input class="inputlargo" name="seccionid" value=""></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>Clave1</th>';
          echo '<td><input class="inputlargo" name="clave1" value=""></td>';
          echo '</tr>';
          echo '<td colspan="2"><input type="submit" value="'.MODIFICAR.'"></td>';
        echo '</tr>';
       echo '</tbody>';
      echo '</table>';
    echo '</form>';
  } else {
    $idsolicitud_Post = $_POST['idsolicitud'];
    $fecha_Post = $_POST['fecha'];
    $titulo_Post = $_POST['titulo'];
    $link_Post = $_POST['link'];
    $comment_Post = $_POST['comment'];
    $seccionid_Post = $_POST['seccionid'];
    $clave1_Post = $_POST['clave1'];
    $sql =    mysqli_query($mysqli, "INSERT INTO enlaces (idsolicitud, fecha, titulo, link, comment, seccionid, clave1) VALUES ('".$idsolicitud_Post."', '".$fecha_Post."', '".$titulo_Post."', '".$link_Post."', '".$comment_Post."', '".$seccionid_Post."', '".$clave1_Post."')");
    if ($sql) echo "Auditoría añadida";
    else echo "Error al añadir el registro!";
  }
}

if ($aktion == "change") {
 
	$sql2 = mysqli_query($mysqli, "SELECT * FROM enlaces ORDER BY titulo ASC");

  echo '<table class="print">';
  echo '<caption>';
          echo DOCUMENTOS_CAMBIAR_DOCUMENTO;
      echo '</caption>';
  echo '<thead>';
    echo DOCUMENTOS_THEAD_ADVERTICE;
   echo '</thead>';
    echo '<tbody>';
  echo '<tr>';
    echo '<th>';
         echo NOMBRE_DOCUMENTO;
    echo '</th>';
    echo '<th>Link</th>';
    echo '<th>'.COMENTARIOS.'</th>';
   echo '</tr>';

  
 while ($row = mysqli_fetch_row($sql2)) {
        echo "<tr>";
        /*echo "<td>".$row['0']."</td>";
        echo "<td><a href='?seccion=tab_docs&amp;aktion=change_id&amp;id=".$row['0']."' target='self'>".$row['1']."</a></td>";
        echo "<td><a href='?seccion=tab_docs&amp;aktion=change_id&amp;id=".$row['0']."' target='self'>".$row['2']."</a></td>";*/
        echo "<td><a href='?seccion=tab_docs&amp;aktion=change_id&amp;id=".$row['0']."' target='self'>".$row['3']."</a></td>";
        echo "<td><a href='?seccion=tab_docs&amp;aktion=change_id&amp;id=".$row['0']."' target='self'>".$row['4']."</a></td>";
        echo "<td><a href='?seccion=tab_docs&amp;aktion=change_id&amp;id=".$row['0']."' target='self'>".$row['5']."</a></td>";
        /*echo "<td><a href='?seccion=tab_docs&amp;aktion=change_id&amp;id=".$row['0']."' target='self'>".$row['6']."</a></td>";
        echo "<td><a href='?seccion=tab_docs&amp;aktion=change_id&amp;id=".$row['0']."' target='self'>".$row['7']."</a></td>";*/
        echo "</tr>";
  }
      echo '</tbody>';
  echo "</table>";
}


if ($aktion == "change_id") {
  if ((empty($_POST['idsolicitud_change'])) AND (empty($_POST['fecha_change'])) AND (empty($_POST['titulo_change'])) AND (empty($_POST['link_change'])) AND (empty($_POST['comment_change'])) AND (empty($_POST['seccionid_change'])) AND (empty($_POST['clave1_change']))) {
    $id = $_GET['id'];
    $sql = mysqli_query($mysqli, "SELECT * FROM enlaces WHERE id = $_GET[id] ");
    $data = mysqli_fetch_row($sql);

    echo '<form action="" method="POST">';
      echo '<table class="print">';
      echo '<caption>';
          echo DOCUMENTOS_PRINT_DETAILS;
      echo '</caption>';
       echo '<tbody>';
        echo '<tr>';
          echo '<th>';
         echo DOCUMENTOS_IDSOLICITUD;
         echo '</th>';
          echo '<td><input class="inputlargo" name="idsolicitud_change" value="'.$data[1].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
         echo FECHA;
          echo '</th>';
          echo '<td><input class="inputlargo" name="fecha_change" value="'.$data[2].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>';
         echo NOMBRE_DOCUMENTO;
          echo '</th>';
          echo '<td><input class="inputlargo" name="titulo_change" value="'.$data[3].'"></td>';
        echo '</tr>';
        echo '<tr>';
           echo '<th>Link</th>';
          echo '<td><input class="inputlargo" name="link_change" value="'.$data[4].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.COMENTARIOS.'</th>';
          echo '<td><input class="inputlargo" name="comment_change" value="'.$data[5].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>'.DOCUMENTOS_SECCIONID.'</th>';
          echo '<td><input class="inputlargo" name="seccionid_change" value="'.$data[6].'"></td>';
        echo '</tr>';
        echo '<tr>';
          echo '<th>Clave1</th>';
          echo '<td><input class="inputlargo" name="clave1_change" value="'.$data[7].'"></td>';
        echo '</tr>';
          echo '<td colspan="2"><input type="submit" value="'.MODIFICAR.'"></td>';
        echo '</tr>';
      echo '</tbody>';
      echo '</table>';
    echo '</form>';
  } else {
    $sql = mysqli_query($mysqli, "UPDATE enlaces SET idsolicitud='$_POST[idsolicitud_change]',fecha='$_POST[fecha_change]',titulo='$_POST[titulo_change]',link='$_POST[link_change]',comment='$_POST[comment_change]',seccionid='$_POST[seccionid_change]',clave1='$_POST[clave1_change]' WHERE id=$_GET[id]");
    if ($sql) echo ''.DOCUMENTO_ACTUALIZADO.'';
  }
}
?>

        </div>
        <div id="panel_02">
                <p>panel para la opción 2. En este caso tal y como tenemos la configuración de los paneles, podemos añadir todo el texto que queramos sin deformar el aspecto del panel, ya que en caso de tener mucho texto, nos aparecerá un scroll</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
        </div>
        <div id="panel_03">panel para la opción 3</div>
        <div id="panel_04">panel para la opción 4</div>
    </div>
    <script type="text/javascript">
        tab('tab_01','panel_01');
    </script>
</div>
</body>
</html>
