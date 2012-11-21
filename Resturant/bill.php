<?php
session_start();
$dishes=$_POST['dish'];
//foreach ($dishes as $selectedOption)
	//echo $selectedOption."\n";
$disquan=$_POST['quan'];
$ice=$_POST['r1'];
$icequan=$_POST['quan2'];
$top=$_POST['ch1']

?>
<html>
<body>
	<h1>
		BILL FOR
		<?php echo $_SESSION['cname']; ?>
	</h1>
	<center>
	<table  cellpadding=5  cellspacing=5>
		<tr>
			<td><label> ORDERED DISHES</label></td>
			<td><?php 
			if(empty($dishes))
			{
				echo("You didn't select any of dishes");
			}
			foreach ($dishes as $selectedOption)
				echo $selectedOption."\n";
			$_SESSION['dishes']=$selectedOption;
			?>
			</td>
		</tr>
		<tr>
			<td><label>NUMBER OF DISHES</label></td>
			<td><?php 
			if(empty($disquan))
			{
				echo("You didn't select any of dishes");
			} echo $disquan;?></td>
		</tr>
		<tr>
				<td><label>ICECREAMS</label></td>
			<td><?php
			if(empty($ice))
			{
				echo("You didn't select any of icecreams");
			} 
			echo $ice;?></td>
		</tr>
		<tr>
				<td><label>NUMBER OF ICECREAMS</label></td>
			<td><?php 
			if(empty($icequan))
			{
				echo("You didn't select icream quantity");
			}
			echo $icequan;?></td>
		</tr>
	<tr>
		<td><label>TOOPINGS THAT U WANT</label></td>
	<td><?php if(empty($top))
			{
				echo("You didn't select any Toppings");
			}
			foreach ($top as $selected)
				echo $selected."\n";
			
			?>
	</table>
</center>
	</body>
</html>
