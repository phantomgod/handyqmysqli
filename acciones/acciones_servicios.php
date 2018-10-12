<?php
include('acciones.php');
?>
<div onMouseOver="showdiv(event,'<?php echo SERVICIO_ANADIR_SERVICIO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=servicios_admin&aktion=add"><i class="fa fa-plus" style="position:absolute; left:0px; top:0px; color:Dodgerblue;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo SERVICIO_MODIFICAR_SERVICIO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=servicios_admin&aktion=change"><i class="fa fa-edit" style="position:absolute; left:30px; top:0px; color:Dodgerblue;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_SERVICIOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=checkbox3_servicios"><i class="fa fa-trash" style="position:absolute; left:60px; top:0px; color:Dodgerblue;"></i></a></div>