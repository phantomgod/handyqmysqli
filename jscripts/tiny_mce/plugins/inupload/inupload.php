<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{#inupload.title}</title>
    <script type="text/javascript" src="../../tiny_mce_popup.js"></script>
    <script type="text/javascript" src="js/inupload.js"></script>
  
</head>

<?php


    $Action            =  vvar("q","none");                        
    $upload_dir        =  vvar("d","./");         
    $substitute_dir = vvar("s","./");         
    $MinW = vvar("minw","100");         
    $MaxW = vvar("maxw","650");         
 
    if($Action=="none")  display_upload_form($MinW,$MaxW);    
    if($Action=="upload")    upload_content_file($upload_dir, $substitute_dir,$MinW,$MaxW);    

function vvar($v,$def)
  {
    $valor = $def;
    if (isset($_SESSION[$v])) {$valor = $_SESSION[$v];}
    if (isset($_GET[$v])) {$valor = $_GET[$v];}
    if ((isset($_POST[$v])) and ($_POST[$v] != ""))  {$valor = $_POST[$v];}
    return $valor;
}

function display_upload_form($MinW,$MaxW)
{
    ?>
      <form name="dialog" action="inupload.php?<?php echo $_SERVER["QUERY_STRING"]; ?>&q=upload" method="post" enctype="multipart/form-data" onsubmit="">
        <table cellpadding="4px" width="500px"> 
    <tr> <td class="title" colspan=2>{#inupload.fitxer}</td></tr>
    <tr> <td colspan=2><input type="file" size="50" name="upload_file" ID="File1"/></td></tr>
    <tr> <td class="title" colspan=2>{#inupload.opcions}</td></tr>
    <tr> <td><b>{#inupload.linkn}:</b></td><td><input type="input" value="" size="40" name="linkn" ID="linkn"/></td><td></td></tr>
    <tr> <td><b>{#inupload.minw}:</b></td><td><input type="input" value="<?php echo $MinW;?>" size="40" name="minw" ID="minw"/></td><td></td></tr>
    <tr> <td><b>{#inupload.maxw}:</b></td><td><input type="input" value="<?php echo $MaxW;?>" size="40" name="maxw" ID="maxw"/></td><td></td></tr>
    <tr> <td colspan=2>
         <div class="mceActionPanel">
            <input type="button" id="insert" name="insert" value="{#insert}" onclick="document.getElementById('progress_div').style.visibility='visible';dialog.submit()"/>    
            <input type="button" id="cancel" name="cancel" value="{#cancel}" onclick="tinyMCEPopup.close();" />
        </div>
     </td></tr>     
    </table>
       <div id="progress_div" style="visibility: hidden;"><img src="progress.gif" alt="wait..." style="padding-top: 5px;"></div>        
     </form>
     <?php
 
}
function upload_content_file($DestPath, $DestLinkPath,$MinW,$MaxW)
{
    global $ResultTargetID,$ResizeSizeX,$ResizeSizeY,$html;

    $StatusMessage = "";
    $tt_FileName = "";    
    $max_FileName = "";    
    $FileObject = $_FILES["upload_file"];    
   
    if(!isset($FileObject) || $FileObject["size"]<=0)
    {        
        $StatusMessage = "El fitxer no �s v�lid !! (".$FileObject["size"].")";        
    ShowPopUp($StatusMessage);      
    }    
    else
    {    
     $uid = uniqid();
        $uploadedfile = $FileObject['tmp_name'];
     $Name =  $uid."-".normalitzar($FileObject['name']);
     $tt_Name = "tt_".$Name;                                        
     $tt_FileName = $DestPath . "/".$tt_Name;                                        
     $FileName = $DestPath . "/". $Name;                                    
     $linkn = vvar("linkn",$FileObject['name']);         
      
     
    if (esgrafic($Name))
    {
         if(ResizeImage($uploadedfile, $MinW, 0, $tt_FileName)!=TRUE)    { $StatusMessage .= "Unable to resize the file to MIN specified dimensions. "; }
         if(ResizeImage($uploadedfile, $MaxW, 0, $FileName)!=TRUE)    { $StatusMessage .= "Unable to resize the file to MAX specified dimensions. "; }
           imagedestroy($uploadedfile);
      $html = " <a href=".$DestLinkPath . "/".$Name."><img src=".$DestLinkPath . "/".$tt_Name."></a> ";                    
    }
    else
    {
      move_uploaded_file($FileObject['tmp_name'], $FileName);
      $html = " <a href=\"".$DestLinkPath . "/".$Name."\">".$linkn."</a> ";                    
      }
  }
  // debug();
  CloseWindow($ResultTargetID, $html);
}


function debug()
  {
    echo "<b><font color=red>VAR POST: ";
    var_export($_POST);
    echo "</font></b><br>";
    echo "<b><font color=red>VAR GET: ";
    var_export($_GET);
    echo "</font></b><br>";
    echo "<b><font color=red>VAR SESSION: ";
    var_export($_SESSION);
    echo "</font></b><br>";
  }
function esgrafic($fit)
{
       return (strpos(strtolower($fit), ".jpg")==TRUE) || (strpos(strtolower($fit), ".png")==TRUE) || (strpos(strtolower($fit), ".gif")==TRUE) ; 

}

function normalitzar($fit)
{
   return str_replace(" ","_",strtolower($fit));
}

function ShowPopUp($PopupText)
{
    echo "<script type=\"text/javascript\" language=\"javascript\">alert (\"$PopupText\");</script>";
}

function ResizeImage($uploadedfile, $ResizeSizeX, $ResizeSizeY, $ActualFileName)
{
    try
    {
        if(strpos($ActualFileName, ".jpg")==TRUE)
            $src = imagecreatefromjpeg($uploadedfile);                                                                // Create an image object
        else if(strpos($ActualFileName, ".gif")==TRUE)
            $src = imagecreatefromgif($uploadedfile);
        else if(strpos($ActualFileName, ".png")==TRUE)
            $src = imagecreatefrompng($uploadedfile);
        else
            return FALSE;
        list($Originalwidth, $Originalheight) = getimagesize($uploadedfile);                                        // get current image size
        if($ResizeSizeY==0 && $ResizeSizeX!=0)                                                                        // if only the width was specified
            $ResizeSizeY = ($Originalheight/$Originalwidth) * $ResizeSizeX;
        else if($ResizeSizeX==0 && $ResizeSizeY!=0)                                                                    // if only the height was specified
            $ResizeSizeX = ($Originalwidth/$Originalheight) * $ResizeSizeY;
        $tmp = imagecreatetruecolor($ResizeSizeX, $ResizeSizeY);                                                    // create new image with calculated dimensions    
        imagecopyresampled($tmp, $src, 0, 0, 0, 0, $ResizeSizeX, $ResizeSizeY, $Originalwidth, $Originalheight);    // resize the image and copy it into $tmp image        
        if(strpos($ActualFileName, ".jpg")==TRUE)
            imagejpeg($tmp, $ActualFileName, 100);
        else if(strpos($ActualFileName, ".gif")==TRUE)
            imagegif($tmp, $ActualFileName);
        else if(strpos($ActualFileName, ".png")==TRUE)
            imagepng($tmp, $ActualFileName, 100);        
        imagedestroy($src);
        imagedestroy($tmp); // NOTE: PHP will clean up the temp file it created when the request has completed.                
    }
    catch(Exception $e)
    {
        echo $e;
        return FALSE;
    }
    return TRUE;
}

function CloseWindow($FocusItemID, $FocusItemValue)
{
    ?>
        <script language="javascript" type="text/javascript">    
            ClosePluginPopup('<?php echo $FocusItemValue; ?>');
        </script>
    <?php
}

?>