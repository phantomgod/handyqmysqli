<script type="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=yes,location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=500, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>


<H4>INSPECCIONES DE SERVICIO</H4>

(Uniformidad, puntualidad, equipamiento, incidencias, quejas de cliente)

<form name="inspecciones" method=POST action="?seccion=inspeccion_enviada">
<div align="left">
 <table width="60%" border="0">
   <tr>
     <td width="10%">

      <font class="fontd"><b>INSPECTOR</b></font>
     <!--</td>
     <td width="10%">-->
     
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
     <td width="80%">
        <font class="fontd"><b>FECHA</b></font>
     </td>
     <tr>
     <td width="50%">
        <input type="text" name="fecha" value="">&nbsp;&nbsp;año/mes/día :: año-mes-día
     </td>
     <td width="370">
            <input type="button" value="Ver codigos" onclick="Abrir_ventana('../handyq/mod/codigosincidencias.html');">
     </td>
   </tr>
   </table>
   
   <table border="0">
   <tr>
     <td width="20%">
        <font class="fontd"><b>SERVICIO</b></font>
     </td>
     <td colspan="2">

       <select name="servicio">
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
     <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>HORA</b></font>
     </td>
     <td colspan="2">
        <input type="time" name="hora" value="" size=12>
     </td>
   <!--</tr>
    <tr>-->
     <td width="127">
        <font class="fontd"><b>TRABAJADOR</b></font>
     </td>
     <td colspan="2">

         <select name="trabajador">
         <option>...</option>
         <?
                 $sql = "SELECT * FROM trabajadores WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['trabajador'] = htmlentities($row['trabajador']);
                 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                 }
         ?>
         </select>



     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>INCIDENCIA</b></font>
     </td>
     <td colspan="2">
        <textarea name="incidencia" cols="25" rows="3"></textarea></td>
     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>C&OacuteD</font></b>
     </td>
     <td width="127">
        <input type="text" name="codigo" value="" size=12>
     </td>
     <!--<td width="370">

        <input type="button" value="Ver codigos" onclick="Abrir_ventana('../modulares/modulos/codigosincdencias.html');">
        </td>-->
   </tr>
   
   <tr>
     <td width="20%">
        <font class="fontd"><b>SERVICIO</b></font>
     </td>
     <td colspan="2">

       <select name="servicio2">
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
     <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>HORA</b></font>
     </td>
     <td colspan="2">
        <input type="time" name="hora2" value="" size=12>
     </td>
   <!--</tr>
    <tr>-->
     <td width="127">
        <font class="fontd"><b>TRABAJADOR</b></font>
     </td>
     <td colspan="2">

         <select name="trabajador2">
         <option>...</option>
         <?
                 $sql = "SELECT * FROM trabajadores WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['trabajador'] = htmlentities($row['trabajador']);
                 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                 }
         ?>
         </select>



     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>INCIDENCIA</b></font>
     </td>
     <td colspan="2">
        <textarea name="incidencia2" cols="25" rows="3"></textarea></td>
     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>C&OacuteD</font></b>
     </td>
     <td width="127">
        <input type="text" name="codigo2" value="" size=12>
     </td>
     <!--<td width="370">

        <input type="button" value="Ver codigos" onclick="Abrir_ventana('../modulares/modulos/codigosincdencias.html');">
        </td>-->
   </tr>
   
   
   <tr>
     <td width="20%">
        <font class="fontd"><b>SERVICIO</b></font>
     </td>
     <td colspan="2">

       <select name="servicio3">
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
     <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>HORA</b></font>
     </td>
     <td colspan="2">
        <input type="time" name="hora3" value="" size=12>
     </td>
   <!--</tr>
    <tr>-->
     <td width="127">
        <font class="fontd"><b>TRABAJADOR</b></font>
     </td>
     <td colspan="2">

         <select name="trabajador3">
         <option>...</option>
         <?
                 $sql = "SELECT * FROM trabajadores WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['trabajador'] = htmlentities($row['trabajador']);
                 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                 }
         ?>
         </select>



     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>INCIDENCIA</b></font>
     </td>
     <td colspan="2">
        <textarea name="incidencia3" cols="25" rows="3"></textarea></td>
     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>C&OacuteD</font></b>
     </td>
     <td width="127">
        <input type="text" name="codigo3" value="" size=12>
     </td>
     <!--<td width="370">

        <input type="button" value="Ver codigos" onclick="Abrir_ventana('../modulares/modulos/codigosincdencias.html');">
        </td>-->
   </tr>
   
   
   <tr>
     <td width="20%">
        <font class="fontd"><b>SERVICIO</b></font>
     </td>
     <td colspan="2">

       <select name="servicio4">
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
     <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>HORA</b></font>
     </td>
     <td colspan="2">
        <input type="time" name="hora4" value="" size=12>
     </td>
   <!--</tr>
    <tr>-->
     <td width="127">
        <font class="fontd"><b>TRABAJADOR</b></font>
     </td>
     <td colspan="2">

         <select name="trabajador4">
         <option>...</option>
         <?
                 $sql = "SELECT * FROM trabajadores WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['trabajador'] = htmlentities($row['trabajador']);
                 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                 }
         ?>
         </select>



     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>INCIDENCIA</b></font>
     </td>
     <td colspan="2">
        <textarea name="incidencia4" cols="25" rows="3"></textarea></td>
     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>C&OacuteD</font></b>
     </td>
     <td width="127">
        <input type="text" name="codigo4" value="" size=12>
     </td>
     <!--<td width="370">

        <input type="button" value="Ver codigos" onclick="Abrir_ventana('../modulares/modulos/codigosincdencias.html');">
        </td>-->
   </tr>
   
   
   <tr>
     <td width="20%">
        <font class="fontd"><b>SERVICIO</b></font>
     </td>
     <td colspan="2">

       <select name="servicio5">
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
     <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>HORA</b></font>
     </td>
     <td colspan="2">
        <input type="time" name="hora5" value="" size=12>
     </td>
   <!--</tr>
    <tr>-->
     <td width="127">
        <font class="fontd"><b>TRABAJADOR</b></font>
     </td>
     <td colspan="2">

         <select name="trabajador5">
         <option>...</option>
         <?
                 $sql = "SELECT * FROM trabajadores WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['trabajador'] = htmlentities($row['trabajador']);
                 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                 }
         ?>
         </select>



     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>INCIDENCIA</b></font>
     </td>
     <td colspan="2">
        <textarea name="incidencia5" cols="25" rows="3"></textarea></td>
     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>C&OacuteD</font></b>
     </td>
     <td width="127">
        <input type="text" name="codigo5" value="" size=12>
     </td>
     <!--<td width="370">

        <input type="button" value="Ver codigos" onclick="Abrir_ventana('../modulares/modulos/codigosincdencias.html');">
        </td>-->
   </tr>
   
   
   <tr>
     <td width="20%">
        <font class="fontd"><b>SERVICIO</b></font>
     </td>
     <td colspan="2">

       <select name="servicio6">
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
     <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>HORA</b></font>
     </td>
     <td colspan="2">
        <input type="time" name="hora6" value="" size=12>
     </td>
   <!--</tr>
    <tr>-->
     <td width="127">
        <font class="fontd"><b>TRABAJADOR</b></font>
     </td>
     <td colspan="2">

         <select name="trabajador6">
         <option>...</option>
         <?
                 $sql = "SELECT * FROM trabajadores WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['trabajador'] = htmlentities($row['trabajador']);
                 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                 }
         ?>
         </select>



     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>INCIDENCIA</b></font>
     </td>
     <td colspan="2">
        <textarea name="incidencia6" cols="25" rows="3"></textarea></td>
     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>C&OacuteD</font></b>
     </td>
     <td width="127">
        <input type="text" name="codigo6" value="" size=12>
     </td>
     <!--<td width="370">

        <input type="button" value="Ver codigos" onclick="Abrir_ventana('../modulares/modulos/codigosincdencias.html');">
        </td>-->
   </tr>
   
   
   <tr>
     <td width="20%">
        <font class="fontd"><b>SERVICIO</b></font>
     </td>
     <td colspan="2">

       <select name="servicio7">
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
     <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>HORA</b></font>
     </td>
     <td colspan="2">
        <input type="time" name="hora7" value="" size=12>
     </td>
   <!--</tr>
    <tr>-->
     <td width="127">
        <font class="fontd"><b>TRABAJADOR</b></font>
     </td>
     <td colspan="2">

         <select name="trabajador7">
         <option>...</option>
         <?
                 $sql = "SELECT * FROM trabajadores WHERE activo=1";
                 $sql = mysql_query($sql);
                 while($row = mysql_fetch_assoc($sql)) {
                 $row['trabajador'] = htmlentities($row['trabajador']);
                 echo '<option value="'.$row[trabajador].'">'.$row[trabajador].'</option>';
                 }
         ?>
         </select>



     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>INCIDENCIA</b></font>
     </td>
     <td colspan="2">
        <textarea name="incidencia7" cols="25" rows="3"></textarea></td>
     </td>
   <!--</tr>
   <tr>-->
     <td width="127">
        <font class="fontd"><b>C&OacuteD</font></b>
     </td>
     <td width="127">
        <input type="text" name="codigo7" value="" size=12>
     </td>
     <!--<td width="370">

        <input type="button" value="Ver codigos" onclick="Abrir_ventana('../modulares/modulos/codigosincdencias.html');">
        </td>-->
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