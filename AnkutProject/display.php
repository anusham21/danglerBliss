<?php 
include("detailsDbConnection.php");
$sql="SELECT * FROM details ";
$records = $conn->query($sql);

?>

<html>
<head> 
			<title> Data </title>
			<meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
			  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
			.image {
			    background: #ffffff url("qill1.jpeg") no-repeat right top height:10px width:10px;	
			    		  /* margin-left: 20px;
			    		    margin-top: 20px;
	-->		   */
			    
			}

			p.one {
				border-style: solid;
				border-width: 10px;
				margin-top:40px;
			}
			div.two {
				border-style: solid;
				border-width: 10px;
				margin-top:40px;
			}
</style>
</head>
<body>
<div class = "image col-sm-2" >
	Image
</div>
<p class = "one col-sm-2"> Registered Members </p>
<div class="container-fluid two">
<table class="table table-striped ">
<tr style="background: #7FFFD4;">
<th>UserName</th>
<th>ID</th>
<th>Gender</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Country</th>
<th>Phone</th>
</tr>

<?php

while($UserData= $records->fetch_assoc()) {
//Below names in side [] braces are the Column names in the DB.Table-> UserData.details.colmnname 
echo "<tr style='background:#ffffff'>". "<input type='checkbox' value =''>";
echo "<td>".$UserData['UserName']."</td>";
echo "<td>".$UserData['id']."</td>";
echo "<td>".$UserData['gender']."</td>";
echo "<td>".$UserData['address']."</td>";
echo "<td>".$UserData['city']."</td>";
echo "<td>".$UserData['state']."</td>";
echo "<td>".$UserData['country']."</td>";
echo "<td>".$UserData['phonenumber']."</td>";
echo "</tr>";

}

?>
</table>
</div>
</body>
</html>