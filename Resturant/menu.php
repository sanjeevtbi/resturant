
<?php
session_start();
$name=$_POST["custname"];
$mail=$_POST["mailid"];
$pass=$_POST["password"];
$_SESSION['cname']=$name;
$_SESSION['cmail']=$mail;
$_SESSION['cpass']=$pass;
?>
<html>
<head>
<title>WELCOME TO RESTURANT</title>
</head>
<body>
	<H2>
		<marquee>WELCOME!!!!!!!!!</marquee>
		<img src="header.jpg" alt="header" width="1400" height="100" />
	</H2>
	<h4>
		
		<?php 

		//TODO:select quantity for each items in the menu card
		//Select your required menu item to order
		//Multiple items are allowed to select
		
		echo "!!WELCOME ",$_SESSION['cname'];?>
	</h4>
	
	<form action="bill.php" method="post">
		<table cellpadding=5  cellspacing=5>
			<tr>
				<td><label>MENU CARD</label></td>
				<td><select multiple="multiple" name="dish[]">
						<option value="dosa">DOSA</option>
						<option value="puri">PURI</option>
						<option value="parrota">PARROTA</option>
						<option value="sand">SANDWITCH</option>
						<option value="idli">IDLI</option>
				</select></td>
			</tr>

			<!-- SELECT NO OF DISHES THAT WANT -->

			<tr>
				<td><label>QUANTITY</label></td>
				<td><select name="quan">
						<option value=""></option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
				</select></td>
			</tr>
			<tr>
				
			<!-- SELECT ICECREAM THAT WANT -->
			
				<td><label>ICECREAM</label></td>
				<td><input type=radio name="r1" value="VENNILA">VENNILA <input
					type=radio name="r1" value="STRAWBERRY">STRAWBERRY <input
					type=radio name="r1" value="BUTTERSCOTCH">BUTTERSCOTCH</td>
			</tr>
			<tr>
			
			<!-- SELECT NO OF ICECREAMS THAT  U WANT -->
				<td><label>QUANTITY</label></td>
				<td><select name="quan2">
						<option value=""></option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
				</select></td>
			</tr>
			<tr>
			
			<!-- SELECT ANY TOPPINGS THAT U WANT -->
			
				<td><label>TOPPINGS</label></td>
				<td><input type="checkbox" name="ch1[]" value="NUTS">NUTS <input
					type="checkbox" name="ch1[]" value="DRYFRUITS">DRYFRUITS</td>
			</tr>
			<tr>
				<td></td>
				<td><input type=submit value="ORDER"></td>
			</tr>

		</table>
	</form>

</body>
</html>
