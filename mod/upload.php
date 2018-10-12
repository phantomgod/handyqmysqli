<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"> 
<title>url de archivo</title> 
</head> 
<body> 
<table> 
    <tr> 
        <td> 
        <h1><font color="000000">Subir documento</font></h1> 
        </td> 
      </tr> 
</table> 
 
<form enctype="multipart/form-data" action="../modulares/uploads/uploader.php" method="POST"  target="_blank" > 
<input type="hidden" name="MAX_FILE_SIZE" value="2000000" /> 
Archivo: <input name="uploadedfile" type="file" /><br /> 
<button type="submit" class="btn btn-primary"><?php echo SUBIR; ?></button>
</form> 
</body> 
</html> 
