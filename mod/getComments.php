<?php    


          require_once '../includes/mysql.php';
          $db = new MySQL();

        // we strip the id number from the query string    
         @$ID = $_GET[id];          
        // we make the query to our database  
        //$query = mysql_query("SELECT storyId, comment, date FROM comments WHERE storyId = '".$sId."' ORDER BY date ASC ");  
         $query = mysqli_query($mysqli, "SELECT * FROM hojasdemejora WHERE id = $ID");  
        print 'Comments for this article are';  
        print '<ul>';  
        // and we loop through the results  
        while ($row = mysqli_fetch_array($query)) {  
            print '<li>'.$row['descripcion'].'</li>';
echo ((is_object($mysqli)) ? mysqli_error($mysqli) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));            
        }  
        print '</ul>';  
?>   