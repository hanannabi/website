<html>
<head>
<title>tourist</title>
</head>
<body>
<?php
$n=$_POST['s1'];
if($n=="Choose Destination")
{
	echo "Choose ur Destination first";
}
if($n=="gulmarg")
{
	header("location:gulmarg.html");
}
if($n=="pahalgam")
{
	header("location:pahalgam.html");
}
if($n=="patnitop")
{
	header("location:patnitop.html");
}
?>
</body>
</html>