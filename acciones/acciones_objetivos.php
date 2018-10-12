<?php
include('acciones.php');
?>
<div onMouseOver="showdiv(event,'<?php echo OBJETIVOS_ANADIR_OBJETIVO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=objetivos_admin&amp;aktion=add"><i class="fa fa-plus" style="position:absolute; left:0px; top:0px; color:#ffffff;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo OBJETIVOS_CAMBIAR_OBJETIVO; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=objetivos_admin&amp;aktion=change"><i class="fa fa-edit" style="position:absolute; left:30px; top:0px; color:#ffffff;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=checkbox3_objetivos"><i class="fa fa-trash-o" style="position:absolute; left:60px; top:0px; color:#ffffff;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_IMPRIMIR_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=objetivos_print&amp;aktion=print"><i class="fa fa-print" style="position:absolute; left:90px; top:0px; color:#ffffff;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BUSCAR_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=searchobjetivos"><i class="fa fa-search" style="position:absolute; left:120px; top:0px; color:#ffffff;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADDTASK_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=seguimientos_admin&amp;aktion=add"><i class="fa fa-plus" style="position:absolute; left:150px; top:0px; color:Gold;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo EDITAR_TAREA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=seguimientos_admin&amp;aktion=change"><i class="fa fa-edit" style="position:absolute; left:180px; top:0px; color:Gold;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo OBJETIVOS_BORRAR_TAREA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=checkbox3_tareasobjetivos"><i class="fa fa-trash-o" style="position:absolute; left:210px; top:0px; color:Gold;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_LISTA_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=lista_objetivos_y_seguimientos"><i class="fa fa-list-ul" style="position:absolute; left:240px; top:0px; color:#ffffff;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_OBJETIVOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=lista_tareas"><i class="fa fa-retweet" style="position:absolute; left:270px; top:0px; color:#ffffff;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo MENU_MEDICIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'>
<a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart" style="position:absolute; left:310px; top:0px; color:white;"></i></a></div>
