<!DOCTYPE html>
<html>
<head>

</head>
<body>

<span class="yellow"><?php echo ANOTARPOSITIVOSLEGIONELLA; ?></span>

<div style="width: 100%; overflow: hidden;">
<div style="float: left;">
<table>
  <tr>
    <td><?php echo MES; ?></td>
  </tr>
  <tr>
    <td><?php echo NSERVICIOS; ?></td>
  </tr>
  <tr>
    <td><?php echo POSITIVOS; ?></td>
  </tr>
  <tr>
    <td><?php echo PORCENTAJE; ?></td>
  </tr>
</table>
</div>

<div class="pre-scrollable">
<form name="positivoslegionella" method=POST action="?seccion=positivos_enviados" accept-charset="UTF-8">
  <style>
      input {
          resize: horizontal;
          width:50px;
      }

      input:active {
          width: auto;
      }

      input:focus {
          min-width: 50px;
      }
      th{text-align:center}
  </style>
  <table>
    <tr>
      <th>en</th>
      <th>feb</th>
      <th>mar</th>
      <th>abr</th>
      <th>may</th>
      <th>jun</th>
      <th>jul</th>
      <th>ago</th>
      <th>sept</th>
      <th>oct</th>
      <th>nov</th>
      <th>dic</th>
    </tr>
    <tr>
      <td><input type="text" name="nserviciosen"></td>
      <td><input type="text" name="nserviciosfeb"></td>
      <td><input type="text" name="nserviciosmar"></td>
      <td><input type="text" name="nserviciosabr"></td>
      <td><input type="text" name="nserviciosmay"></td>
      <td><input type="text" name="nserviciosjun"></td>
      <td><input type="text" name="nserviciosjul"></td>
      <td><input type="text" name="nserviciosago"></td>
      <td><input type="text" name="nserviciossep"></td>
      <td><input type="text" name="nserviciosoct"></td>
      <td><input type="text" name="nserviciosnov"></td>
      <td><input type="text" name="nserviciosdic"></td>
    </tr>
    <tr>
      <td><input type="text" name="positivosen"></td>
      <td><input type="text" name="positivosfeb"></td>
      <td><input type="text" name="positivosmar"></td>
      <td><input type="text" name="positivosabr"></td>
      <td><input type="text" name="positivosmay"></td>
      <td><input type="text" name="positivosjun"></td>
      <td><input type="text" name="positivosjul"></td>
      <td><input type="text" name="positivosago"></td>
      <td><input type="text" name="positivossep"></td>
      <td><input type="text" name="positivosoct"></td>
      <td><input type="text" name="positivosnov"></td>
      <td><input type="text" name="positivosdic"></td>
    </tr>
    <tr>
      <td><input type="text" name="porcentajeen"></td>
      <td><input type="text" name="porcentajefeb"></td>
      <td><input type="text" name="porcentajemar"></td>
      <td><input type="text" name="porcentajeabr"></td>
      <td><input type="text" name="porcentajemay"></td>
      <td><input type="text" name="porcentajejun"></td>
      <td><input type="text" name="porcentajejul"></td>
      <td><input type="text" name="porcentajeago"></td>
      <td><input type="text" name="porcentajesep"></td>
      <td><input type="text" name="porcentajeoct"></td>
      <td><input type="text" name="porcentajenov"></td>
      <td><input type="text" name="porcentajedic"></td>
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
