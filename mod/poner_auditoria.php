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
 
<form name="poner_auditoria" method=POST action="?seccion=auditoria_enviada"> 
 
 <table class="print" summary="Registrar una nueva auditir&iacute;as"> 
   <caption>Abrir una nueva Auditor&iacute;a</caption> 
    <tbody> 
        <tr> 
            <th>AUDITORÍA</th> 
            <td><input class="inputs" name="ai" value=""></td> 
        </tr> 
        <tr> 
     <th>FECHA</th> 
     <td><input class="inputfecha" name="Fecha" value="">&nbsp;año/mes/día :: año-mes-día</td> 
   </tr> 
   <tr> 
     <th>&AacuteREA AUDITADA</th> 
     <td><input class="inputs" name="AreaAuditada" value=""></td> 
     </tr> 
     <tr> 
     <th>DOCUMENTACI&OacuteN</th> 
     <td><input class="inputs" name="Documentacion" value=""></td> 
   </tr> 
    <tr> 
     <th>AUDITOR</th> 
     <td>      
     <select name="Auditor"> 
         <option>...</option> 
         <?php 
                 $sql = "SELECT * FROM auditores WHERE activo=1"; 
                 $sql = mysqli_query($mysqli, $sql); 
                 while ($row = mysqli_fetch_assoc($sql)) { 
                 $row['auditor'] = htmlentities($row['auditor']); 
                 echo '<option value="'.$row[auditor].'">'.$row[auditor].'</option>'; 
                 } 
         ?> 
         </select>      
       </td> 
   </tr> 
   <tr> 
     <th>OBJETO DE LA AUDITOR&IacuteA</th> 
     <td><textarea class="textareasmall" name="ObjetoAuditoria"></textarea></td> 
   </tr> 
   <tr> 
     <th>RESULTADO</th> 
     <td><textarea class="textareanormal" name="Resultado"></textarea></td> 
     <td><input type="button" value="Ver codigos" onclick="Abrir_ventana('mod/codigosncs.html');"></td> 
   </tr> 
   <tr> 
 
<!--colocamos los botones de enviar y borrar --> 
 
         <td><input type=submit value="Enviar"></td> 
         <td><input type=reset value="Borrar"></td> 
     </tr> 
     </tbody> 
  </table> 
 </form> 
</body> 
</html>