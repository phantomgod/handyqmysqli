<?php 
/** 
* Mod DOCUMENTS TREE 
*  
* PHP version 5 
*  
* @category Mod 
* @package  Handy-q 
* @author   JJuan <javier@textblock.org> 
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License 
* @link     http://www.textblock.org 
*/ 
?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
<table class="print" summary="Administrar documentos">
<caption><?php echo DOCUMENTOS_MAPA;?></caption>
<tbody>
</tbody>
</table>
<br>
<?php      

function Display_tree($root,$linkStyle) 
{  
        //Muestra las categorias de la tabla seccioneslinks  (construida con estructuras de árbol.)  
        //Obtener los valores izq y der de la raiz - parametro.  
        $result= mysqli_query($mysqli, "SELECT lft,rgt FROM secciones WHERE id=$root");  
        $row=mysqli_fetch_array($result);  
        //Empezar con una pila derecha vacia.  
        $right=array();  
        //Obtener todos los descendentes del nodo raiz.  
        $result=mysqli_query($mysqli, "SELECT * FROM secciones WHERE lft BETWEEN ".$row["lft"]." AND ".$row["rgt"]." ORDER BY lft ASC");  
        //Mostrar cada fila  
    while ($row=mysqli_fetch_array($result)) {  
        //Solo chequear la pila si hay alguno.  
        extract($row);  
        if (count($right)>0) {  
            //chequear si debemos eliminar algun nodo de la pila.  
            while ($right[count($right)-1]<$row["rgt"]) {
                array_pop($right);
            } 

        }  
        //Mostrar el titulo del nodo indentado.  
        echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', count($right))."<a href='".$_SERVER['PHP_SELF']."?seccion=directoryhowto1&id=$id' class='$linkStyle'>$nombre</a><br>\n";  
        //Añadir este nodo a la pila  
        $right[]=$row["rgt"];  
    }  
}  
      
  ?>  

       <div id='leftChildLayer'> 
      <?php display_tree(1, "linkStyle");?>
      </div>
      
      <div id='rightChildLayer'>  
     <?php  
if (isset($_GET["id"])) {  
        $id=$_GET["id"];  
        $query="SELECT * FROM secciones WHERE id=$id;";  
        $res=mysqli_query($mysqli, $query);  
        $row=mysqli_fetch_array($res,  MYSQLI_ASSOC);  
        extract($row);  
        $qDetail="SELECT e.*,s.nombre FROM enlaces e,secciones s    
        WHERE s.id=e.seccionid AND s.lft BETWEEN $lft AND $rgt   
        ORDER BY e.fecha DESC;";  
        $resDetail=mysqli_query($mysqli, $qDetail);  
    /*if (mysql_num_rows($resDetail)==0) {  
          echo "<span class='textStyle'><br><br>No hay enlaces.</span>";  
          //exit();  
    }  
        echo "<p name='top'>\n";*/ 
		
		
		echo "<table class = 'print'><caption>";
		
		
		echo "Documentos encontrados en esta categoría:";
		if (mysqli_num_rows($resDetail)==0) {  
          echo "<span class='documenttitle'>&nbsp;&nbsp;&nbsp;No hay enlaces en esta categoría.</span>";  
          //exit();  
        }  
		
		echo "</caption><tbody><tr></tr>";
        echo "<tr><td>";
	while ($row = mysqli_fetch_array($resDetail,  MYSQLI_ASSOC)) {  	 
		 extract($row, EXTR_OVERWRITE);  
         
		  echo "<a href='$link' class='linkStyle'>$titulo</a><br>\n";
          	  
          echo "<p class='textStyle'>$comment</p>\n";
		 // echo "</p>\n"; 
		 
		
    }      
		 /*if (mysql_num_rows($resDetail)==0) {  
          echo "<span class='textStyle'><br><br>No hay enlaces en esta categoría.</span>";  
          //exit();  
        } */
		 
		 echo "</td></tr>";
		  echo "</tbody></table>";
          //echo "<hr>\n";  
    
         
} else {//No está establecido id en $_GET  
        echo "<span class='textStyle'><br><br>Click para ver enlaces.</span><br><br>";
        echo "<a href='?seccion=listadocumentos' target='_parent'><span class='linkStyle'>Ir a la lista completa.</span></a>";
            
}      
    
?>
</div>
</body>
</html>