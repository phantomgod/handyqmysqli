<?php
include('acciones.php');
?>
<div onMouseOver="showdiv(event,'<?php echo TRABAJADOR_ANADIR_TRABAJADOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=trabajadores_admin2&aktion=add"><i class="fa fa-plus" style="position:absolute; left:0px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo TRABAJADOR_EDITAR_TRABAJADOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=trabajadores_admin2&aktion=change"><i class="fa fa-pencil" style="position:absolute; left:30px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_TRABAJADORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=checkbox3_trabajadores"><i class="fa fa-trash-o" style="position:absolute; left:60px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_TRABAJADOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=trabajadores_print&amp;aktion=print"><i class="fa fa-print" style="position:absolute; left:90px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MENU_TRABAJADORES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=tabsframes"><i class="fa fa-user" style="position:absolute; left:120px; top:0px; color:white;"></i></a></div>
