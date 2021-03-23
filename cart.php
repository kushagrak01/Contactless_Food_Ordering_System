<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="WP" content="page 4">
	<style>
		.header11
		{
			background-image: linear-gradient(darkblue, aqua);

			color: #f1f1f1;
			position: fixed;
			top: 0px;
			width: 100%;
			left: 0px;
		}

		.xyz
		{
			width: 60%;
			display: inline-block;
			background-size: contain;
			background-repeat: no-repeat;
			float: left;
			top: 0px;
			font-size: 30px; 
			color: #f97c0f;
			font-family: cursive;
			height: 150px;
		}

		.emp
		{
			margin-top: 300px;
			margin-left: 600px;
			font-size: 40px;
		}

		.emp2
		{
			margin-left: 635px;
			background-color: darkblue;
  			padding: 10px 35px;
  			text-align: center;
  			font-size:25px;
  			border: none;
			border-radius: 12px;
			cursor: pointer;
			color: white;
		}

		.oplaced
		{
			margin-top: 180px;
			margin-left: 630px;
			font-size: 40px;
		}

		td
		{
			text-align: center;
			font-weight: bold;
		}

		h3
		{
			background-image: linear-gradient(darkblue, aqua);
			width: 100%;
			text-align: center;
			margin: auto;
			height: 40px;
			font-size: 30px;
			color: #f97c0f;
		}

		table
		{
			margin-left: 400px;
			width: 50%;
			background-color: #93b6ce;
		}

		.buttons
		{
			background-color:darkblue;
  			color: white;
  			padding: 10px 35px;
  			text-align: center;
  			font-size:20px;
  			border: none;
			border-radius: 12px;
			cursor: pointer;
		}
		h1
		{
			margin-left: 40px;
		}

		body
		{
			background-color: #dbf4ff;
		}

		#img1
		{
			border-radius: 25px;
			position: relative;
			animation-name: example1;
			animation-duration: 1.5s;
			animation-direction: normal;
		}

		@keyframes example1
		{
			0%{left:-50px; top:0px;}
			50%{left:200px; top:0px;}
			100%{left:0px; top:0px;}
		}

	</style>

	<script>
		function goBack()
		{
			window.history.back();
		}
	</script>

</head>

<body>
	<header style="display: inline-block;" class="header11">
	    <img src="restaurant_logo.jpeg" id="img1" ﻿width="200" height="150" style="float: left;" >
 
    	<div class="xyz">
    		<h1>Contactless Food Ordering</h1>	
    	</div>

	</header>


<?php

include "connect.php";
$conn = OpenCon();

$i=1;
$ch=1;
$orid = $_POST["oid"];
$tno = $_POST["tno"];

date_default_timezone_set("Asia/Kolkata");

$dt = date('Y-m-d H:i:s');

if (!isset($_POST["dishnm"."$i"]))
{
	echo "<h4 class='emp'>Cart is empty!</h4>";
	?>
	<input type="button" class="emp2" name="back2" value="Go back" onclick="goBack()">
	<?php
}
else
{
	while ($ch==1)
	{
		if (isset($_POST["dishnm"."$i"]))
		{
			$dishn = $_POST["dishnm"."$i"];
			$quant = $_POST["qty"."$i"];
			$dishp = $_POST["dprice"."$i"];
			$i++;

			$sql1 = "INSERT INTO orders (order_id, dish_name, quantity, price, table_no, status, entry_time) VALUES
			('$orid','$dishn','$quant','$dishp', '$tno', 0, '$dt');";

			$result = $conn->query($sql1);
		}
		else
		{
			$ch=0;
		}
	}
	echo "<h4 class='oplaced'>Order placed!!</h4>";
	?>

	<div>
		<h3>Your orders</h3>
		<form action="http://localhost/checkout.php" method="post">
		<div style="margin-top: 25px;">

			<TABLE  BORDER=5 BORDERCOLOR=BLACK  CELLPADDING=10 CELLSPACING=10>
				
				<TR>
				<TH>Sr.No</TH>
				<TH>Dish Name</TH>
				<TH>Quantity</TH>
				<TH>Price</TH>
				</TR>

				<?php

				$sno = 0;

				$sql2 = "SELECT * FROM orders WHERE order_id=$orid";
				$result2 = $conn->query($sql2);

				if ($result2->num_rows> 0)
				{
					while($row = $result2->fetch_assoc())
					{
						$resf1 = $row["dish_name"];
						$resf2 = $row["quantity"];
						$resf3 = $row["price"];

						$sno = $sno + 1;
						?>

						<TR>
						<TD><?php echo $sno; ?></TD>
						<TD><?php echo $resf1; ?></TD>
						<TD><?php echo $resf2; ?></TD>
						<TD><?php echo $resf3; ?></TD>
						</TR>

						<?php
					}
				}
				?>

			</TABLE>
		</div>
			<br>

			<input type="hidden" name="ordid" value= <?php echo $orid; ?> >

			<input type="button" name="back" value="Order More" class="buttons" onclick="goBack()" style="margin-left: 35%;">
			<input type="submit" name="checkout" class="buttons" value="Checkout" style="margin-left: 15%;">
		</form>
	</div>
	
	<?php
}
?>

</body>
</html>