<?php

/**
* Mod ADD A DOCUMENT
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


function Get_Select_tree($mysqli,$root,$name,$compare=0)
{
        global $mysqli;
		//Muestra las categorias de la tabla secciones  (construida con estructuras de árbol.)
        //Obtener los valores izq y der de la raiz - parametro.
    if ($root==0) {
            $result= mysqli_query($mysqli, "SELECT lft,rgt FROM secciones WHERE padre is null");
    } else {
            $result= mysqli_query($mysqli, "SELECT lft,rgt FROM secciones WHERE id=$root");
    }
        $row=mysqli_fetch_array($result);

        //Empezar con una pila derecha vacia.
        $right=array();

        //Obtener todos los descendentes del nodo raiz.
        $result=mysqli_query($mysqli, "SELECT * FROM secciones WHERE lft BETWEEN ".$row["lft"]." AND ".$row["rgt"]." ORDER BY lft ASC");

        //Mostrar cada fila
        echo "<select name='$name'>\n";
    while ($row=mysqli_fetch_array($result)) {
            //Solo chequear la pila si hay alguno.
        if (count($right)>0) {
                //chequear si debemos eliminar algun nodo de la pila.
            while ($right[count($right)-1]<$row["rgt"]) {
                array_pop($right);
            }
        }
            //Mostrar el titulo del nodo indentado. y seleccionado si coincide con compare
        if ($compare != 0 && $row["id"]==$compare) {
                echo "<option value='".$row["id"]."' selected>".str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', count($right)).$row["nombre"]."</option>\n";
        } else {
                echo "<option value='".$row["id"]."'>".str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', count($right)).$row["nombre"]."</option>\n";
        }

            //Añadir este nodo a la pila
            $right[]=$row["rgt"];
    }
        echo "</select>\n";
}

        /**Funcion para guardar el enlace pendiente. */

function Save_url($mysqli,$fields)
{
        global $mysqli;
		$sql = "INSERT INTO
                        `solicitudes`
                        ( `fecha` ,
                        `titulo` ,
                        `link` ,
                        `comment`,
                        `clave1`,
                        `emailcontacto`,
                        `nombrecontacto`,
                        `seccionid`)
                     VALUES
                        ( '".date("Y-m-d H:i:s")."' ,
                        '".$fields['titulo']."' ,
                        '".$fields['link']."' ,
                        '".nl2br(htmlentities($fields['comment']))."' ,
                        '".$fields['clave1']."' ,
                        '".$fields['email']."',
                        '".$fields['nombre']."' ,
                        '".$fields['seccion']."')";

    if ( isset( $sql ) && !empty( $sql )) {
              //echo "<!--".$sql."-->";
              $result = mysqli_query($mysqli, $sql);
              return $result;
    }
}

function testFields(&$errores,&$fields)
{
        //Validacion de campos.
        //Obtiene los errores de validacion y los campos para insertar si todo es correcto.
        //Si hay al menos un error la funcion devuelve falso.
    if (isset($_POST["ttitulo"]) && !empty($_POST["ttitulo"])) {
        $fields["titulo"]=$_POST["ttitulo"];
    } else {
            $fields["titulo"]="";
            $errores["titulo"]="<font class=framefont_#9fff30>El campo título debe cumplimentarse.</font>";
    }
    if (isset($_POST["tlink"]) && !empty($_POST["tlink"])) {
            $fields["link"]=$_POST["tlink"];
    } else {
            $fields["link"]="";
            $errores["link"]="<font class=framefont_#9fff30>El campo link debe cumplimentarse.</font>";
    }
    if (isset($_POST["tclave1"]) && !empty($_POST["tclave1"])) {
            $fields["clave1"]=$_POST["tclave1"];
    }
    if (isset($_POST["tcomment"]) && !empty($_POST["tcomment"])) {
            $fields["comment"]=$_POST["tcomment"];
    } else {
            $fields["comment"]="";
            $errores["comment"]="<font class=framefont_#9fff30>Debe indicarse una breve descripción del sitio.</font>";
    }
    if (isset($_POST["temail"]) && !empty($_POST["temail"])) {
            $fields["email"]=$_POST["temail"];
    } else {
            $fields["email"]="";
            $errores["email"]="<font class=framefont_#9fff30>No se ha indicado un email de contacto.</font>";
    }
    if (isset($_POST["tnombre"]) && !empty($_POST["tnombre"])) {
            $fields["nombre"]=$_POST["tnombre"];
    } else {
            $fields["nombre"]="";
            $errores["nombre"]="<font class=framefont_#9fff30>Debe indicarse una persona de contacto.</font>";
    }
    if (isset($_POST["tseccion"]) && !empty($_POST["tseccion"])) {
            $fields["seccion"]=$_POST["tseccion"];
    } else {
            $fields["seccion"]="";
            $errores["seccion"]="<font class=framefont_#9fff30>La seccion no puede estar vacia.</font>";
    }

    if (count($errores)>0) {
            return false;
    } else {
            return true;
    }
}

    //Testeamos los errores en los campos de entrada
