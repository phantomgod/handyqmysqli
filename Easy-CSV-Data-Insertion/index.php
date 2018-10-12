<?php  include('../includes/configPDO.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>nserción masiva de documentos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/css/prettify.css" rel="stylesheet">
    <link href="assets/css/bootstrap-editable.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
      <link rel="shortcut icon" href="assets/ico/favicon.png">

 

    
</head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

  <div class="container">
    <p>
      <a href="../AdminIndex.php" class="btn btn-success btn-large">Administrar</a> :: <a href="#fileupload" data-toggle="modal" class="btn btn-primary btn-large">Upload CSV</a> :: <a href="exportcsv.php" data-toggle="modal" class="btn btn-primary btn-large">Download CSV</a>
    </p>
  </div>



<div class="container">

    <!-- Docs nav
    ================================================== -->
  
          <?php
		  	if(isset($_GET["ServerStatsAdded"]))
			    if($_GET["ServerStatsAdded"]==77083368)  
				
			   {
			   echo "<div class='alert alert-success'>"; 
			   echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>"; 
			   echo "Los documentos se han insertado correctamente."; 
			   echo "</div>";
			   }
			 if(isset($_GET["ServerStatsAdded"]))
			   if($_GET["ServerStatsAdded"]==37767)  
			   {
			   echo "<div class='alert alert-block'>"; 
			   echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
			   echo "<h4>Warning!</h4>"; 
			   echo "O el formato que has querido subie es erróneo, o tiene más de 10 MB, o los datos ya estyán en el sistema."; 
			   echo "</div>"; 
			   } 
		  ?>
      
      <div class="span12">



        <!-- Server Stats
        ================================================== -->
        <section id="c1">
          <div class="page-header">
            <h1>Documentos en la tabla</h1>
          </div>

<table class="sortable">
              <thead>
                <tr>
                  <th>Id</th>
				  <th>Proveedor</th>
                  <th>Estado</th>
                  <th>Fecha</th>
                  <th>Suministro</th>
                  <th>Evaluación</th>
                </tr>
              </thead>
              <tbody>


            
            <?php

		

// We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT  * FROM proveedores");
// For Executing prepared statement we will use below function
    $STM->execute();
// we will fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
    foreach($STMrecords as $row)
        {
			

		 echo"<tr>";
			echo"<td>".$row[0]."</td>";
			echo"<td>".$row[1]."</td>";
			echo"<td>".$row[2]."</td>";
			echo"<td>".$row[3]."</td>";
			echo"<td>".$row[4]."</td>";
			echo"<td>".$row[5]."</td>";
         echo"</tr>";

		
        }
	

			?>

              </tbody>
            </table>
          
          
        </section>
        
 </div>
 </div>
 </div>

    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <?php  include('footer.php'); ?>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
	<script type="text/javascript" src="../jscripts/sorttable.js"></script>
    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/prettify.js"></script>

    <script src="assets/js/application.js"></script>
    
	<script src="assets/js/jqBootstrapValidation.js"></script>     
             <script>
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>



  </body>
</html>
