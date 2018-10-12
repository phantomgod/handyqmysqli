<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>Pop! simple pop menus with jQuery</title>
    <link href="stylesheets/pop.css" media="all" rel="stylesheet" type="text/css"/><link href="stylesheets/application.css" media="all" rel="stylesheet" type="text/css"/>
    <script language="javascript" src="javascripts/jquery.js" type="text/javascript"></script><script language="javascript" src="javascripts/jquery.pop.js" type="text/javascript"></script>
    <script type='text/javascript'>
      $(document).ready(function(){
        $.pop();
      });
    </script>
  </head>
  <body>   

          
          <div class='pop'><br />
            <?php
                    require_once ("../includes/mysql.php");
                    $db = new MySQL();

                     if((empty($_POST['fecha'])) AND (empty($_POST['comunicado_por'])) AND (empty($_POST['comentarios']))){
                        echo '<form action="" method="POST">';
                          echo '<table>';                            
                                echo '<tbody>';
                                    echo '<tr>';
                                      echo '<td>Comunicado por: <br /><input style="width:100%" name="comunicado_por" value=""></td>';                                     
                                    echo '</tr>';
                                    echo '<tr>';
                                      echo '<td>Comentarios: <br /><textarea style="width:100%" rows="5" name="comentarios" value=""></textarea></td>';                                      
                                    echo '</tr>';
                                      echo '<td colspan="2"><input type="submit" id="popsubmit" value="Enviar"></td>';
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
                        if($sql) echo "Que sí !, que lo ha enviado !";
                        else echo "Error al añadir el registro!";
                      }
                     ?>
                     
                     <?php
                    error_reporting(0);
                            $to = "Manuel.Carrillo.external@military.airbus.com,javier@textblock.org,enprado@hotmail.com";
                            $subject = "pop-master";
                            $message = "\nComunicado por: ". $comunicado_por_Post .  "\nComentarios: " . $comentarios_Post ;
                            $from = "pop-master@valoryempresa.com";
                            $headers = "From:" . $from;
                            mail($to,$subject,$message,$headers);
                            echo "Mail Sending";
                    
                    ?>
          </div>
       
  </body>
</html>