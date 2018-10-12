<?php
require_once ("../handyq/includes/mysql.php");
$db = new MySQL();

 if((empty($_POST['fecha'])) AND (empty($_POST['comunicado_por'])) AND (empty($_POST['comentarios']))){
    echo '<form action="" method="POST">';
      echo '<table>';
        echo '<thead></thead>';
            echo '<tbody>';
                echo '<tr>';
                  echo '<td>Comunicado por: </td>';
                  echo '<td><input style="width:100%" name="comunicado_por" value=""></td>';
                echo '</tr>';
                echo '<tr>';
                  echo '<td>Comentarios: </td>';
                  echo '<td><textarea style="width:100%" rows="5" name="comentarios" value=""></textarea></td>';
                echo '</tr>';
                  echo '<td colspan="2"><input type="submit" value="Submit"></td>';
                echo '</tr>';
            echo '</tbody>';            
      echo '</table>';
    echo '</form>';
  }else{  
        $values = $_POST;
        foreach ($values as &$value) {
            $value = mysql_real_escape_string($value);
        }  
    $fecha_Post = $_POST['fecha'];
    $comunicado_por_Post = $_POST['comunicado_por'];
    $comentarios_Post = $_POST['comentarios'];
    $sql =    mysql_query("INSERT INTO avisos (fecha, comunicado_por, comentarios) VALUES ('".$fecha_Post."', '".$comunicado_por_Post."', '".$comentarios_Post."')");
    if($sql) echo "Aviso añadido";
    else echo "Error al añadir el registro!";
  }
 ?>