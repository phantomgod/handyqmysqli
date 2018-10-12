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
 $sql = "SELECT * FROM enlaces ORDER BY id DESC";  
 $result = mysqli_query($mysqli, $sql);  
 $output .= '  
           <div style="border: 6px #2196F3 solid; width: 100%;">
		   <div id="wrap">
		   <table class="fancyTable" id="myTable04"> 
		    <thead>
                <tr>  
                    <th>idsolicitud</th>
					<th>Fecha</th>
					<th>Título</th>
					<th>Link</th>
					<th>Comment</th>
					<th>SeccionId</th>
					<th>Distrib</th>
                </tr>
			</thead>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tbody><tr>  
                      
					<td class="idsolicitud"" data-id1="'.$row["id"].'" contenteditable>'.$row["idsolicitud"].'</td>
					<td class="fecha" data-id2="'.$row["id"].'" contenteditable>'.$row["fecha"].'</td>
					<td class="titulo" data-id3="'.$row["id"].'" contenteditable>'.$row["titulo"].'</td>
					<td class="link" data-id3="'.$row["id"].'" contenteditable>'.$row["link"].'</td>
					<td class="comment" data-id3="'.$row["id"].'" contenteditable>'.$row["comment"].'</td>
					<td class="seccionid" data-id3="'.$row["id"].'" contenteditable>'.$row["seccionid"].'</td>
					<td class="clave1" data-id3="'.$row["id"].'" contenteditable>'.$row["clave1"].'</td>
                    <td><button type="button" name="delete_btn"" data-id77="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr></tbody>
           ';  
      }  
      $output .= '  
				<tbody><tr>  

					<td id="idsolicitud" contenteditable></td>
					<td id="fecha" contenteditable></td>
					<td id="titulo" contenteditable></td>
					<td id="link" contenteditable></td>
					<td id="comment" contenteditable></td>
					<td id="seccionid" contenteditable></td>
					<td id="clave1" contenteditable></td>
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