<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="header center"><img src="../images/header.png" ></div>
	<div class="content center"><img src="../images/content.png" >
		<table class="table">
                
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
                        // output data of each row
                        while($row = $result->fetch_assoc()) {?>
                        <tr>
	                        <td><?php echo $row['codigo_servicio']?></td>
	                        <td>
	                        	<tr><?php echo $row['nombre_servicio']?></tr>
								<tr><?php echo $row['descripcion_servicio']?></tr>
	                        </td>
                        </tr>
                       <?php }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                   ?>

               </table>
	</div>
	<div class="footer center"><img src="../images/footer.png" ></div>	
</body>
</html>
