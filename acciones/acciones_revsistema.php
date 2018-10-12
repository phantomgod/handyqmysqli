<?php
include('acciones.php');
?>
<div onMouseOver="showdiv(event,'<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=revsistema_select" title="<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>">
		<i class="fa  fa-plus" style="color:#ffffff; position:absolute; left:0px; top:0px;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=revsistema2&aktion=change" title="<?php echo ADMINISTRAR_REVISIONES_SISTEMA; ?>">
		<i class="fa  fa-pencil" style="color:#ffffff; position:absolute; left:30px; top:0px;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo IMPRIMIR_REVISION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=revsistema_print&amp;aktion=print" title="<?php echo IMPRIMIR_REVISION; ?>">
		<i class="fa  fa-print" style="color:#ffffff; position:absolute; left:60px; top:0px;"></i>
	</a>
</div>
