<html>
<head>
<title>MultipleServerExpression</title>
</head>
<body>
<?php
$n=$_POST['t1'];
$l=$_POST['t2'];
?>
<table border=2>
<tr>
<td>Number</td>
<td>Digit</td>
<td>Multiple</td>
</tr>
<?php
for($i=1;$i<=$l;$i++)
{
	$m=$n*$i;
	?>
	<tr>
	<td><?php echo $n ?></td>
	<td><?php echo $i ?></td>
	<td><?php echo $m ?></td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>