<html>
<head>
<title>Result</title>
</head>
<body bgcolor=black alink=white vlink=white text=white>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("janvar",$con);

?>
<table border=2>
<tr>
<td>Roll_No</td>
<td>Maths</td>
<td>English</td>
<td>Science</td>
<td>Total</td>
<td>Average</td>
</tr>
<?php
$qry="select * from result";
$arr=mysql_query($qry);
while($row=mysql_fetch_array($arr))
{
$r=$row['Roll_no'];
$m=$row['Maths'];
$e=$row['English'];
$s=$row['Science'];
$t=$m+$e+$s;
$a=$t/3;
	?>
	<tr>
	<td><?php echo $r?></td>
	<td><?php echo $m?></td>
	<td><?php echo $e?></td>
	<td><?php echo $s?></td>
	<td><?php echo $t?></td>
	<td><?php echo $a?></td>
	</tr>
	<?php	
}
?>
</table>
</body>
</html>