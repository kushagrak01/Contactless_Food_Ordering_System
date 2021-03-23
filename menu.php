<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="WP" content="page 3">
	<style> 
		h1
		{
			margin-left: 40px;
		}
		.header11
		{
		  background-image: linear-gradient(darkblue, aqua);
		  color: #f97c0f;
		  position: fixed;
		  top: 0;
		  width: 100%;
		  left: 0px;
		}
		.header
		{
			margin-top: 50px;
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
			  font-family: cursive;
			  height: 150px;


		}
		.xxx
		{
			  width: 20%;
			  padding-right: 15px;
			  display: inline-block;
			  background-size: contain;
			  background-repeat: no-repeat;
			  font-size: 30px; 
			  color: #f97c0f;
			  font-family: cursive;
			  margin-top: 0px;


		}
		h4
		{

			display: inline-block;
			font-size: 20px;
			margin-left: 40px;
			margin-bottom: 30px;
			height: 20px;
			top: 0;
	
		}
		.pr
		{

			display: inline-block;
			font-size: 20px;
			margin-left: 8px;
			margin-bottom: 30px;
			height: 20px;
			padding-left: 0px;
	
		}
		.transfm
		{
			width:100px;
			height: 100px;
			float: left;
			border-radius: 10px;
			transition: width 1s, transform 1s;
		}
		.transfm:hover
		{
			width: 200px;
			height: 200px;

			transform: translate(100px,25px);
			
		}
		.cn
		{
			height: 25px;
			font-size: 20px;
			background-color: #93b6ce;
			text-align: center;
			font-weight: bold;
			border: none;
		}
		.cp
		{
			width: 94%;
			height: 25px;
			font-size: 25px;
			background-color: #93b6ce;
			text-align: center;
			font-weight: bold;
			border:none;
		}
		.cq
		{
			width: 94%;
			height: 25px;
			font-size: 25px;
			background-color: #93b6ce;
			text-align: center;
			font-weight: bold;
			border: none;

		}
		.srnc
		{
			font-size: 25px;
			font-weight: bold;
			text-align: center;
		}

		.sticky 
		{
  			position: fixed;
  			top: 0;
  			width: 100%;
  			margin-left: 960px;
  			margin-top: 170px;
		}

		th
		{
			font-size: 25px;
		}
		.ss1
		{
			width: 40px;
		}
		.ss2
		{
			width: 240px;
		}
		.ss3
		{
			width: 80px;
		}
		.ss4
		{
			width: 150px;
		}

		.chk
		{
			margin-left: 210px;
			margin-top: 20px;
  			padding: 10px 35px;
  			text-align: center;
  			font-size:20px;
  			background-color: darkblue;
  			color: white;
  			border-radius: 12px;
  			border: none;
  			cursor: pointer;
  			margin-bottom: 20px;
		}

		input[type=submit]
		{
			background-color:darkblue;
  			color: white;
  			padding: 10px 35px;
  			text-align: center;
  			text-decoration: none;
  			font-size:20px;
  			margin-left: 200px;
  			border-radius: 12px;
  			border: none;
  			cursor: pointer;
		}

		input[type=button]
		{
			font-size:20px;
			float: right;
			margin-top: 60px;
			background-color: darkblue;
			color: white;
  			border-radius: 12px;
  			border: none;
  			cursor: pointer;
  			padding: 8px 8px;
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

<?php

include "connect.php";
$conn = OpenCon();

$nam = $_POST["customer_name"];
$num = $_POST["contact_number"];
$tbno = $_POST["t_no"];

$sql7 = "INSERT INTO customer (cust_name, phone, table_no) VALUES
('$nam','$num', '$tbno');";

$result = $conn->query($sql7);

$sql10 = "SELECT LAST_INSERT_ID()";

$result4 = $conn->query($sql10);
		
		if ($result4->num_rows> 0)
		{
			while($row = $result4->fetch_assoc())
			{
				$resf4 = $row["LAST_INSERT_ID()"];
			}
		}
?>

<body style="background-color: #dbf4ff;">
	<header style="display: inline-block; margin-left: 0px; float: left;" class="header11">
	    <img src="restaurant_logo.jpeg" id="img1" ﻿width="200" height="150" style="float: left;" >
    	<div class="xxx">
  			<h5 style="margin-top: 0px;margin-left: 40px;float: right;"><br>Table number: <?php echo $tbno; ?><br>Customer Name:<?php echo $nam; ?></h5>
  		</div>
    	<div class="xyz">
    		<h1>Contactless Food Ordering</h1>	
    	</div>

	</header>
	
	
		<div class="header" id="myHeader" style="border-style: solid;border-color: darkblue; background-color: #93b6ce; width: 38%; float: right; display: inline;">
			<form action="http://localhost/cart.php" method="post">
			<h3 style="background-image: linear-gradient(darkblue, aqua);color: #f97c0f;width: 100%;text-align: center;margin: auto;height: 40px;font-size: 30px;">Cart</h3>
					
			
			<TABLE ID="newtable"  BORDER=1 BORDERCOLOR=BLACK   CELLSPACING=10 style="width:100%; border: none;">
			
			
			<TR>
			<TH class="ss1">Sr.No</TH>
			<TH class="ss2">Dish Name</TH>
			<TH class="ss3">Quantity</TH>
			<TH class="ss4">Price</TH>
			</TR>

			</TABLE>
			<br>

			<input type="hidden" name="oid" value= <?php echo $resf4; ?> >
			<input type="hidden" name="tno" value= <?php echo $tbno; ?> >
			<input type="submit" name="submit" value="Place Order">
			</form>

			<form action="http://localhost/checkout.php" method="post">
				<input type="hidden" name="ordid" value="<?php echo $resf4; ?>">
				<input type="submit" class="chk" name="chkout" value="Checkout">
			</form>


		</div>
		<div style="background-color: yellow; margin-top: 150px; ">
		<?php

		$countid =0;
		$countid2=1000;
		$countid3=2000;

		$sql8 = "SELECT DISTINCT cat_name FROM category";
		$result2 = $conn->query($sql8);

		if ($result2->num_rows> 0)
		{
			while($row2 = $result2->fetch_assoc())
			{
				$resf = $row2["cat_name"];
				?>

				<div style="margin-top: 50px; width: 60%; float: left; ">

					<h3 style="background-image: linear-gradient(darkblue, aqua);color:#f97c0f ;width: 100%;text-align: center;margin: auto;height: 40px;font-size: 30px;"><?php echo $resf; ?></h3>
					
					<?php

					$sql9 = "SELECT * FROM category WHERE cat_name='$resf'";
					$result3 = $conn->query($sql9);

					if ($result3->num_rows> 0)
					{
						while($row3 = $result3->fetch_assoc())
						{
							$resf2 = $row3["dish_name"];
							$resf3 = $row3["dish_price"];
							$resf10 = $row3["im"];
							$countid = $countid+1;
							$countid2 = $countid2+1;
							$countid3 = $countid3+1;
							?>

							<div style="margin-top: 5px; background-color: #93b6ce ;height:100px;">
								
								<form>
									<div>
									
									<img class="transfm" src="<?php echo $resf10; ?>">
									
									</div>
									<div class="aaa">
									<div style="display: inline-block; width: 250px;">
									<h4 style="top: 0px;font-size: 35px;font-family:  Trattatello, fantas; color: darkblue;" id="<?php echo $countid2; ?>"> <?php echo $resf2; ?><br></h4>
									</div>
									<div style="display: inline-block;">
									<h5 class="pr"> Price: </h5> 
									<h5 class="pr" id="<?php echo $countid3; ?>"> <?php echo $resf3; ?> </h5>
									</div>
									<div style="display: inline-block; margin-left: 40px;">
									<h4> Quantity <br></h4>
									<input  type="number" min="1" max="25" id="<?php echo $countid; ?>" name="quantity" value="1">
									</div>

									<input style="" type="button" onclick="myFunction(<?php echo $countid; ?>,<?php echo $countid2; ?>,<?php echo $countid3; ?>)" name="add" value="Add to Cart">

									</div>	
								</form>

							</div>

						<?php
						}
					}

					?>

				</div>
			<?php
			}
		}
		?>
		
		</div>

	
	<script>

		window.onscroll = function() {myFunction2()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction2() {
  			if (window.pageYOffset > sticky) {
    		header.classList.add("sticky");
  			} else {
    		header.classList.remove("sticky");
  					}
			}




		var srn=1;
		var itt=1;
		var arr=new Array();

		

		function myFunction(s1,s2,s3)
		{
			var quan=document.getElementById(s1).value;
			var dname=document.getElementById(s2).textContent;
			var dprice=document.getElementById(s3).textContent;
			var fprice=parseInt(dprice)*quan;
			if(arr.includes(dname))
			{
				p=arr.indexOf(dname);
				console.log("index");
				console.log(p);
				p2=p+1;
				p3="qtyi"+p2;
				p4="dpricei"+p2;
				console.log("find index");
				console.log(p3);
				ele=document.getElementById(p3).value;
				console.log(ele);
				quan=parseInt(quan)+parseInt(ele);
				fprice=parseInt(dprice)*quan;
				document.getElementById(p3).value=quan;
				document.getElementById(p4).value=fprice;




			}
			else
			{
				arr.push(dname);
				console.log(arr);

				var table = document.getElementById("newtable");
	  			var row = table.insertRow(-1);
	  			var cell1 = row.insertCell(0);
	  			cell1.setAttribute("class","srnc");
	  			var cell2 = row.insertCell(1);
	  			cell2.setAttribute("class","n1");
	  			var cell3 = row.insertCell(2);
	  			cell3.setAttribute("class","q1");
	  			var cell4 = row.insertCell(3);
	  			cell4.setAttribute("class","p1");

	            var t1= document.createElement("input");
	            t1.setAttribute("input","number");
	            t1.setAttribute("name","qty"+itt);
	            t1.setAttribute("id","qtyi"+itt);
	            t1.setAttribute("class","cq");
	            console.log("id is");
	            console.log("qtyi"+itt);
	            t1.setAttribute("value",quan);

	            // t1.readOnly = true;

	  			var t2= document.createElement("input");
	            t2.setAttribute("input","text");
	            t2.setAttribute("name","dishnm"+itt);
	            t2.setAttribute("value",dname);
	            t2.setAttribute("class","cn");
	            t2.readOnly = true;

	            var t3= document.createElement("input");
	            t3.setAttribute("input","number");
	            t3.setAttribute("name","dprice"+itt);
	            t3.setAttribute("id","dpricei"+itt);
	            t3.setAttribute("value",fprice);
	            t3.setAttribute("class","cp");
	            t3.readOnly = true;

	  			cell1.innerHTML = srn;
	  			cell2.appendChild(t2);
	  			cell3.appendChild(t1);
	  			cell4.appendChild(t3);

	  			srn = srn + 1;
	  			itt = itt + 1;
			}
		}

	</script>

</body>
</html>