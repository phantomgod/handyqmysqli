<?php 

/** 
* Mod REORGANIZAR categorías
* de proveedor
* 
* PHP version 5 
*  
* @category Mod 
* @package  Handy-q 
* @author   JJuan <javier@textblock.org> 
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License 
* @link     http://www.textblock.org 
*/ 
 require '../lang/spanish.lang.php';
require_once '../includes/mysqli.php';
function Rebuild_tree($parent, $left)
{ 
    // el valor derecho de este nodo es valor izquierdo+1 
    $right = $left+1; 
 
    //Si $parent es 0 buscamos la raiz. 
    if ($parent==0) { 
        $result = mysqli_query($mysqli, "SELECT id FROM secciones WHERE padre is null"); 
        if ($result) { 
            $row=mysqli_fetch_array($result); 
            $parent=$row["id"]; 
        } 
    }     
 
    // seleccionar todos los hijos de este nodo 
     $result = mysqli_query($mysqli, "SELECT id FROM secciones WHERE padre=$parent ORDER BY nombre ASC;"); 
    while ($row = mysqli_fetch_array($result)) { 
        
        // ejecucion recursiva de esta función 
        // hijo de este nodo 
        // $right es el valor actual izquierdo, el cual 
        // se incrementa por la función rebuild_tree 
        $right = rebuild_tree($row["id"], $right); 
    } 
        // tenemos el valor izquierdo, y ahora procesamos 
        // el hjo de este nodo del cual conocemos el valor derecho. 
        mysqli_query($mysqli, "UPDATE secciones SET lft=$left , rgt=$right WHERE id=$parent;"); 
 
        // return the right value of this node + 1 
       return $right+1; 
}  
//require('../dbauth_test.php'); 
 
 
if (isset($_POST["tseccion"]) && isset( $_POST["tsectname"]) && strlen($_POST["tsectname"])>1 && $_REQUEST["accion"]=="add") { 
 
    //Obtener el arbol seleccionado 
    extract($_POST); 
    $query="SELECT * FROM secciones WHERE id=$tseccion"; 
    $res=mysqli_query($mysqli, $query); 
    $row=mysqli_fetch_array($res,  MYSQLI_ASSOC); 
    extract($row); 
 
 
    //Actualizamos el arbol actual 
    $query="UPDATE secciones SET rgt=rgt+2 WHERE rgt > ".($rgt); 
    $res=mysqli_query($mysqli, $query); 
    $query="UPDATE secciones SET lft=lft+2 WHERE lft > ".($rgt); 
    $res=mysqli_query($mysqli, $query); 
    $query="INSERT INTO secciones SET lft=$rgt+1, rgt=$rgt+2, nombre='$tsectname', padre=$padre"; 
    $res=mysqli_query($mysqli, $query); 
    $_SESSION["laststatus"]="Insertado...."; 
} 
 
//Caso de añadir nodo a padre como hijo. 
if (isset($_POST["tseccion"]) && isset( $_POST["tsectname"]) && strlen($_POST["tsectname"])>1 && $_REQUEST["accion"]=="add2") { 
 
    //Obtener el arbol seleccionado 
    extract($_POST); 
    $query="SELECT * FROM secciones WHERE id=$tseccion"; 
    $res=mysqli_query($mysqli, $query); 
    $row=mysqli_fetch_array($res,  MYSQLI_ASSOC); 
    extract($row); 
 
    //Actualizamos el arbol actual 
    $query="UPDATE secciones SET rgt=rgt+2 WHERE rgt > ".($lft); 
    $res=mysqli_query($mysqli, $query); 
    $query="UPDATE secciones SET lft=lft+2 WHERE lft > ".($lft); 
    $res=mysqli_query($mysqli, $query); 
    $query="INSERT INTO secciones SET lft=$lft+1, rgt=$lft+2, nombre='$tsectname', padre=$id"; 
    $res=mysqli_query($mysqli, $query); 
    $_SESSION["laststatus"]="Insertado...."; 
} 
 
//Caso de cambiar nombre de sección.. 
if (isset($_POST["tseccion"]) && isset( $_POST["tsectname"]) && strlen($_POST["tsectname"])>1 && $_REQUEST["accion"]=="edit") { 
 
    //Obtener el arbol seleccionado 
    extract($_POST); 
    $query="SELECT * FROM secciones WHERE id=$tseccion"; 
    $res=mysqli_query($mysqli, $query); 
    $row=mysqli_fetch_array($res,  MYSQLI_ASSOC); 
    extract($row); 

 
    //Actualizamos el arbol actual 
    $query="UPDATE secciones SET nombre='$tsectname' WHERE id=$tseccion"; 
    $res=mysqli_query($mysqli, $query); 
    $_SESSION["laststatus"]="Modificado..."; 
} 
 
//Caso de cambio de padre de sección.. 
if (isset($_POST["tseccion"]) && isset( $_POST["tseccion2"]) && ($_POST["tseccion2"] != $_POST["tseccion"]) && $_REQUEST["accion"]=="editpadre") { 
 
    //Obtener el arbol seleccionado 
    extract($_POST); 
    $query="SELECT * FROM secciones WHERE id=$tseccion"; 
    $res=mysqli_query($mysqli, $query); 
    $row=mysqli_fetch_array($res,  MYSQLI_ASSOC); 
    extract($row); 
 
    //Actualizamos el arbol actual 
 
    $query="UPDATE secciones SET padre=$tseccion2 WHERE id=$tseccion"; 
    $res=mysqli_query($mysqli, $query); 
    rebuild_tree(0, 1); 
} 
 
//Caso de eliminar sección. 
if (isset($_POST["tseccion"]) && $_REQUEST["accion"]=="delete") { 
 
    //Obtener el arbol seleccionado 
    extract($_POST); 
    $query="SELECT * FROM secciones WHERE id=$tseccion"; 
    $res=mysqli_query($mysqli, $query); 
    $row=mysqli_fetch_array($res,  MYSQLI_ASSOC); 
    extract($row); 

    if (!empty($padre)) { 
 
        //Verificamos que ningún enlace está apuntando a esta seccion. 
        $query="SELECT id FROM enlaces WHERE seccionid=$tseccion"; 
        $res=mysqli_query($mysqli, $query); 
        $filas=mysqli_num_rows($res); 
        if ($filas>0) { 
            $_SESSION["laststatus"]="No se puede eliminar porque hay enlaces que contienen la seccion."; 
        } else { 
 
            //Actualizamos el arbol actual 
            $query="UPDATE secciones SET padre='$padre' WHERE padre=$tseccion"; 
            $res=mysqli_query($mysqli, $query); 
            $query="DELETE FROM secciones WHERE id=$tseccion"; 
            $res=mysqli_query($mysqli, $query); 
            $_SESSION["laststatus"]="Eliminado..."; 
            rebuild_tree(0, 1); 
        } 
    } else { 
        $_SESSION["laststatus"]="No se puede eliminar la raiz."; 
    } 
} 
 
//Caso de reorganizar el árbol 
if ($_REQUEST["accion"]=="reorganize") { 
    rebuild_tree(0, 1); 
    $_SESSION["laststatus"]="Reorganización."; 
} 
//header("location:directoryhowto5.php");