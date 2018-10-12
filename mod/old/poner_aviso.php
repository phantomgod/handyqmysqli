<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
<head>
</script>
</head>
<body>

<?php
    // requires the class
    require "class.datepicker.php";
    
    // instantiate the object
    $db=new datepicker();
    
    // uncomment the next line to have the calendar show up in german
    //$db->language = "dutch";
    
    $db->firstDayOfWeek = 1;

    // set the format in which the date to be returned
    $db->dateFormat = "Y-m-d";
?>
<a href=?seccion=listavisos><?php echo AVISOS_LISTAVISOS; ?></a>

<form name="avisos" method=POST action="?seccion=aviso_enviado" accept-charset="UTF-8">
<table class='print' summary='Poner aviso'>
<caption><?php echo AVISOS_PONERAVISO; ?></caption>
 <tbody>
   <tr>
    <td><?php echo FECHA; ?></td>
    
    <td><input type="text" id="date" name="fecha" value="" /><input type="button" value="::" onclick="<?=$db->show("date")?>"></td>
     <!--<input type="text" name="fecha" value="" size=12>-->
  </tr>
  <tr>
     <td><?php echo AVISOS_COMUNICADOPOR; ?></td>
     <td><input type="text" name="comunicado" value="" size=27></td>
  </tr>
  <tr>
     <td><?php echo COMENTARIOS; ?></td>
     <td><textarea name="comments" cols="55" rows="9"></textarea></td>
  </tr>
  <tr>
    <!--colocamos los botones de enviar y borrar -->
     <td>
        <b><font>
          <input type=submit value="<?php echo ENVIAR; ?>"></font></b>
     </td>
     <td>
          <input type=reset value="<?php echo BORRAR; ?>">
     </td>
    </tr>
</table>
</div>
</body>
</html>
