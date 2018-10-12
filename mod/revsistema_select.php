<?php
/**
* Mod xxxxxxxxxxxxxx
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/



       /* requires the class
       require "class.datepicker.php";

       // instantiate the object
       $db=new datepicker();

       // uncomment the next line to have the calendar show up in german
       $db->language = "spanish";

       $db->firstDayOfWeek = 1;

       // set the format in which the date to be returned
       $db->dateFormat = "Y-m-d";*/


?>

<script>
function enviar_formulario(){
   document.formulario1.submit();
}
</script>


<table class="print">
<tr>
<td width="60%">
<form action="?seccion=revsistema2&amp;aktion=add" method="POST">

	<div id="datetimepicker" class="input-append date">
		<input type="text" class="form-control" name="seleccione" placeholder="<?php echo SELECCIONAR_FECHA; ?>" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></input> <span class="add-on"> <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i>
		</span>
	</div>&emsp;&emsp;&emsp;

	<div id="datetimepicker2" class="input-append date">
		<input type="text" class="form-control" name="seleccione2" placeholder="<?php echo SELECCIONAR_FECHA; ?>" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"> <span class="add-on"> <i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></input></i>
		</span>
	</div>&emsp;&emsp;&emsp;
<!--<input id='date' class='datepicker' name='seleccione' value='< ?php echo SELECCIONAR_FECHA; ?>' />
<input id='date2' class='datepicker' name='seleccione2'	value='< ?php echo SELECCIONAR_FECHA; ?>' />-->
<button type="submit" class="btn btn-info"><?php echo EJECUTAR_REVISION; ?></button>

</form>
</td>
<td>
<a href="?seccion=revsistema2&amp;aktion=change"><?php echo MODIFICAR_REVISION; ?></a>
</td>

</tr>
</table>

<br /><br />
Si quiere revisar su sistema entre dos fechas cualesquiera, puede seleccionarlas y darle a enviar. Eso seleccionará gráficos y resultados
entre ambas. Pero lo mejor es que seleccione el intervalo de un año completo, por ejemplo de enero a diciembre,
ya que la revisión del sistema se almacena con la fecha final seleccionada, y las modificaciones
a la revisión realizada se hacen mediante una consulta a los 12 meses anteriores.
<br />
<br />
De este modo, si realiza una revisión entre enero y junio de 2012, al querer modificar esta misma revisión, se editarán
los resultados de 12 meses hacia atrás desde junio de 2012. 
<br /><br />
No olvide que una vez que aparezca la pantalla de revisión del sistema, y hechos
los comentarios que crea convenientes de acuerdo a los datos que aparecerán,
deberá pinchar en el botón de enviar, que está al final de la página:

<br /><br />
<center>
<img src="images/enviar.png" border ="0" alt="botón de enviar revisión del sistema" />
</center>
<br /><br />
Cuando modifica una revisión, le aparecerán los datos y gráficos desde la fecha en que Usted la hizo, hacia adelante,
junto con sus comentarios. Esto significa que aparecerán los datos que usó, más los que hubiese introducido con posterioridad.
Los datos y gráficos se ponen como ayuda para las modificaciones que quisiese hacer,
sobre los comentarios que usted introdujo en los campos de comentarios, resultados y conclusiones.

<br /><br />
¡y vuelva a darle a enviar!

</body>

</html>
