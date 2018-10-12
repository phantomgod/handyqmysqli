<link type="text/css" rel="stylesheet" title="default" href="../templates/style.css" media="screen" />
<link rel="stylesheet" href="../templates/font-awesome-4.2.0/css/font-awesome.min.css">
<?php 
/** 
* Mod IMPRIMIR documentos de la BD 
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

$db_name = "handyq";    // The database we created earlier in phpMyAdmin. 
$db_server = "localhost";    // Change if you have this hosted. 
$db_user = "root";    // Your USERNAME     
$db_pass = "";     // Your PASSWORD. Working locally, mine is blank. Change if you plan on deploying. 


$mysqli = new MySQLi($db_server, $db_user, $db_pass, $db_name)  
            or die(mysqli_error()); 
$mysqli->set_charset("utf8"); 


@$id = ( int ) $_GET ['id']; 
$sql = mysqli_query($mysqli,  "SELECT * FROM docmanager WHERE id = $id " ); 
$data = mysqli_fetch_row( $sql ); 

// Aktionen 
$aktion = ''; 
if (isset ( $_GET ['aktion'] )) { 
    $aktion = $_GET ['aktion']; 
} 

if ($aktion == "") { 
    echo 'Admin Area'; 
} 

if ($aktion == "print") { 
    $sql = mysqli_query($mysqli,  "SELECT * FROM docmanager ORDER BY fecha DESC" ); 

    echo '<table class="sortable">'; 
    echo '<caption>' . DOCMANAGER_PRINT . '</caption>'; 
    echo "<tbody>"; 
    echo '<tr><th>' . NOMBRE_DOCUMENTO . '</th><th>' . DOCUMENTO_AUTOR . '</th><th>' . FECHA . '</th></tr>'; 
    while ( $row = mysqli_fetch_row( $sql ) ) { 
        echo "<tr>"; 
        // echo "<td>".$row['0']."</td>"; 
        echo "<td><a href='?&amp;aktion=print_id&amp;id=" . $row ['0'] . "'>" . $row ['1'] . "</a></td>"; 
        echo "<td><a href='?&amp;aktion=print_id&amp;id=" . $row ['0'] . "'>" . $row ['2'] . "</a></td>"; 
        echo "<td><a href='?&amp;aktion=print_id&amp;id=" . $row ['0'] . "'>" . $row ['3'] . "</a></td>"; 
        echo "</tr>"; 
    } 
    echo "</tbody>"; 
    echo "</table>"; 
} 
if ($aktion == "print_id") { 
    if ((empty ( $_POST ['titulo'] )) and (empty ( $_POST ['autor'] )) and (empty ( $_POST ['fecha'] )) and (empty ( $_POST ['contenido'] ))) { 
        $id = ( int ) $_GET ['id']; 
        $sql = mysqli_query($mysqli,  "SELECT * FROM docmanager WHERE id = $id " ); 
        $data = mysqli_fetch_row( $sql ); 

        echo '<div align="center">';     
        echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward fa-2x" style="color:Black;"></i></a>'; 
                 
        echo "<a href='?seccion=docmanager_admin&amp;aktion=change_id&amp;id=" . $data [0] . "'><i class='fa fa-edit fa-2x' style='color:#00bcd4;'></i></a></div>"; 
        echo '<br /><br />'; 
        echo '<table class="print">'; 
        echo '<caption>' . DOCUMENTOS_DOCUMENTO . ':&nbsp;&nbsp;<span class="documenttitle">' . $data [1] . '</span>'; 
        echo "<tbody>"; 
        echo '<tr>'; 
        /* 
         * echo "<td>".$data[1]."</td>"; echo "<td>".$data[2]."</td>"; echo "<td>".$data[3]."</td>"; 
         */ 
        echo "<td>" . $data [4] . "</td>"; 
        echo '</tr>'; 
        echo "</tbody>"; 
        echo '</table>'; 
         
        echo '<div align="center">';     
        echo '<a href="javascript:history.go(-1)" title="' . VOLVER . '"><i class="fa fa-step-backward fa-2x" style="color:Black;"></i></a>'; 
                 
        echo "<a href='?seccion=docmanager_admin&amp;aktion=change_id&amp;id=" . $data [0] . "'><i class='fa fa-edit fa-2x' style='color:#00bcd4;'></i></a></div>"; 

    } 
} 
?> 