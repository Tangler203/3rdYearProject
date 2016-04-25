<html>
	<head>
	<title>Query string</title>
	</head>
	<body>

	<?php
	header("Access-Control-Allow-Origin: *");
	
	$con = mysqli_connect('localhost','root','','storedb');
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}
	
	$sql="INSERT INTO orders (productlist, price) VALUES ('".$_GET["idlist"]."', ".$_GET["payment"].");";
	
	$result = mysqli_query($con,$sql);
		
	if(! $result )
	{
		die('Could not enter data: ' . mysql_error());
	}
	echo "<h1>Payment Confirmed</h1>";

	?>

	</body>
</html>