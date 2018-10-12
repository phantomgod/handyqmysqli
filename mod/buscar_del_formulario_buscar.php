<?php
//cadena de conexion 
//mysql_connect("localhost","root","root"); 

require_once("../includes/mysql.php");
$db = new MySQL();

//DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe 
if ($busqueda<>''){ 
   //CUENTA EL NUMERO DE PALABRAS 
   $trozos=explode(" ",$busqueda); 
   $numero=count($trozos); 
  if ($numero==1) { 
   //SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE 
   $cadbusca="SELECT * FROM informeauditoria WHERE ai LIKE '%$busqueda%' OR Fecha OR AreaAuditada LIKE '%$busqueda%' OR Auditor LIKE '%$busqueda%' LIMIT 50"; 
  } elseif ($numero>1) { 
  //SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST 
  //busqueda de frases con mas de una palabra y un algoritmo especializado 
  $cadbusca="SELECT *, MATCH ( ai,AreaAuditada, Auditor ) AGAINST ( '$busqueda') FROM informeauditoria ORDER BY ai DESC LIMIT 50"; 
 } 
$result=((mysqli_query($mysqli, "USE copt")) ? mysqli_query($mysqli,  $cadbusca) : false)  or die (((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

echo "<table width='90%' border = '1'>";
echo "<tr>";
echo "<td><font class='fontd'>Aud. Nº:</font></td>";
echo "<td><font class='fontd'>Fecha:</font></td>";
echo "<td><font class='fontd'>Área auditada:</font></td>";
echo "<td><font class='fontd'>Doc. Ref:</font></td>";
echo "<td><font class='fontd'>Auditor:</font></td>";
//echo "<td><font class='fontd'>Objeto:</font></td>";
echo "<td><font class='fontd'>Resultado:</font></td>";
echo "</tr>";

While($row=mysqli_fetch_object($result)) 
{ 
   //Mostramos los titulos de los articulos o lo que deseemos... 
  $ai=$row->ai;
  $Fecha=$row->Fecha;   
  $AreaAuditada=$row->AreaAuditada;
  $Documentacion=$row->Documentacion;   
  $Auditor=$row->Auditor;
  //$ObjetoAuditoria=$row->ObjetoAuditoria;
  $Resultado=$row->Resultado;  

   echo "<tr>";
    echo "<td>$ai</td>";
    echo "<td>$Fecha</td>";
    echo "<td>$AreaAuditada</td>";
     echo "<td>$Documentacion</td>";
    echo "<td>$Auditor</td>";
    //echo "<td>$ObjetoAuditoria</td>";
    echo "<td>$Resultado</td>";
    echo "</tr>";

}
} 
?>