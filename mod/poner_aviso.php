<!DOCTYPE html>
<html>
<head>
</script>
</head>
<body>

<span class="yellow"><?php echo AVISOS_PONERAVISO; ?></span>
<form name="avisos" method=POST action="?seccion=aviso_enviado" accept-charset="UTF-8">
<table class='print'>

 <tbody>
   <tr>
    <td><?php echo FECHA; ?></td>
    
    <td><input id='date' class='datepicker' name='fecha' value="" /></td>
     <!--<input type="text" name="fecha" value="" size=12>-->
  </tr>
  <tr>
     <td><?php echo AVISOS_COMUNICADOPOR; ?></td>
     <td><input type="text" name="comunicado_por" value="" size=27></td>
  </tr>
  <tr>
     <td><?php echo COMENTARIOS; ?></td>
     <td><textarea name="comentarios" cols="55" rows="9"></textarea></td>
  </tr>
  <tr>
    <!--colocamos los botones de enviar y borrar -->
     <td>
        <b><font>
          <input class="btn btn-success" type=submit value="<?php echo ENVIAR; ?>"></font></b>
     </td>
     <td>
          <input class="btn btn-success" type=reset value="<?php echo BORRAR; ?>">
     </td>
    </tr>
</table>
</div>
</body>
</html>
