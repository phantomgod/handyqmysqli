<?php
include('../../includes/mysqli.php');
//session_start();
$session_id='1'; //$session id
$path = "uploads/";

    $valid_formats = array("jpg", "png", "PNG", "gif", "bmp");
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
        {
            $name = $_FILES['photoimg']['name'];
            $size = $_FILES['photoimg']['size'];
            
            if(strlen($name))
                {
                    list($txt, $ext) = explode(".", $name);
                    if(in_array($ext,$valid_formats))
                    {
                    if($size<(1024*1024))
                        {
                            $actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
                            //$actual_image_name = $txt.$ext;
                            $tmp = $_FILES['photoimg']['tmp_name'];
                            if(move_uploaded_file($tmp, $path.$actual_image_name))
                                {
                                mysqli_query($mysqli,"UPDATE users SET profile_image='$actual_image_name' WHERE uid='$session_id'");
                                    
                                    echo "<img src='uploads/".$actual_image_name."'  class='preview'>";
                                    echo "<br />";
                                    echo "Usted ha subido la imagen...".$actual_image_name."";
                                    echo "<br />";
                                    echo "Ahora puede añadir la imagen a su perfil. Use la siguiente pestaña";
                                    //echo "<input name='button' type='button' onclick='window.close();' value='Cerrar ventana' />";                                    
                                }
                            else
                                echo "failed";
                        }
                        else
                        echo "Image file size max 1 MB";                    
                        }
                        else
                        echo "Invalid file format..";    
                }
                
            else
                echo "Please select image..!";
                
            exit;
        }