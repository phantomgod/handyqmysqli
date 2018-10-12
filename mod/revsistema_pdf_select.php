<?php
/**
* Mod seleccionar un pdf de una revisión del sistema
*
* PHP version 5
*
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/


?>

<script>
function enviar_formulario(){
   document.formulario1.submit();
}
</script>


<table class="print">
<tr>
<td width="60%">
<form action="pdfs/ncspdfid.php" method="POST">

<?php
echo ' <select name="ai" value="">';
		echo '<option>...</option>';
		$sql = "SELECT * FROM hojasdemejora ORDER BY id DESC";
		$sql = mysqli_query($mysqli,  $sql );
		if (! defined ( 'numhoja' )) {
			define ( 'NUMHOJA', 'numhoja' );
		}
		if (! defined ( 'fecha' )) {
			define ( 'FECHA', 'fecha' );
		}
				if (! defined ( 'id' )) {
			define ( 'ID', 'id' );
		}
		while ( $row = mysqli_fetch_assoc( $sql ) ) {
			echo '<option value="' . $row [ID] . '">' . $row [ID] . ' Nº: ' . $row [NUMHOJA] . '</option>';
		}
		echo '</select>';

?>

<button type="submit" class="btn btn-info"><?php echo IMPRIMIR; ?></button>

</form>
</td>

</tr>
</table>


</body>
</html>
