<html>
<head>
<title>home</title>
</head>
<body bgcolor=black alink=white vlink=white text=white>
<?php
$n=$_POST['t1'];
$r=$_POST['t2'];
$e=$_POST['t3'];
$p=$_POST['t4'];
$b=$_POST['s1'];
$s=$_POST['s2'];
//echo $n." ".$r." ".$e." ".$p." ".$b." ".$s." ";
$con=mysql_connect("localhost","root","");
if($con)
{

	echo"not connected";	
}
mysql_select_db("janvar",$con);
$qry="insert into tom values('$n','$r','$e','$p','$b','$s')";
mysql_query($qry);
header("location:login.html");
?>

</body>
</html>