<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="../../jscripts/styleswitcher.js"></script>
<script type="text/javascript" src="../../jscripts/indexcapaemergente.js"></script>
<script type="text/javascript" src="../../jscripts/print.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript" src="../../jscripts/sorttable.js"></script>
<script type="text/javascript" src="../../jscripts/checkbox3.js"></script>
<script type="text/javascript" src="../../jscripts/queriesttip.js"></script> 
<script type="text/javascript" src="../../jscripts/windowopen.js"></script>
<!--<script src="jscripts/even.js"></script>-->
<script type="text/javascript" src="../../jscripts/windowopenajaxupload.js"></script>
<title>Consulta de datos</title>
<link type="text/css" rel="stylesheet" title="default" href="../../templates/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="../../templates/printstyle.css" media="print" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script language="JavaScript" type="text/javascript" src="ajax.js"></script>
</head>
<body>
<div id="flotante" style="z-index:4;filter:alpha(opacity=80);float:left;-moz-opacity:.80;opacity:.80">    </div>
<p>¿Cómo está mi empresa desde la fecha:</p>
<form name="formulario" action="">
<?php
    include('lista.php');
?>
</form>
<div id="resultado" style="border:1px solid #ccc; color:#000999;width:1000px;">
</div>
</body>
</html>