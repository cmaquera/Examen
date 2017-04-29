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
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
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
                    $sql = "SELECT * from empleados";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {?>
                        <tr>
                        <td><?php echo $row['employee_id']?></td>
                        <td><?php echo $row['first_name']?></td>
                        <td><?php echo $row['last_name']?></td>
                        <td><?php echo $row['email']?></td>
                        </tr>
                       <?php }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                   ?>
                  </tbody>  
               </table>
	</div>
	<div class="footer center"><img src="../images/footer.png" ></div>	
<!--	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo "Hello World!"; ?></h1>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>.
			</td>
		</tr>
	</table> -->
</body>
</html>
