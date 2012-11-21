
<?php
session_start();
$name=$_POST["custname"];
$mail=$_POST["mailid"];
$pass=$_POST["password"];
$_SESSION['cname']=$name;
$_SESSION['cmail']=$mail;
$_SESSION['cpass']=$pass;
echo $_SESSION['cname'];
?>
<html>
<head>
<title>WELCOME TO RESTURANT</title>
</head>
<body>
	<H2><marquee>WELCOME!!!!!!!!!</marquee><img src="header.jpg" alt="header" width="1000" height="100"/></H2>

	<form action="bill.php" method="post">
	<table>
	<tr><td><label>DISHES</label></td>
		<td> <select multiple="multiple" name="dish[]">
			<option value="dosa">DOSA</option>
			<option value="puri">PURI</option>
			<option value="parrota">PARROTA</option>
			<option value="sand">SANDWITCH</option>
			<option value="idli">IDLI</option>
		</select></td></tr>
		<tr><td> <label>QUANTITY</label></td> 
		<td><select name="quan">
			<option value=""></option>
			<option value="one">1</option>
			<option value="two">2</option>
			<option value="three">3</option>
			<option value="four">4</option>
			<option value="five">5</option>
		</select></td></tr>
		<tr><td> <label>ICECREAM</label></td>
		<td> <input type=radio name="r1"
			value="VENNILA">VENNILA 
			<input type=radio name="r1"
			value="STRAWBERRY">STRAWBERRY <input type=radio name="r1"
			value="BUTTERSCOTCH">BUTTERSCOTCH</td></tr>
			 <tr><td><label>QUANTITY</label></td> 
			 <td><select name="quan2">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select></td></tr>
		 <tr><td><label>TOPPINGS</label></td> 
		 <td><input type="checkbox"name="ch1[]" value="NUTS">NUTS 
			<input type="checkbox" name="ch1[]"value="DRYFRUITS">DRYFRUITS</td></tr>
			<tr><td></td><td> <input type=submit value="ORDER"></td></tr>
	
	</table>
	</form>

</body>
</html>
