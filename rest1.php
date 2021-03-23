<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="WP" content="page 21">
	<style>
		.header11
		{
			background-image: linear-gradient(darkblue, aqua);
			color: #f1f1f1;
			position: fixed;
			top: 0px;
			left: 0px;
			width: 100%;
		}

		.xyz
		{
			width: 60%;
			display: inline-block;
			background-size: contain;
			background-repeat: no-repeat;
			float: left;
			top: 0;
			font-size: 30px; 
			color: #f97c0f;
			font-family: cursive;
			height: 150px;
		}

		input[type=button]
		{
			background-color:darkblue;
  			color: white;
  			padding: 10px 35px;
  			text-align: center;
  			text-decoration: none;
  			font-size:20px;
  			margin-left: 45%;
  			margin-top: 20px;
  			border-radius: 12px;
  			border: none;
  			cursor: pointer;
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
			text-align: center;
			font-weight: bold;
			margin-left: 400px;
			width: 50%;
			background-color: #93b6ce;
		}

		input[type=number]
		{
			text-align: center;
			font-weight: bold;
			width: 94%;
			background-color:#93b6ce;
			border: none;
		}

		.b1
		{
			color: white;
			background-color:darkblue;
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
</head>

<body>
	<header style="display: inline-block;" class="header11">
	    <img src="restaurant_logo.jpeg" id="img1" ﻿width="200" height="150" style="float: left;" >

    	<div class="xyz">
    		<h1>Contactless Food Ordering</h1>	
    	</div>

	</header>>
<?php

include "connect.php";
$conn = OpenCon();

if(isset($_POST["itemid"]))
{
	$chec=$_POST["itemid"];
	$sql2 = "UPDATE orders SET status=1 WHERE item_id=$chec";
	$conn->query($sql2);
}
?>

<div>
	<div style="background-color: ; margin-top: 200px;">
		<h3> Orders </h3>
		<div style="margin-top: 25px;">

			<TABLE ID="newtable2" BORDER=5 BORDERCOLOR=BLACK BGCOLOR=RED CELLSPACING=10>

				<TR>
				<TH style="width: 15%;">Item No</TH>
				<TH>Table No</TH>
				<TH>Order ID</TH>
				<TH>Dish Name</TH>
				<TH>Quantity</TH>
				</TR>

				<?php

					$sql1 = "SELECT * FROM orders WHERE status=0";
					$result = $conn->query($sql1);

					if ($result->num_rows> 0)
					{
						while($row = $result->fetch_assoc())
						{
							$resf1 = $row["item_id"];
							$resf2 = $row["table_no"];
							$resf3 = $row["order_id"];
							$resf4 = $row["dish_name"];
							$resf5 = $row["quantity"];

							?>

							<TR>
							<form action="http://localhost/rest1.php" method="post">
							<TD> <input type="number" name="itemid" value="<?php echo $resf1; ?>" readonly > </TD>
							<TD><?php echo $resf2; ?></TD>
							<TD><?php echo $resf3; ?></TD>
							<TD><?php echo $resf4; ?></TD>
							<TD><?php echo $resf5; ?></TD>
							<TD><input type="submit" class="b1" name="delivered" value="Deliver"></TD>
							</form>
							</TR>

							<?php
						}
					}
					?>
			</TABLE>
		</div>

		<input type="button" name="genbill" id="genbill" onclick="generatb()" value="Generate Bill">
	</div>
</div>

<script>
	function generatb()
	{
		window.open("http://localhost/tableno.php");
	}
</script>

</body>
</html>