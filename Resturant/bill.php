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
	<table>
		<tr>
			<td><?php 
			if(empty($dishes))
			{
				echo("You didn't select any of dishes");
			}
			foreach ($dishes as $selectedOption)
				echo $selectedOption."\n";?>
			</td>
		</tr>
		<tr>
			<td><?php 
			if(empty($disquan))
			{
				echo("You didn't select any of dishes");
			} echo $disquan;?></td>
		</tr>
		<tr>
			<td><?php
			if(empty($ice))
			{
				echo("You didn't select any of icecreams");
			} 
			echo $ice;?></td>
		</tr>
		<tr>
			<td><?php 
			if(empty($icequan))
			{
				echo("You didn't select icream quantity");
			}
			echo $icequan;?></td>
		</tr>
	<tr><td><?php if(empty($top))
			{
				echo("You didn't select any of dishes");
			}
			foreach ($top as $selected)
				echo $selected."\n";?>
	</table>
</body>
</html>
