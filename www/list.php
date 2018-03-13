
 <?php  
$conn = mysql_connect("localhost", "root", "goodyear123!@#");
if (!$conn)
{
	echo "Failed";
}
mysql_select_db("dwidder", $conn);
$q = "select * from posts";
$response = mysql_query($q, $conn);  
 ?>
 
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>List PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
       
                          <?php  
                          while($row = mysql_fetch_assoc($response))  
                          {  
				



                               echo ' 

				<div class="container">
    				<br><br>
    				   <div class="row">
        				<div class="col-md-4">
            				<div class="imgAbt">
               				   <img width="220" height="220" src=/Images'.$row["user"].'png/>
            				</div>
        				</div>
        				<div class="col-md-8">
            				<div class="content-heading"><h4> '.$row["user"].' </h4></div>
	    				<div class="content-heading"><h4> '.$row["comment"].'</h4></div>
	    				<div class="content-heading"><h4> '.$row["timestamp"].'</h4></div>
        				</div>
    				  </div>
				</div> 
            
                               ';  
                          }  
                          mysql_close($conn);
                          ?>  
                      
      </body>  
 </html>  
