<?php
include('acciones.php');
?>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=calibraciones_admin&amp;aktion=add"><i class="fa fa-plus" style="position:absolute; left:0px; top:0px; color:#ffffff;"></i></a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=calibraciones_admin&amp;aktion=change"><i class="fa fa-edit" style="position:absolute; left:30px; top:0px; color:#ffffff;"></i></a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=calibraciones_print&amp;aktion=print"><i class="fa fa-print" style="position:absolute; left:60px; top:0px; color:#ffffff;"></i></a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=checkbox3_calibraciones"><i class="fa fa-trash-o" style="position:absolute; left:90px; top:0px; color:#ffffff;"></i></a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=buscacalibraciones"><i class="fa fa-search" style="position:absolute; left:120px; top:0px; color:#ffffff;"></i></a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=listacalibraciones"><i class="fa fa-list-ul" style="position:absolute; left:150px; top:0px; color:#ffffff;"></i></a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_CALIBRACIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=calibraciones_por_equipo&amp;aktion=print"><i class="fa fa-retweet" style="position:absolute; left:180px; top:0px; color:#ffffff;"></i></a>
</div>
