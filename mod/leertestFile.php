<?php
$file = "ai_nc.php";
$fs = fopen( $file, "a+" ) or die("error when opening the file");

while (!feof($fs)) {
   @$contents .= fgets($fs, 1024);
}
fclose($fs);
?>

<form action="save.php" method="post">
<input type=hidden name="file" value="<?php echo $file; ?>">
<textarea rows="50" cols="120" name="contents"><?php echo $contents; ?></textarea>
<input type="submit" value="Submit">
</form>


