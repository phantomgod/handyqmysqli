<?php
include('acciones.php');
?>
<div onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_ANOTAR_MODIFICACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=modifdoc_admin&amp;aktion=add">
		<i class="fa fa-plus" style="position:absolute; left:0px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_EDITAR_MODIFICACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=modifdoc_admin&amp;aktion=change">
		<i class="fa fa-pencil" style="position:absolute; left:30px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_MODIFDOCPRINT; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=modifdoc_print&amp;aktion=print">
		<i class="fa fa-print" style="position:absolute; left:60px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_MODIFDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=checkbox3_modifdoc">
		<i class="fa fa-trash-o" style="position:absolute; left:90px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo DOCUMENTOS_JOIN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=listamodificaciones">
		<i class="fa fa-retweet" style="position:absolute; left:120px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_MODIFDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=editdeletemodifdocs">
		<i class="fa fa-flash" style="position:absolute; left:160px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=tabsframesdocumentos">
		<i class="fa fa-book" style="position:absolute; left:190px; top:0px; color:white;"></i>
	</a>
</div>
