<?php
require_once("includes/mysql.php");
$db = new MySQL();
?>
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=yes,location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=500, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>


<H4>CONTROL DE INSPECCIONES</H4>

<form name="inspecciones" method=POST action="../modulares/?mod=inspeccion_grabada">
<div align="center">
 <table width="638">
   <tr>
     <td width="127">
        <font size="2" color="#000000"><b>FECHA</b></font>
     </td>
     <td colspan="2">
        <input type="text" name="fecha" value="" size=12>&nbsp;&nbsp;año/mes/día :: año-mes-día
     </td>
   </tr>
   <tr>
     <td width="127">

      <font size="2" color="#000000"><b>INSPECTOR</b></font>
     </td>
     <td colspan="2">
     
         <select name="inspector">
         <option>...</option>
         <?
                 $sql = "SELECT * FROM inspectores WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['inspector'] = htmlentities($row['inspector']);
                 echo '<option value="'.$row[inspector].'">'.$row[inspector].'</option>';
                 }
         ?>
         </select>

     </td>
   </tr>
   <tr>
     <td width="127">
        <font size="2" color="#00000"><b>Servicio:</b></font>
     </td>
     <td colspan="2">

       <select name="site1">
       <option>...</option>
         <?
                 $sql = "SELECT * FROM servicios WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['inspector'] = htmlentities($row['servicio']);
                 echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                 }
         ?>
         </select>


     </td>
     </tr>
   <tr>
     <td width="127">
        <font size="2" color="#00000"><b>Servicio:</b></font>
     </td>
     <td colspan="2">

       <select name="site2">
       <option>...</option>
         <?
                 $sql = "SELECT * FROM servicios WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['inspector'] = htmlentities($row['servicio']);
                 echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                 }
         ?>
         </select>


     </td>
     </tr>
	 <tr>
     <td width="127">
        <font size="2" color="#00000"><b>Servicio:</b></font>
     </td>
     <td colspan="2">

       <select name="site3">
       <option>...</option>
         <?
                 $sql = "SELECT * FROM servicios WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['inspector'] = htmlentities($row['servicio']);
                 echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                 }
         ?>
         </select>


     </td>
     </tr>
	 <tr>
     <td width="127">
        <font size="2" color="#00000"><b>Servicio:</b></font>
     </td>
     <td colspan="2">

       <select name="site4">
       <option>...</option>
         <?
                 $sql = "SELECT * FROM servicios WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['inspector'] = htmlentities($row['servicio']);
                 echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                 }
         ?>
         </select>


     </td>
     </tr>
	 <tr>
     <td width="127">
        <font size="2" color="#00000"><b>Servicio:</b></font>
     </td>
     <td colspan="2">

       <select name="site5">
       <option>...</option>
         <?
                 $sql = "SELECT * FROM servicios WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['inspector'] = htmlentities($row['servicio']);
                 echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                 }
         ?>
         </select>


     </td>
     </tr>
	 <tr>
     <td width="127">
        <font size="2" color="#00000"><b>Servicio:</b></font>
     </td>
     <td colspan="2">

       <select name="site6">
       <option>...</option>
         <?
                 $sql = "SELECT * FROM servicios WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['inspector'] = htmlentities($row['servicio']);
                 echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                 }
         ?>
         </select>


     </td>
     </tr>
	 <tr>
     <td width="127">
        <font size="2" color="#00000"><b>Servicio:</b></font>
     </td>
     <td colspan="2">

       <select name="site7">
       <option>...</option>
         <?
                 $sql = "SELECT * FROM servicios WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['inspector'] = htmlentities($row['servicio']);
                 echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                 }
         ?>
         </select>


     </td>
     </tr>
	 <tr>
     <td width="127">
        <font size="2" color="#00000"><b>Servicio:</b></font>
     </td>
     <td colspan="2">

       <select name="site8">
       <option>...</option>
         <?
                 $sql = "SELECT * FROM servicios WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['inspector'] = htmlentities($row['servicio']);
                 echo '<option value="'.$row[servicio].'">'.$row[servicio].'</option>';
                 }
         ?>
         </select>


     </td>
     </tr>
   <tr>

<!--colocamos los botones de enviar y borrar -->

     <td width="127">
        <b><font color="#FFFFFF">
          <input type=submit value="Enviar"></font></b>
     </td>
     <td colspan="2">
          <input type=reset value="Borrar">
     </td>
     </tr>
</table>
</div>