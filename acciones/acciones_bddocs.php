<?php
include('acciones.php');
?>

<div onMouseOver="showdiv(event,'<?php echo ANADIR_BDDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=docmanager_create">
		<i class="fa fa-plus" style="position:absolute; left:0px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo EDITAR_BDDOC; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=docmanager_admin&amp;aktion=change">
		<i class="fa fa-pencil" style="position:absolute; left:30px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=checkbox3_docmanager">
		<i class="fa fa-trash-o" style="position:absolute; left:60px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ANOTAR_DOCMANAGER; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=docmanager_create">
		<i class="fa fa-plus-square-o" style="position:absolute; left:90px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_DOC_PRINTSCREEN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=docmanager_print&amp;aktion=print">
		<i class="fa fa-print" style="position:absolute; left:120px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_DOCUMENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=tabsframesdocumentos">
		<i class="fa fa-book" style="position:absolute; left:160px; top:0px; color:white;"></i>
	</a>
</div>
