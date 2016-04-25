

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
<html lang="en">



<head>



	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>Gamezone</title>
   
    <link rel="stylesheet" type="text/css" href="layout.css">	
</head>

	<body text-align: center>

	<?php
	
	$price = 0;
	$idlist = array();
	
	$con = mysqli_connect('localhost','root','','storedb');
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}
		 
	echo" <table id='productlist' align = center >
		<tr>
			<th><a onclick = 'addtocart()'>Name</a></th>
			<th> </th>
			<th>Price</th>
		</tr>";
	foreach ($_GET as $value){
		array_push($idlist,$value);
		$sql="SELECT * FROM products where Id = ".$value." ";
		$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($result)) {
			echo "
				<tr>
					<td>" . $row['Name'] . "</td>
					<td> - </td>
					<td>€" . $row['Price'] . "</td>
				</tr>";
			$price += $row['Price'];
		}
	}
	echo "</table>
		<p>Total Price of Items =  €<a id = 'pricetag'>".$price."</a></p>
		<a hidden id = idlist>".implode(" ",$_GET)."</a>";
	?>
	
	<button onclick = order();>Place Order</button>
	<div id = confirmtag>
	
	</div>
	<script>
	function order() {
		var payment = document.getElementById("pricetag").innerHTML;
		var idlist = document.getElementById("idlist").innerHTML;
		
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("confirmtag").innerHTML = xmlhttp.responseText;
            }
        };
			xmlhttp.open("GET","http://localhost/project/order.php?payment="+payment+"&idlist="+idlist,true);
			xmlhttp.send();
		}
	</script>
	</body>
	</html>