<?php
include('acciones.php');
?>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=cursos_admin&aktion=add" title="<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>"><i class="fa fa-plus" style="position:absolute; left:0px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=cursos_admin&aktion=change" title="<?php echo MENU_ALT_ADMINISTRAR_FORMACION; ?>"><i class="fa fa-pencil" style="position:absolute; left:30px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_BORRAR_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=checkbox3_cursos" title="<?php echo MENU_ALT_BORRAR_FORMACION; ?>"><i class="fa fa-trash-o" style="position:absolute; left:60px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo FORMACION_LISTACURSOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=lista_cursos" title="<?php echo FORMACION_LISTACURSOS; ?>"><i class="fa fa-list-ul" style="position:absolute; left:90px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MENU_ALT_JOIN_FORMACION; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=cursos_por_trabajador&amp;aktion=print"><i class="fa fa-retweet" style="position:absolute; left:120px; top:0px; color:#ffffff;" title="<?php echo MENU_ALT_JOIN_FORMACION; ?>"></i></a></div>

<div onMouseOver="showdiv(event,'Comprobar formación');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=formacionalert"><i class="fa fa-bell" style="position:absolute; left:150px; top:0px; color:#ffeb3b;" title="Comprobar formación"></i></a></div>
