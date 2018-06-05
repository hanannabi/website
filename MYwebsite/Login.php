<html>
<head>
<title>Login</title>
</head>
<body bgcolor=black alink=white vlink=white text=white>
<?php
$e=$_POST['t1'];
$p=$_POST['t2'];
//echo $n." ".$r." ".$e." ".$p." ".$b." ".$s." ";
$con=mysql_connect("localhost","root","");
if(!$con)
{
	echo"not connected";
}
mysql_select_db("janvar",$con);
$qry="select E_mail,password from tom";
$arr=mysql_query($qry);
$bb=false;
while($row=mysql_fetch_array($arr))
{
	if($row['E_mail']==$e&&$row['password']==$p)
	{
		$bb=true;
	}
}
	if($bb==true)
	{
		header("location:search.html");
	}
	else
	{
		header("location:loginfail.html");
	}
?>

</body>
</html>