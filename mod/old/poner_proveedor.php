<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
<head>
<link rel="stylesheet" type="text/css" href="/modulares/style.css">
<title>ALTA DE PROVEEDOR</title>
<!--<script language="JavaScript" type="text/javascript" src="../modulares/openwysiwyg_v1.4.7/scripts/wysiwyg.js"></script>
<script language="JavaScript" type="text/javascript" src="../modulares/openwysiwyg_v1.4.7/scripts/wysiwyg-settings.js"></script>-->

</script>
<script type="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=yes,location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=350, height=500, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
</head>
<body>

<H4>Anotar un nuevo proveedor</H4>

<form name="poner_proveedor" method=POST action="../modulares/?mod=proveedor_enviado">
<div align="left">
 <table width="90%" border="0">
   <tr>
     <td width="10%">
        <font size="2"><b>PROVEEDOR</b></font>
     </td>
     <td width="100%">
        <input type="text" name="proveedor" value="" size=80>
     </td>
   </tr>
   <tr>
     <td width="10%">
        <font size="2"><b>ESTADO</b></font>
     </td>
     <td width="10%">
        <select name="estado">
              <option>...</option>              
              <option>Aprobado</option>
              <option>En pruebas</option>              
        </select>        
     </td>
   </tr>
   <tr>
     <td width="10%">
        <font size="2"><b>CIF</b></font>
     </td>
     <td width="40%">
        <input type="date" name="cif" value="" size=40></td>
     </tr>
   <tr>
     <td width="10%">
        <font size="2"><b>DIRECI&OacuteN</b></font>
     </td>
     <td>
        <input type="text" name="direccion" value="" size=80>
     </td>
   </tr>    
   <tr>
     <td width="20%">
        <font size="2"><b>SUMINISTRO</b></font>
     </td>
     <td width="70%">
     <!--<script language="javascript1.2">
         WYSIWYG.attach('ObjetoAuditoria');
         </script>-->
        <textarea name="suministro" cols="60" rows="3"></textarea>
     </td>
   </tr>
   
   
   <tr>
     <td width="20%">
        <font size="2"><b>CRITERIOS DE EVALUACI&Oacute;N</b></font>
     </td>
     <td width="70%">
     <!--<script language="javascript1.2">
         WYSIWYG.attach('ObjetoAuditoria');
         </script>-->
        <textarea name="criteriosdeevaluacion" cols="60" rows="3"></textarea>
     </td>
   </tr>
   
   
   <tr>
     <td width="20%">
        <font size="2"><b>DATOS</b></font>
     </td>
     <td width="70%">
     <!--<script language="javascript1.2">
         WYSIWYG.attach('ObjetoAuditoria');
         </script>-->
        <textarea name="datos" cols="60" rows="3"></textarea>
     </td>
   </tr>
   
   
   <tr>
     <td width="10%">
        <font size="2"><b>ACTIVO / INACTIVO</b></font>
     </td>
     <td width="10%">
        <select name="activo">
              <option>...</option>              
              <option>Activo</option>
              <option>Inactivo</option>             
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
</body>
</html>
