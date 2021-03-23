<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="WP" content="page 2">
	<style>
	
		body
		{
			background-image: url("wp_background.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}

		.header-img
		{
			  width: 30%;
			  height: 40%;
			  background-size: contain;
			  background-repeat: no-repeat;
		}

		.xyz
		{
			  width: 70%;
			  display: inline-block;
			  height: 40%;
			  background-size: contain;
			  background-repeat: no-repeat;
			  float: right;
			  font-size: 30px; 
			  color: #f97c0f;
			  font-family: cursive;
			  margin-left: 20px;
		}

		.abc
		{
			font-size:30px;
			color: #f97c0f;
			text-transform: uppercase;
			background-color: rgb(0,255,255,0.4);
  			padding: 30px 10px;
  			text-align: left;
  			vertical-align: middle;
  			width: 50%;
  			margin: auto;
  			border-radius: 25px;
		}

  		input[type=text]
  		{
  			width: 30%;
  			padding: 10px 20px;
  			border: 1px solid #ccc;
  			font-size: 25px;
  			height: 15px;
  		}

  		input[type=submit]
  		{
  			background: darkblue;
  			color: white;
  			margin-left:300px;
  			font-size: 30px;
  			margin-top: 20px;
  			padding: 14px 30px;
  			border-radius: 12px;
  			border: none;
  			cursor: pointer;
  		}

  		.inv
		{
			font-size: 40px;
			margin-left: 520px;
			color: white;
		}

		.buttn
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
	<header>
	    <div class="header-img"></div>
	    	<img src="restaurant_logo.jpeg" id="img1" width="200" height="200">
    	</div>
    	<div class="xyz">
    		<h1>Contactless Food Ordering</h1>	
    	</div>
    </header>

    <?php
	include "connect.php";
	$conn = OpenCon();

	$input = $_POST["code"];
	$sql6 = "SELECT * FROM tables WHERE code=$input";
	$result = $conn->query($sql6);

	if ($result->num_rows> 0)
	{
		while($row = $result->fetch_assoc())
		{
			$resf = $row["table_no"];
		}
	}

	if (isset($resf))
	{
		?>
		<div class="abc">
			<form action="http://localhost/menu.php" method="post">

				<p>Table number: <?php echo $resf; ?></p>
				<label for="Cname">Customer Name:</label>
				<input type="text" id="Cname" name="customer_name"><br><br>
     			<label for="Cnum">Contact number:</label>
     			<input type="text" id="Cnum" name="contact_number"><br>
     			<input type="hidden" name="t_no" value=" <?php echo $resf; ?>">
     			<input type="submit" name="submit" value="Select Order">

     		</form>
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
	function goBack()
	{
		window.history.back();
	}
</script>

</body>
</html>