<?php
/* $Id: debug.php,v 1.2 2004/07/20 09:30:39 jfenin Exp $ */

function debug($filename, $output)
{
  global $debug;
  
  if ($debug == 1)
  {
    /* to avoid problems in PHP safe mode (open basedir restriction), the current
       directory of the calling script will be prepended to the filename. This 
       means that any given path names in $filename will cause the debug function
       to fail. Since this file is only for debug purposes, it really shouldn't
       matter where the debug output file will be created. If you really need to
       have it somewhere else, remove the "dirname..." and the following "/" 
       from the fopen() command
    */
    $file = fopen(dirname(__FILE__) . "/" . $filename, "a") or 
              die ("could not open debug file");
    $datestring = strftime("%d-%b-%Y %H:%M:%S: ");
    fwrite($file, $datestring . $output . "\n");
    fflush($file);
    fclose($file);
  }
}
?>
    
  