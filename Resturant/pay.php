<html>
<body>
<table border=1>
<tr><th>ITEMS</th><th>QUANTITY</th><th>ICECREAMS</th><th>ICE QUANTITY</th><th>TOPPINGS</th></tr>
<tr>
<td><?php
session_start();
$bil= $_SESSION['dishes'];
foreach ($bil as $selectedOption)
	echo $selectedOption."\n";
?></td><td><?php echo $_SESSION['disquan'];?></td>
<td><?php echo $_SESSION['ice'];?></td>
<td><?php echo $_SESSION['icequan'];?></td>
<td><?php echo $_SESSION['top'];?></td>

</tr>

</table>
</body>
</html> 