<?php
include('acciones.php');
?>
<div onMouseOver="showdiv(event,'<?php echo AUDITORIAS_ANADIR_AUDITOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="auditores_admin2&aktion=add">
		<i class="fa fa-plus" style="position:absolute; left:0px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo AUDITORIAS_CAMBIAR_AUDITOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=auditores_admin2c&aktion=change">
		<i class="fa fa-pencil" style="position:absolute; left:30px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_AUDITOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=checkbox3_auditores">
		<i class="fa fa-trash-o" style="position:absolute; left:60px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_AUDITOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=auditores_print&amp;aktion=print">
		<i class="fa fa-print" style="position:absolute; left:90px; top:0px; color:#ffffff;"></i>
	</a>
</div>
<div onMouseOver="showdiv(event,'<?php echo PERSONAL_MENU_PRINCIPAL; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
	<a href="?seccion=tabsframes">
		<i class="fa fa-user" style="position:absolute; left:120px; top:0px; color:white;"></i>
	</a>
</div>
