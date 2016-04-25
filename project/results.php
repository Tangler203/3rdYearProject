<?php

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
<html lang="en">



<head>



	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>Gamezone</title>
   
    <link rel="stylesheet" type="text/css" href="layout.css">	
</head>




<body>


<div align = "center">
<div id="tables" font-size: 12px>
<?php
header("Access-Control-Allow-Origin: *");

$con = mysqli_connect('localhost','root','','storedb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$name = $_GET["name"];
$count = 0;




echo "<form action='http://localhost/project/checkout.php' method='get'>
	<table id='productlist' align-content: left >
	<tr>
	<th></th>
	<th><a onclick = 'addtocart()'>Name</a></th>
	<th>Price</th>
	<th>Category</th>
	</tr>";

	
	$sql="SELECT * FROM products where name like '%".$name."%' ";
	
	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td><input type='checkbox' name = 'Id".$row['Id']."' value = ".$row['Id']." id='id".$row['Id']."' /></td>";
		echo "<td onclick=namecheck(".$row['Id'].")>" . $row['Name'] . "</td>";
		echo "<td id = 'priceid".$row['Id']."'>€" . $row['Price'] . "</td>";
		echo "<td>" . $row['Category'] . "</td>";
			
		echo "</tr>";
		$name = $row['Name'];
	}
echo "</table>
	<input type='submit'>
	</form>";

mysqli_close($con);
?>

<button id = "select" onclick="selectAll()">Select All</button>


</div>
<div id="test"></div>
</div>


<script>
var cart = [];
var list = "";
var all = 0;
var totalprice = 0;

function namecheck(id){
	if( document.getElementById("id"+id).checked == false){
		document.getElementById("id"+id).checked = true;
	}
	else
		document.getElementById("id"+id).checked = false;
}

function selectAll(){
	if (all ==0){
		for(var y = 1; y<=20; y++){
			if (document.getElementById("id"+y)!=null){
				document.getElementById("id"+y).checked = true;
				all = 1;
				document.getElementById("select").innerHTML = "Deselect all"
			}
		} 
	}
	
	else{
		for(var y = 1; y<=20; y++){
			if (document.getElementById("id"+y)!=null){
				document.getElementById("id"+y).checked = false;
				all = 0;
				document.getElementById("select").innerHTML = "Select all"
			}
		} 
	}
}			
	</script>


</body>



</html>