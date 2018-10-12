<?php 
/**
* Mod buscar no conformidades
* 
* PHP version 5
* 
* @category Mod
* @package  Handy-q
* @author   JJuan <javier@textblock.org>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.textblock.org
*/

// Este archivo ha sido descargado de http://www.programacionweb.net/ 
// y contiene 3 funciones útiles para la búsqueda en una base de datos 
// para instrucciones: http://www.programacionweb.net/articulos/articulo/?num=260 

 
function buscar($sTabla, $aCampos, $iPaginas = 10) 
{ 
    global $iTotal, $aResultados; 
		$iPos = isset($_POST['iPos']) ? $_POST['iPos'] : '';
		$preq = isset($_POST['preq']) ? $_POST['preq'] : '';
    
    if( ! isset( $_GET['pag'] ) ) $_GET['pag'] = 0; 
    $_GET['pag'] *= 1; 
    $aPalabras = explode(' ', addslashes($_GET['q'])); 
    foreach ($aPalabras as $sPalabra) { 
        if ($sPalabra != '') { 
            $preq = isset( $_GET['preq'] )? $_GET['preq']: false;
            $preq .= " AND ( 0"; 
        foreach ($aCampos as $sCampo) 
                 $preq .= " OR $sCampo LIKE '%".$sPalabra."%'"; 
                 $preq .= ")";        
        }
    }   

        include '../includes/mysqli.php';
		@$iTotal = mysql_result(mysqli_query($mysqli, "SELECT COUNT(".$aCampos[0].") FROM `hojasdemejora` WHERE 1$preq"), 0); 
        $aResultados=mysqli_query($mysqli, "SELECT * FROM `$sTabla` WHERE 1$preq LIMIT ".($_GET['pag']*$iPaginas).",$iPaginas"); 
} 


function paginar($iPaginas = 10) 
{ 
    global $iTotal; 
    $iFinal = ($_GET['pag']+6 < $iTotal/$iPaginas)?$_GET['pag']+6:round($iTotal/$iPaginas); 
    $iInicio = ($_GET['pag']-5 > 0)?$_GET['pag']-5:0; 
    for ($iTemp = $iInicio; $iTemp < $iFinal; $iTemp++) { 
        echo (($iTemp == $_GET['pag'])?$iTemp+1:'<a href="?seccion=busca_ncs&q='.$_GET['q'].'&pag='.$iTemp.'">'.($iTemp+1).'</a>').' '; 
    } 
    if ($_GET['pag']+6 < $iTotal/$iPaginas) {
         echo '...';
    }
    if ($iTotal == 0) {
        echo '0';
    }
}

 
function mostrar($sTitulo, $sTexto, $sId, $sUrl, $iPaginas = 10) 
{ 
    global $aResultados; 
    $aPalabras = explode(' ', $_GET['q']); 
    while ($aResultado = mysqli_fetch_array($aResultados)) { 
        foreach ($aPalabras as $sPalabra) {
            if ($sPalabra != '') { 
                $iPos = strpos(strtolower($aResultado[$sTexto]), strtolower($sPalabra)); 
            }
            if (!isset($iMin) || ($iMin > $iPos)) {

                $iMin = $iPos; 
            }        
                $sVistaPrevia = substr($aResultado[$sTexto], ($iMin-15 > 0)?$iMin-15:0, 300); 
                $aVistaPrevia = explode(' ', $sVistaPrevia); 
            if ($iMin != 0) {
                array_shift($aVistaPrevia);
            } 
        }
        array_pop($aVistaPrevia); 
          $sVistaPrevia = htmlentities(implode(' ', $aVistaPrevia)); 
    foreach ($aPalabras as $sPalabra) {
            if (($sPalabra != '') && $sPalabra != 'b') {
                 $sVistaPrevia = preg_replace('{$sPalabr}', '<b>'.$sPalabra.'</b>', $sVistaPrevia);
            }
           echo "<br><b><a href=\"".$sUrl.$aResultado[$sId]."\" target='_top'>".substr($aResultado[$sTitulo], 0, 50)."</a></b><br>".$sVistaPrevia."<br><a href=\"".$sUrl.$aResultado[$sId]."\" target='_top'>".substr($sUrl.$aResultado[$sId], 0, 80)."</a><br>";
              $it = 1; 
    }
    }    
} 
?>