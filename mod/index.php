<?php session_start();
 
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);     
} 

if( ! isset( $_POST['idioma'] ) ) $_POST['idioma'] = 0;

if (isset($_SESSION['lang'])) {
    if ($_POST['idioma'] == "es") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "es";    
    } elseif ($_POST['idioma'] == "en") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "en";    
    } elseif ($_POST['idioma'] == "pt") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "pt";    
    } elseif ($_POST['idioma'] == "dutch") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "dutch";    
    } elseif ($_POST['idioma'] == "it") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "it";
    } elseif ($_POST['idioma'] == "polish") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "polish";    
    } elseif ($_POST['idioma'] == "cat") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "cat";    
    } elseif ($_POST['idioma'] == "vasco") {
        unset($_SESSION['lang']);
        $_SESSION['lang'] = "vasco";    
    }
}

$lang  =  array("spanish.lang.php",  "english.lang.php", "portugues.lang.php", 
                   "dutch.lang.php", "italian.lang.php", "polish.lang.php", 
                   "catalan.lang.php",  "vasco.lang.php"); 

               
switch($_SESSION['lang']) {
case "es":
        include 'lang/spanish.lang.php';
    break;
case "en":
        include 'lang/english.lang.php';
    break;
case "pt":
        include 'lang/portugues.lang.php';
    break;        
case "dutch":
        include 'lang/dutch.lang.php';
    break;
case "it":
        include 'lang/italian.lang.php';
    break;  
case "polish":
        include 'lang/polish.lang.php';
    break;      
case "cat":
        include 'lang/catalan.lang.php';
    break;
case "vasco":
        include 'lang/vasco.lang.php';
    break;
default:
        include 'lang/spanish.lang.php';
    break;
}
?>



<?php
require 'secciones.php' ; 
require_once 'includes/mysql.php';
$db = new MySQL();
header('Content-Type: text/html;charset=UTF-8');

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jscripts/styleswitcher.js"></script>
<script type="text/javascript" src="jscripts/indexcapaemergente.js"></script>
<script type="text/javascript" src="jscripts/print.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript" src="jscripts/sorttable.js"></script>
<script type="text/javascript" src="jscripts/checkbox3.js"></script>
<script type="text/javascript" src="jscripts/queriesttip.js"></script> 
<script type="text/javascript" src="jscripts/windowopen.js"></script>
<!--<script src="jscripts/even.js"></script>-->
<script type="text/javascript" src="jscripts/windowopenajaxupload.js"></script>

<link type="text/css" rel="stylesheet" href="templates/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="templates/printstyle.css" media="print" />

<link rel="alternate stylesheet" type="text/css" href="templates/styleblue.css" title="alternate 1" />
<link rel="alternate stylesheet" type="text/css" href="templates/style#9fff30.css" title="alternate 2" />
<link rel="alternate stylesheet" type="text/css" href="templates/stylemorado.css" title="alternate 3" />
<link rel="alternate stylesheet" type="text/css" href="templates/styleorange.css" title="alternate 4" />
<link rel="alternate stylesheet" type="text/css" href="templates/stylerose.css" title="alternate 5" />
<link rel="alternate stylesheet" type="text/css" href="templates/styleyellow.css" title="alternate 6" />
<link rel="alternate stylesheet" type="text/css" href="templates/stylegrey.css" title="alternate 7" />




<link rel="shortcut icon" href="images/favicon.ico" /> 
<title><?php echo PAGE_TITLE; ?><?php echo" &raquo; ".$seccionweb."";?></title>


<!-- TinyMCE -->
<!-- Place inside the head of your HTML -->
<script type="text/javascript" src="jscripts/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
        selector: "textarea",
        menubar: false,
        theme_advanced_font_sizes: "10px,12px,13px,14px,16px,18px,20px",
        font_size_style_values: "12px,13px,14px,16px,18px,20px",
        plugins: "textcolor, table, charmap, link, code, image",
        language: "es",
        toolbar: "bold italic underline table fontsizeselect link unlink image forecolor backcolor code bullist numlist alignleft aligncenter alignright"
    });

 
	
 
 
</script>
<!-- /TinyMCE --> 


</head>
<body>

 <div id="avion"><?php $_GET['type'] = 0; require 'Rantex/rantex.php'; ?></div>
<div id="flotante" style="z-index:4;filter:alpha(opacity=80);float:left;-moz-opacity:.80;opacity:.80">    </div>
       
    
             <div id="escarabajo">
             
            <a href="#" onclick="setActiveStyleSheet('default'); return false;"><img src="images/themedefect.png" alt="default style" /></a> 
            <a href="#" onclick="setActiveStyleSheet('alternate 1'); return false;"><img src="images/themeblue.png" alt="alternate style 1"  /></a> 
            <a href="#" onclick="setActiveStyleSheet('alternate 2'); return false;"><img src="images/theme#9fff30.png" alt="alternate style 2"  /></a>
            <a href="#" onclick="setActiveStyleSheet('alternate 3'); return false;"><img src="images/thememorado.png" alt="alternate style 3"  /></a>
            <a href="#" onclick="setActiveStyleSheet('alternate 4'); return false;"><img src="images/themeorange.png" alt="alternate style 4"  /></a>
            <a href="#" onclick="setActiveStyleSheet('alternate 5'); return false;"><img src="images/themerose.png" alt="alternate style 5"  /></a>
            <a href="#" onclick="setActiveStyleSheet('alternate 6'); return false;"><img src="images/themeyellow.png" alt="alternate style 6"  /></a>
            <a href="#" onclick="setActiveStyleSheet('alternate 7'); return false;"><img src="images/themegrey.png" alt="alternate style 7"  /></a>
             
             </div>    
    <div id="lang">
                <form action="index.php" id="idioma" method="post">
                        
                        <select name="idioma" onChange="javascript:this.form.submit()">    
                            <option selected="selected"> Select Language </option>
                            
                            <option class="bg1" value="en">English</option>
                            <option class="bg2" value="es">Spanish</option>
                            <option class="bg2" value="pt">Portuguesse</option>
                            <option class="bg2" value="dutch">Alemán</option>
                            <option class="bg2" value="it">Italiano</option>
                            <option class="bg2" value="polish">Polish</option>
                            <option class="bg2" value="cat">Catalan</option>
                            <option class="bg2" value="vasco">Vasco</option>
                        </select>                 

                    <!--<input type="submit" value="<?php echo CBUTTON;?>" />-->
             </form>
    </div>
	
	  <div id="wc3">
    <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-html20" alt="validate"></a>
     </div>
    
        <div id="cabecera"></div>         
             <div id="print"><a href="javascript:imprimir()"><div onMouseOver="showdiv(event,'<?php echo IMPRIMIR_PAPEL; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blank_print2.gif" alt="" /></div></a></div>
             <div id="backup"><a href="?seccion=back_up"><div onMouseOver="showdiv(event,'<?php echo BACKUP; ?>');" onMouseOut="hiddenDiv()" style='display:table;margin-top3px;'><img src="images/blank_download.gif" alt="" /></div></a></div>
             <!--<div id="admin"><a href="index3.php"><img src="images/open.ico"></a></div>-->
             
             <div id="acciones">
            <?php require $acciones; ?>
            </div>
            
            <div id="variante">
            <?php require $incluir; ?>
            </div>

        <div id="bloque">            
            <?php require 'accordion-menu/menux.php';?>
            </div>



</body>
</html>