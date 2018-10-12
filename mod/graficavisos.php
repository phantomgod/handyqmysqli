<?php require_once('maxChart.class.php'); ?> 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd"> 
<html> 
<head> 
   <title>Seguimiento de avisos</title> 
   <link href="style/style.css" rel="stylesheet" type="text/css" /> 
</head> 
<body> 
   <div id="container"> 
      <div id="header"><div id="header_left"></div><div id="header_main">Seguimiento mensual de avisos recibidos (no reclamaciones)</div><div id="header_right"></div></div> 
 
      <div id="main"> 
         <?php 
             
             
            $data['E10'] = 4.80; 
            $data['Fe10'] = 5.71; 
            $data['Ma10'] = 6.63; 
            $data['Ab10'] = 8.19; 
            $data['Ma10'] = 8.85; 
            $data['Ju10'] = 10.27; 
            $data['Jul10'] = 10.36; 
            $data['Ag10'] = 11.58; 
        $data['Se10'] = 11.83; 
        $data['Oc10'] = 12.00; 
        $data['No10'] = 12.00; 
        $data['Di10'] = 11.91;             
        $data['E11'] = 2.65; 
            $data['Fe11'] = 3.42; 
            $data['Ma11'] = 4.07; 
            $data['Ab11'] = 4.66; 
            $data['Ma11'] = 5.32; 
            $data['Ju11'] = 6.80; 
            $data['Ju11'] = 7.08; 
            $data['Ag11'] = 6.36; 
                      
            $mc = new maxChart($data); 
            $mc->displayChart('Porcentajes acumulados',1,700,150); 
            echo "<br/><br/>"; 
             
            $data['E10'] = 4.80; 
            $data['Fe10'] = 6.65; 
            $data['Ma10'] = 8.50; 
            $data['Ab10'] = 12.53; 
            $data['Ma10'] = 11.06; 
            $data['Ju10'] = 15.64; 
            $data['Jul10'] = 16.22; 
            $data['Ag10'] = 13.28; 
        $data['Se10'] = 13.87; 
        $data['Oc10'] = 13.93; 
            $data['No10'] = 12.03; 
        $data['Di10'] = 10.43;             
        $data['E11'] = 2.65; 
            $data['Fe11'] = 4.32; 
            $data['Ma11'] = 5.19; 
            $data['Ab11'] = 6.55; 
            $data['Ma11'] = 7.41; 
            $data['Ju11'] = 13.83; 
            $data['Ju11'] = 8.56; 
            $data['Ag11'] = 1.48; 
                      
            $mc = new maxChart($data); 
            $mc->displayChart('Porcentajes referidos al mes',1,700,150); 
            echo "<br/><br/>"; 
?> 
          
      </div> 
 </div> 
    
</body>