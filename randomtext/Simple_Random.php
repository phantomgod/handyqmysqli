<?php
/*
  Jaxolotl Design
  
  Simple Random File Renderer
  PHP programming: Javier Valderrama
  
  Developed for Jaxolotl Design - www.jaxolotl-design.com
  
  Files extensions supported txt|html|htm|php|jpg|jpeg|gif|png|bmp
  By adding extra hand made code you can include somenthing else....LOL
  
  Enjoy :)
  
  Please don't remove this lines,
  I think it's a very low price and a way to say TNX if it's usefull for you ;)
*/

//SWITCH IT TO error_reporting(0) when publishing
  error_reporting(E_ALL);


#############################################
###   IS it an existant IMAGE?
#
  function is_image($string){
    return ((file_exists($string))&&(preg_match('#(\.jpg|\.jpeg|\.gif|\.png|\.bmp)$#i',$string)))  ? true : false ;
  }


#############################################
###   IS it an existant TEXT file?
#
  function is_text($string){
    return ((file_exists($string))&&(preg_match('#(\.txt|\.php|\.html)$#i',$string)))  ? true : false ;
  }


#############################################
###   Select the output type you want to render
#     output types : 'image','text'

  define('OUTPUT_TYPE','text');


#############################################
###   Select the local folder to retrieve files
#     Replace current value with your frase's directory (don't delete the slash)

  define('RANDOM_FILES_FOLDER','txt/');


#############################################
###   START PROCCESS
#
  $my_array = Array();
  $my_dir = RANDOM_FILES_FOLDER ;
  
  if ($dir = @opendir("$my_dir")) {
  
    while (($file = readdir($dir)) !== false) {
      if ($file != "." && $file != ".."  && !is_dir($my_dir.$file))
      {
        switch(OUTPUT_TYPE):
        
          case'image':
            if(is_image($my_dir.$file)){
              $my_array[] = $file;
            }
          break;
          
          case'text':
            if(is_text($my_dir.$file)){
              $my_array[] = $file;
            }
          break;
          
          default:
          break;
          
        endswitch;
  
      }
    }
    closedir($dir);
  }


#############################################
###   Do the job if the array contains information to render
#

  if(count($my_array)>0){
  
    $random_number = rand(0, count($my_array)-1);
    $random_file = $my_array[$random_number];
  
    switch(OUTPUT_TYPE):
    
      case'image':    //show a random image
        echo "<img src=\"".$my_dir.$random_file."\" border=\"0\" alt=\"\">";
      break;
      
      case'text':   //include the text file file
        include($my_dir.$random_file);
      break;
      
      default:
      break;
      
    endswitch;
  
  }
?>