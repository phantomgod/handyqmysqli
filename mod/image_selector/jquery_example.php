<!--
/*************************************************************
 * This script is developed by Arturs Sosins aka ar2rsawseen, http://webcodingeasy.com
 * Feel free to distribute and modify code, but keep reference to its creator
 *
 * Image Selector class creates an image selector input with image preview based on select element. 
 * Images can be changed using select element itself or by clicking on image. 
 * Additionally this class provides API to select first, last, next or previous images or an image with specific index. 
 * It also can regenerate preview images for dynamical input manipulations.
 *
 * For more information, examples and online documentation visit: 
 * http://webcodingeasy.com/JS-classes/Input-for-selecting-images-with-preview
**************************************************************/
-->
<!DOCTYPE html>
<html>
<head>
<style>
#image_selector_wrapper
{
    display: inline-block;
}
</style>
</head>
<body>
<div style='width:600px;'>This package provides an input for images with image preview and API that allows you to, go to first or last image, browse images using previous and next, change to next image by clicking on image and even using dropdown box</div>
<form method='post' action='' onsubmit='alert(this.image.value)'>
<a href='javascript:void(0);' onclick='$("#images").imageSelector("first")'>first</a>&nbsp;&nbsp;&nbsp;
<a href='javascript:void(0);' onclick='$("#images").imageSelector("prev")'>prev</a>&nbsp;&nbsp;&nbsp;

<?php
echo '<select name="image" id="images">'; 
                        $handle=opendir('../../mod/ajaximage/uploads/'); 
        while (false!==($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                       //echo "<option value=\"$file\">$file   - ".filesize("mod/faces/tmp/$file")." bytes</option>\n";
                        echo "<option value=\"../../mod/ajaximage/uploads/$file\">$file</option>\n";

            }
        }
                    closedir($handle); 
                    echo "</select>";
                    
?>


<!--<select name='image' id='images'>
<option value='../../images/a1.png'>Facebook</option>
<option value='../../images/a2.png' selected='true'>Twitter</option>
<option value='../../images/a3.png'>Draugiem</option>
<option value='../../images/a4.png'>Reddit</option>
</select>-->


<a href='javascript:void(0);' onclick='$("#images").imageSelector("next")'>next</a>&nbsp;&nbsp;&nbsp;
<a href='javascript:void(0);' onclick='$("#images").imageSelector("last")'>last</a>
<p><input type='submit'/></p>
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="./image_selector.jquery.js" ></script>
<script type="text/javascript">
$("#images").imageSelector({
    //width of images
    width: 100,
    //height of images
    height: 100,
    //change image on click
    changeOnClick: true,
    //hide original input
    hideInput: false
});
</script>
</body>
</html>