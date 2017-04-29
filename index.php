<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application | Exam</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
	<!--<link rel="stylesheet" href="style.css" />-->
</head>
<body>
	<div class="header text-center"><img style="width: 100%;" src="../images/header.png" ></div>
	<div class="content">
	    <div class="container">
    	    <div class="row">
    	        <div class="col-sm-6">
            		  <h3><strong>For data scientists</strong></h3>
                </div>
                <div class="col-sm-6">
            		  <h3><strong>For IT professionals</strong></h3>
                </div>
                
                
                <div class="col-sm-6">
            		          
            		          
            		          <?php
                    $servername = "us-cdbr-iron-east-03.cleardb.net";
                    $username = "b74ba3320e82ec";
                    $password = "2d194843";
                    $dbname = "ad_bb6ddb2f34daf52";
                   
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * from servicios";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        
                        $contdor = 0;
                        // output data of each row
                        while($row = $result->fetch_assoc()) { $contador++; if ($contador < 4){
            	            ?>
                       
                        
                            
            		          <div class="row">
            		              <div class="col-sm-2"><img src="images/ima1.jpg"></img></div>
            		              <div class="col-sm-8" style="margin-top: 20px;">
            		                  <p><strong><?php echo $row['nombre_servicio']?></strong></p>
            		                  <p><?php echo $row['descripcion_servicio']?></p>
            		                  
            		              </div>
            		          </div>
            	      
                        
                       <?php }                   
                       }
                       $contador = 0;
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                   ?>
            		          
            		          
            		          
            	        </div>
            	
            	<div class="col-sm-6">
                
    	        <?php
                    $servername = "us-cdbr-iron-east-03.cleardb.net";
                    $username = "b74ba3320e82ec";
                    $password = "2d194843";
                    $dbname = "ad_bb6ddb2f34daf52";
                   
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * from servicios";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        
                        $contdor = 0;
                        // output data of each row
                        while($row = $result->fetch_assoc()) { $contador++; if ($contador > 3){
            	            ?>
                       
                        
                            
            		          <div class="row">
            		              <div class="col-sm-2"><img src="images/ima1.jpg"></img></div>
            		              <div class="col-sm-8" style="margin-top: 20px;">
            		                  <p><strong><?php echo $row['nombre_servicio']?></strong></p>
            		                  <p><?php echo $row['descripcion_servicio']?></p>
            		                  
            		              </div>
            		          </div>
            	      
                        
                       <?php }
                       }
                       $contador = 0;
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                   ?>
    	       </div>
    		</div>
        </div>
	</div>
	<div class="footer text-center"><img style="width: 100%;" src="../images/footer.png" ></div>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
