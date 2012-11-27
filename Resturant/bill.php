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
			} echo $disquan;
			$_SESSION['disquan']=$disquan;			
			?></td>
		</tr>
		<tr>
				<td><label>ICECREAMS</label></td>
			<td><?php
			if(empty($ice))
			{
				echo("You didn't select any of icecreams");
				$_SESSION['ice']="NO ICECREAMS";
			} 
			else{
			echo $ice;
			$_SESSION['ice']=$ice;}
			?></td>
		</tr>
		<tr>
				<td><label>NUMBER OF ICECREAMS</label></td>
			<td><?php 
			
			//TODO:if no icecreams are selected then this quantity field is to disabled
			if(empty($icequan))
			{
				echo("You didn't select icream quantity");
				$_SESSION['icequan']="NO ICECREAMS";
			}
			else{
			echo $icequan;
			$_SESSION['icequan']=$icequan;
			}?></td>
		</tr>
	<tr>
		<td><label>TOOPINGS THAT U WANT</label></td>
	<td><?php if(empty($top))
			{
				echo("You didn't select any Toppings");
				$_SESSION['icequan']="NO TOPPINGS";
			}
			else{
			foreach ($top as $selected)
				echo $selected."\n";
			$_SESSION['icequan']=$selected;
			}
			?>
	</table>

	</body>
</html>
