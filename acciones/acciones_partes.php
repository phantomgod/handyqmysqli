<?php
include('acciones.php');
?>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_PARTES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=partes_admin"><i class="fa fa-edit" style="position:absolute; left:0px; top:0px;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_PARTES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=partes_print&amp;aktion=print"><i class="fa fa-print" style="position:absolute; left:30px; top:0px;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_PARTES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=checkbox3_partes"><i class="fa fa-trash-o" style="position:absolute; left:60px; top:0px;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_PARTES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=buscapartes"><i class="fa fa-search" style="position:absolute; left:90px; top:0px;"></i></a></div>
