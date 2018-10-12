<?php
include('acciones.php');
?>
<div id="acciones">
<div onMouseOver="showdiv(event,'<?php echo INDICADORES_NCSPORAREA; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=ncsporarea"><i class="fa fa-bar-chart" style="position:absolute; left:0px; top:0px; color:#ffffff;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo INDICADORES_DESVIACIONCIERRESNCS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=desviacioncierresncs"><i class="fa fa-bar-chart" style="position:absolute; left:40px; top:0px; color:Yellow;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=totalhorasformacionportrabajador"><i class="fa fa-bar-chart" style="position:absolute; left:80px; top:0px; color:#8BC34A;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICACONTROLAVISOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=graficacontrolavisos"><i class="fa fa-bar-chart" style="position:absolute; left:120px; top:0px; color:Orange;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASINSPECCIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=graficaincidenciasinspecciones"><i class="fa fa-bar-chart" style="position:absolute; left:160px; top:0px; color:Pink;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASALMACEN; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=graficaincidenciasalmacen"><i class="fa fa-bar-chart" style="position:absolute; left:200px; top:0px; color:Grey;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo INDICADORES_GRAFICAINCIDENCIASDEPROVEEDOR; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=graficaincidenciasdeproveedor"><i class="fa fa-bar-chart" style="position:absolute; left:240px; top:0px; color:#F44336;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo INDICADORES_VALORACIONGLOBALMANTENIMIENTOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=globalmantenimientos"><i class="fa fa-bar-chart" style="position:absolute; left:280px; top:0px; color:Turquoise;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo VALORACIONES_GLOBALES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=valoracionglobalclientes"><i class="fa fa-bar-chart" style="position:absolute; left:320px; top:0px; color:Turquoise;"></i></a></div>

<div onMouseOver="showdiv(event,'<?php echo INDICADORES_TODOS; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=todos_select"><i class="fa fa-bar-chart" style="position:absolute; left:360px; top:0px; color:Peru;"></i></a></div>
<div onMouseOver="showdiv(event,'<?php echo MEDICIONES; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><a href="?seccion=tabsframesmediciones"><i class="fa fa-line-chart" style="position:absolute; left:400px; top:0px; color:white;"></i></a></div>
</div>
