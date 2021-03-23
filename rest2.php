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

		td
		{
			text-align: center;
			font-weight: bold;
		}

		.total
		{
			font-size: 20px;
			margin-left: 690px;
		}

		input[type=button]
		{
			background-color:darkblue;
  			color: white;
  			padding: 10px 35px;
  			text-align: center;
  			font-size:20px;
  			margin-left: 44%;
  			border: none;
  			border-radius: 12px;
			cursor: pointer;
		}

		h3
		{
			background-image: linear-gradient(darkblue, aqua);
			color: #f97c0f;
			width: 100%;
			text-align: center;
			margin: auto;
			height: 40px;
			font-size: 30px;
		}

		table
		{
			margin-left:400px;
			width: 50%;
			background-color: #93b6ce;
		}

		.inv
		{
			font-size: 40px;
			margin-left: 550px;
			color: black;
			margin-top: 300px;
		}

		.buttn
		{
			margin-left: 635px;
			background-color: aqua;
  			padding: 10px 35px;
  			text-align: center;
  			font-size:25px;
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
</head>

<body>
	<header style="display: inline-block;" class="header11">
	    <img src="restaurant_logo.jpeg" id="img1"  ﻿width="200" height="150" style="float: left;" >

    	<div class="xyz">
    		<h1>Contactless Food Ordering</h1>	
    	</div>

	</header>
<?php

include "connect.php";
$conn = OpenCon();

$tno=$_POST["tno"];

$sql1 = "SELECT MAX(order_id) FROM orders WHERE table_no=$tno";
$result = $conn->query($sql1);

if ($result->num_rows> 0)
{
	while($row = $result->fetch_assoc())
	{
		$resf = $row["MAX(order_id)"];
	}
}

if (isset($resf))
{
	?>
	<div>
		<div style="margin-top: 200px;">
			<h3> Final Bill </h3>
			<div style="  margin-top: 25px; ">
				<TABLE BORDER=5 BORDERCOLOR=BLACK BGCOLOR=RED CELLPADDING=10 CELLSPACING=10>
					<TR>
					<TH>Sr.No</TH>
					<TH>Dish Name</TH>
					<TH>Quantity</TH>
					<TH>Price</TH>
					</TR>

					<?php

					$sno = 0;
					$tot = 0;

					$sql2 = "SELECT * FROM orders WHERE order_id=$resf";
					$result2 = $conn->query($sql2);

					if ($result2->num_rows> 0)
					{
						while($row = $result2->fetch_assoc())
						{
							$resf1 = $row["dish_name"];
							$resf2 = $row["quantity"];
							$resf3 = $row["price"];

							$sno = $sno + 1;
							$tot = $tot + $resf3;
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

			<?php
			echo "<h4 class='total'>Total Amount: $tot</h4>";
			?>

			<input type="button" name="genbill" id="genbill" onclick="porder()" value="Pending orders">

		</div>
	</div>

	<?php
}
else
{
	echo "<h4 class='inv'>Invalid Table Number!!</h4>";
	?>
	<input type="button" class="buttn" name="back" value="Go back" onclick="goBack()">
	<?php
}
?>

<script>
	function porder()
	{
		window.open("rest1.php");
	}

	function goBack()
	{
		window.history.back();
	}
</script>

</body>
</html>