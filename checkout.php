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

		.total
		{
			font-size: 20px;
			margin-left: 700px;
		}

		.lpage
		{
			margin:200px 500px;
			font-size: 30px;
		}

		.grandtotl
		{
			margin-left:100px;
		}

		.buttons
		{
			margin-right:30px;
			background-color:darkblue;
  			color: white;
  			padding: 10px 35px;
  			text-align: center;
  			font-size:25px;
  			border: none;
			border-radius: 12px;
			cursor: pointer;
		}

		td
		{
			text-align: center;
			font-weight: bold;
		}

		input[type=button]
		{
			background-color:darkblue;
  			color: white;
  			padding: 10px 35px;
  			text-align: center;
  			text-decoration: none;
  			font-size:20px;
			border: none;
			border-radius: 12px;
			cursor: pointer;
		}

		table
		{
			margin-left: 400px;
			width: 50%;
			background-color: #93b6ce;
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

$ordid = $_POST["ordid"];

?>
	<div id="tb" style="margin-top: 200px; width: 100%;">
		<h3>Your Total Bill</h3>
		<div style="margin-top: 25px;">

			<TABLE ID="newtable3" BORDER=5 BORDERCOLOR=BLACK BGCOLOR=RED CELLPADDING=10 CELLSPACING=10>

				<TR>
				<TH>Sr.No</TH>
				<TH>Dish Name</TH>
				<TH>Quantity</TH>
				<TH>Price</TH>
				</TR>

				<?php

				$sno = 0;
				$tot = 0;

				$sql1 = "SELECT * FROM orders WHERE order_id=$ordid";
				$result = $conn->query($sql1);

				if ($result->num_rows> 0)
				{
					while($row = $result->fetch_assoc())
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
		<br>

		<?php
		echo "<h4 class='total'>Total Amount: $tot</h4>";
		?>

		<input type="button" name="back" value="Back" onclick="goBack()" style="margin-left: 35%;">
		<input type="button" name="pay" onclick="payment(<?php echo $tot; ?>)" value="Make Payment" style="margin-left: 15%;">
	</div>

	<script>
		function back()
		{
			window.history.back();
		}

		function payment(amt)
		{
			var page=document.getElementById("tb");
			page.setAttribute("class","lpage");
			page.innerHTML = "<h2>Choose your Payment option<br></h2><p class='grandtotl'>Grand Total:" + amt + "/- <br>including all service charges.</p>";

			var b1= document.createElement("button");
			b1.setAttribute("class","buttons");
	    	b1.innerHTML = "Go back";
	    	b1.onclick = function() {back()};

			var b2= document.createElement("button");
			b2.setAttribute("class","buttons");
	    	b2.innerHTML = "Pay Online";
	    
	    	var b3= document.createElement("button");
			b3.setAttribute("class","buttons");
	    	b3.innerHTML = "Cash";

	   		page.appendChild(b1);
	  		page.appendChild(b2);
	  		page.appendChild(b3);
		}
	</script>

</body>
</html>