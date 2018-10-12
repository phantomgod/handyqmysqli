<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
<head>
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=yes,location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=350, height=500, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
</head>
<body>

<H3>Anotar un curso de formaci&oacute;n</H3>

<form name="poner_curso" method=POST action="?seccion=curso_enviado">
<div align="left">
 <table width="80%" border="0">
   <tr>
     <td width="10%">
        <font class="fontd"><b>Trabajador</b></font>
     </td>
     <td>
     
     <select name="trabajador">
         <option>...</option>
         <?php
                 $sql = "SELECT * FROM trabajadores WHERE activo=1";
                 $sql = mysqli_query($mysqli, $sql);
                 while($row = mysqli_fetch_assoc($sql)) {
                 $row['trabajador'] = htmlentities($row['trabajador']);
                 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                 }
         ?>
         </select>
     
     </td>
   </tr>   
   <tr>
     <td width="10%">
        <font class="fontd"><b>Curso</b></font>
     </td>
     <td>
        <input type="text" name="curso" value="" size=100%>
     </td>
   </tr>
   <tr>
		<td width="10%">
        <font class="fontd"><b>Lugar</b></font>
     </td>
    <td width="80%">
        <input type="text" name="lugar" value="" size=100%>
     </td>
   </tr>
   <tr>
     <td width="10%">
        <font class="fontd"><b>Fecha</b></font>
     </td>
     <td width="10%">
        <input type="text" name="fecha" value="" size=10%>&nbsp;&nbsp;año/mes/día :: año-mes-día
     </td>
   </tr>
   <tr>
     <td width="10%">
        <font class="fontd"><b>Horas</b></font>
     </td>
    <td width="10%">
        <input type="text" name="horas" value="" size=10%>
     </td>
   </tr>
   <tr>
     <td width="10%">
        <font class="fontd"><b>Validaci&oacute;n</b></font>
     </td>
    <td width="10%">
        <input type="text" name="validacion" value="" size=100%>
     </td>
   </tr>
   <tr>
     <td width="10%">
        <font class="fontd"><b>Comentarios</b></font>
     </td>
    <td>
         <textarea name="comentarios" cols="61" rows="5"></textarea></td>
     </td>
   </tr>         
   <tr>

<!--colocamos los botones de enviar y borrar -->

     <td width="10%">
        <b><font color="#FFFFFF">
          <input type=submit value="Enviar"></font></b>
     </td>
     <td width="10%">
          <input type=reset value="Borrar">
     </td>
   </tr>
</table>
</div>
</body>
</html>
