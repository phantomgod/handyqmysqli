<link href="./css/960.css" rel="stylesheet" media="screen" />
        <link href="./css/defaultTheme.css" rel="stylesheet" media="screen" />
        <link href="./css/myTheme.css" rel="stylesheet" media="screen" />
		<link href="./css/bootstrap.css" rel="stylesheet" media="screen" />
		<script src="./js/jquery.min.js"></script>   
		<script src="./js/bootstrap.min.js"></script>   
		<script src="./js/jquery.fixedheadertable.js"></script>
        <script src="./js/demo.js"></script>


 <script>
   document.getElementById("wrap").addEventListener("scroll",function(){
   var translate = "translate(0,"+this.scrollTop+"px)";
   this.querySelector("thead").style.transform = translate;
});
    </script> 
	<style>
	#wrap {
    overflow: auto;
    height: 420px;
	}

	/* css for demo */
	td {
		background-color: #e1e1e1;

	}
</style>
	
<?php  
require '../../lang/spanish.lang.php';
require_once '../../includes/mysqli.php';
//header('Content-Type: text/html;charset=UTF-8');
 $output = '';  
 $sql = "SELECT * FROM servicios ORDER BY id DESC";  
 $result = mysqli_query($mysqli, $sql);  
 $output .= '  
           <div style="border: 6px #2196F3 solid;">
		   <div id="wrap">
		   <table class="fancyTable" id="myTable04"> 
		    <thead>
                <tr>  
                    <th>Id</th>
					<th>Servicio</th>
					<th>Activo</th>
					<th>Tipo</th>
					<th>Delete</th>
                </tr>
			</thead>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tbody><tr>  
                    <td>'.$row["id"].'</td>  
					<td class="servicio"" data-id1="'.$row["id"].'" contenteditable>'.$row["servicio"].'</td>
					<td class="activo" data-id2="'.$row["id"].'" contenteditable>'.$row["activo"].'</td>
					<td class="tiposervicio" data-id3="'.$row["id"].'" contenteditable>'.$row["tiposervicio"].'</td>
                    <td><button type="button" name="delete_btn"" data-id77="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr></tbody>
           ';  
      }  
      $output .= '  
				<tbody><tr>  
                <td></td>  
                <td id="servicio" contenteditable></td>
				<td id="activo" contenteditable></td>
				<td id="tiposervicio" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr></tbody> 
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="75">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</tbody></table></div></div>';  
 echo $output;  
 
  $mysqli->close();