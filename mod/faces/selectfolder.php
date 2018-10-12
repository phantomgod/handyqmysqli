<?php 
//Get subfolder list
$folders = glob('../../mod/faces/*',GLOB_ONLYDIR);
?>

<form action="" method="post">
<select name="location" onchange="javascript:this.form.submit()">
<option>-Ver las imágenes almacenadas...-</option>
<?php
foreach($folders as $folder){
    echo '<option value="'.basename($folder).'">'.basename($folder).'</option>'.PHP_EOL;
}
?>
</select>
</form>

<?php
//List of files once post was submitted
if(isset($_POST['location'])){
    echo '<div id="List_Generated">';
    $files = glob('../../mod/faces/'.basename($_POST['location']).'/*.jpg');
    foreach($files as $file){
        echo '<img src="../../mod/faces/tmp/'.basename($file).'" width="140px" height="200px">'.PHP_EOL;
    }
    echo '</div>';
}
?>