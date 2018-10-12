<?php
include('acciones.php');
?>
<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_ANADIR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=equipos_admin&aktion=add"><i class="fa fa-plus" style="position:absolute; left:0px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_CAMBIAR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=equipos_admin&aktion=change"><i class="fa fa-edit" style="position:absolute; left:30px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_BORRAR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=checkbox3_equipos"><i class="fa fa-trash-o" style="position:absolute; left:60px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_LISTA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=listaequipos"><i class="fa fa-list-ul" style="position:absolute; left:90px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_PRINT_DETAILS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=equipos_print&amp;aktion=print"><i class="fa fa-print" style="position:absolute; left:120px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo EQUIPOS_EQUIPOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=equipos_print&amp;aktion=print"><i class="fa fa-arrows-v" style="position:absolute; left:150px; top:0px; color:white;"></i></a></div>
