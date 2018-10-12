<link type="text/css" rel="stylesheet" href="../templates/style.css" media="screen" />

<?php $q = $_GET['var']; ?>

<script type="text/javascript">
function submitform()
{
    document.forms["myform"].submit();
}
</script>
<form id="myform" action="delete_incidenciasproveedor.php">
id a borrar: <input type='text' name='q' value='<?php echo $q ?>'>
<a href="javascript: submitform()">Borrar proveedor</a>
</form>
