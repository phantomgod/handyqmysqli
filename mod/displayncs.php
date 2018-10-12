<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ajax Retrieve Comments System</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="pragma" content="no-cache" />
<script type="text/javascript" src="../jscripts/prototype.js"></script>
<script type="text/javascript">
        //<![CDATA[
                 document.observe('dom:loaded', function () {
                      $$('.toggle').each(function(item) {
                          $('comments_'+item.id).hide();
                          item.update('<img src="../images/get.gif" alt="Show comments" /> Show comments');

                          Event.observe(item, 'click', function(event){
                              $('comments_'+item.id).toggle();
                              if($('comments_'+item.id).visible()){
                                  var sId = item.id;
                                  var oOptions = {
                                      method: " $_GET[]",
                                      parameters: "id=" + sId
                                  };
                                  var oRequest = new Ajax.Updater({success: "comments_"+item.id}, "getComments.php", oOptions);
                                  item.update('<img src="../images/lose.gif" alt="Hide comments" /> Hide comments');
                              } else {
                                  item.update('<img src="../images/get.gif" alt="Show comments" /> Show comments');
                              }
                          });
                      });
                  });
        // ]]>
    </script>
</head>
<body>
	<?php

          require_once '../includes/mysql.php';
          $DB = new MySQL();


        $query = mysqli_query($mysqli, "SELECT * FROM hojasdemejora");
        print 'Hojas de no conformidad:';
        while ($row = mysqli_fetch_array($query)) {
            print "<div id=news_$row[id]>$row[numhoja]</div>";
           print '<span class="toggle" id="'.$row['id'].'">get comments for this article: '.$row['ai'].'</a></span>';
            print "<div id=comments_$row[id] class=comments></div>";
        }

?>
</body>
</html>