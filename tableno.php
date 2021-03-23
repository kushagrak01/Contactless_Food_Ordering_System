<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="WP" content="tableno">
	<style>

		.header11
		{
			background-image: linear-gradient(darkblue, aqua);
			color: #f1f1f1;
			position: fixed;
			top: 0;
			width: 100%;
			left: 0;
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

		form
		{
			border: 1px solid #ccc;;
			border-radius: 4px;
			width: 30%;
			font-size: 35px;
			background-color: #93b6ce;
			margin-left:35%;
			text-align: center;
			margin-top: 300px;
			padding: 12px;
			box-sizing: border-box;
		}

		input[type=submit]
		{
			background-color:darkblue;
  			color: white;
			border-radius: 12px;
			border: none;
			padding: 10px 35px;
			text-align: center;
			font-size: 20px;
			margin-top: 20px;
			cursor: pointer;
		}

		input[type=text]
		{
			height: 30px;
			font-size: 20px;
		}

		h1
		{
			margin-left: 40px;
		}

		body
		{
			background-image: url("wp_background.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
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
	</header>
	
	<form action="http://localhost/rest2.php" method="post">

		<label for="Rcode">Enter Table number:</label><br>
	    <input type="text" id="tno" name="tno"><br>
	    <input type="submit" value="Generate Bill">
    
    </form>

</body>
</html>