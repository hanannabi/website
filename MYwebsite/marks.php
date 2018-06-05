<html>
<head>
<title>MarksServerform</title>
</head>
<body>
<?php
$n=$_POST['t1'];
$m=$_POST['t2'];
$e=$_POST['t3'];
$s=$_POST['t4'];
$su=$m+$e+$s;
$a=$su/3;
?>
<body>
<table border=5>
<tr>
<td>Name</td>
<td>Total</td>
<td>Average</td>
</tr>
<tr>
<td><?php echo $n ?></td>
<td><?php echo $su ?></td>
<td><?php echo $a ?></td>
</tr>
</table>
</body>
</html>