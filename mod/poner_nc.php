<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
<head>
</head>
<body>

<p><H4>HOJAS DE NO CONFORMIDAD</H4></p>

<form name="poner_nc" method=POST action="?seccion=nc_enviada">
</p>
<table>
  <tr>
     <td><font class="fontd"><b>AI.:</b></font>
     </td>
     <td>
       <input type="text" name="ainum" value="" size=12>
     </td>
  </tr>
  <tr>
     <td><font class="fontd"><b>Hoja Num.:</b></font>
     </td>
     <td>
       <input type="text" name="hojanum" value="" size=12>
     </td>
     </tr>
   <tr>
     <td><font class="fontd"><b>Hoja c&oacute;digo:</b></font>
     </td>
     <td>
       <input type="text" name="codhoja" value="" size=12
     </td>
     </tr>
   <tr>
     <td><font class="fontd"><b>Descripci&oacute;n.:</b></font>
     </td>
     <td>
         <textarea class="textareanormal" name="descripcion"></textarea>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Fecha:</b></font>
     </td>
     <td>
       <input type="text" name="fecha" value="" size=12>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Documentos.:</b></font>
     </td>
     <td>
       <input type="text" name="documentos" value="" size=30>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Abierto por.:</b></font>
     </td>
     <td>
       <input type="text" name="abiertopor" value="" size=30>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Afecta a.:</b></font>
     </td>
     <td>
       <input type="text" name="afectaa" value="" size=30>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Causas.:</b></font>
     </td>
     <td>
      
         <textarea name="causas" cols="35" rows="4"></textarea>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Acciones.:</b></font>
     </td>
     <td>
        
         <textarea name="acciones" cols="55" rows="9"></textarea>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Plazo.:</b></font>
     </td>
     <td>
       <input type="text" name="plazo" value="" size=20>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Cierres Parciales.:</b></font>
     </td>
     <td>
      
         <textarea name="parcierres" cols="35" rows="4"></textarea>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Eficacia.:</b></font>
     </td>
     <td>
      
      <textarea name="eficacia" cols="35" rows="4"></textarea>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Cerrado fecha.:</b></font>
     </td>
     <td>
       <input type="text" name="fechacierre" value="" size=12>
     </td>
   </tr>
   <tr>
     <td><font class="fontd"><b>Observaciones.:</b></font>
     </td>
     <td>
       <!--<script language="javascript1.2">
         WYSIWYG.attach('observaciones');
         </script>-->
       <textarea name="observaciones" cols="35" rows="4"></textarea>
     </td>
   </tr>

<!--colocamos los botones de enviar y borrar -->

   <tr>
     <td>
       <input type=submit value="Enviar">
     </td>
     <td>
       <input type=reset value="Borrar">
     </td>
     </tr>
  </table>
</body>
</html>