if (testFields($errores, $fields)) {
        //Probamos a grabar el registro.
    if (save_url($fields)) {
            //Todo ok.
            $results= '<b><font color="#a6e195">La URL ha sido enviada con éxito.<br>
            En breve estudiaremos su solicitud de inclusión en el directorio</font></b>';
            //Si todo va bien eliminamos el contenido de $_POST para que los campos del formulario queden en blanco.
            unset($_POST);
    } else {
            //Error en DB contacto con webmaster.
            $results= '<b><font class="framefont_red">Error al enviar URL.</font><br>
            Si el problema persiste contacte con el administrador del sitio.</font></b>';
    }
} else {
        //Devolvemos los errores constados.
        reset($errores);
        $results= "<b><font class=framefont_#9fff30>Errores:</font><br><ul>\n";
    while (list($clave, $val) = each($errores)) {
            $results.= "<li>$val</li>\n";
    }
        $results.= "</ul></font></b>\n";
}
?>

<!DOCTYPE html>
<html>
<head>

<link type="text/css" rel="stylesheet" href="aisgclistadesplegable/style.css" media="screen" />

<STYLE type="text/css">
body {
    background-color: transparent;
}
</style>

</head>

<body>

	<table cellpadding="0" cellspacing="0" border="0" width="90%">
		<tr>
			<?php
if (empty($_POST["tlink"])) {
    $_POST["tlink"]="http://";
}
?>

			<td width="40%" valign="top" style="padding: 10px">&nbsp;Añadir
				la URL del documento.<br> &nbsp;Los campos marcados con * son
				obligatorios.<br> <br>
				<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
					* Titulo del documento:<br> <input name="ttitulo" type="text"
						id="ttitulo" size="44" maxlength="255"
						value=<?php
                if (isset($_POST["ttitulo"]) && !empty($_POST["ttitulo"])) {
                    $fields["titulo"]=$_POST["ttitulo"];
                   echo $_POST["ttitulo"];
                }
            ?>><br />
					* Link (Enlace real):<br> <input name="tlink" type="text"
						id="tlink" size="44" maxlength="255"
						value=<?php

                if (isset($_POST["tlink"]) && !empty($_POST["tlink"])) {
                    $fields["link"]=$_POST["tlink"];
                    echo $_POST["tlink"];
                }

            ?>><br>
					* Descripcion del documento:<br>(Máximo 400 caracteres.)<br>
					<textarea name="tcomment" id="tcomment" cols="34" rows="4">
						<?php

                if (isset($_POST["tcomment"]) && !empty($_POST["tcomment"])) {
                    $fields["tcomment"]=$_POST["tcomment"];
                    echo $_POST["tcomment"];
                }
            ?>
					</textarea>
					<br> Este documento se distribuye a las personas /
					departamentos:<br> <input name="tclave1" type="text"
						id="tclave1" size="44" maxlength="128"
						value=<?php

                if (isset($_POST["tclave1"]) && !empty($_POST["tclave1"])) {
                    $fields["tclave1"]=$_POST["tclave1"];
                    echo $_POST["tclave1"];
                }
            ?>><br>
					* email de contacto:<br> <input name="temail" type="text"
						id="temail" size="44" maxlength="128"
						value=<?php

                if (isset($_POST["temail"]) && !empty($_POST["temail"])) {
                    $fields["temail"]=$_POST["temail"];
                    echo $_POST["temail"];
                }

            ?>><br>
					* persona de contacto:<br> <input name="tnombre" type="text"
						id="tnombre" size="44" maxlength="128"
						value=<?php

                if (isset($_POST["tnombre"]) && !empty($_POST["tnombre "])) {
                    $fields["tnombre"]=$_POST["tnombre"];
                    echo $_POST["tnombre"];
                }
            ?>><br>
					* Sección a la que pertenece el documento: <br>

					<?php
                /*$link = mysql_connect($hostname,$username,$password)
                  or die("Could not connect: " . mysql_error());
                   mysql_select_db($databasename, $link) or die ( mysql_error());*/

                if (isset($_POST["tseccion"]) && !empty($_POST["tseccion "])) {
                    $fields["tseccion"]=$_POST["tseccion"];

                    $compare=$_POST["tseccion"]>0?$_POST["tseccion"]:0;
                 }
                    $compare="";
                 get_select_tree(0, "tseccion", $compare);

                ?>
						
					<br /><br /> 
					<button type="submit" class="btn btn-info"><?php echo ANADIR; ?></button>
					<br />					
						
				</form>
			</td>
			<td width="60%" style="padding: 10px;" valign="top"><?php
                    echo $results;
                ?>

				<p>
					Ponga la ruta al documento que acaba de subir al servidor. No
					olvide que<br> debe poner el enlace a la carpeta específica a
					la que lo subió, de esta forma:<br>
				</p>
				<ul>
					<li>&nbsp;&nbsp;-&nbsp;Si lo subió a la carpeta de <b>calidad</b>:<br>
						http://dominio/uploads/<b>calidad</b>/archivo
					</li>
					<li>&nbsp;&nbsp;-&nbsp;Si lo subió a la carpeta de <b>administrativos</b>:<br>
						http://dominio/uploads/<b>administrativos</b>/archivo
					</li>
					<li>&nbsp;&nbsp;-&nbsp;... y así sucesivamente. <br> El
						documento será revisado por el responsable, y no aparecerá en el<br>
						listado hasta ser aprobado.
					</li>
					<li>Todos los datos solicitados en el formulario deben ser
						cumplimentados.</li>
				</ul></td>
		</tr>
	</table>

	<br> No utilizar mayusculas ni acentos mas que los estrictamente
	necesarios.

</body>
</html>