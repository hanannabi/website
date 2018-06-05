<html>
<head>
<title>search</title>
</head>
<body bgcolor=black alink=white vlink=white text=white>
<?php
$r=$_POST['t1'];
$con=mysql_connect("localhost","root","");
mysql_select_db("janvar",$con);
$qry="select * from tom where rollno='$r'";

$arr=mysql_query($qry);

?>
<table width=80% align=center>
<tr>
<td onmouseover="style.fontFamily='comic sans ms';" onmouseout="style.backgroundColor='black';style.fontFamily='monotype corsiva';"><font size=5 color=white><a href="home.html" style="text-decoration:'none';">Home</a></td>
<td onmouseover="style.fontFamily='comic sans ms';" onmouseout="style.backgroundColor='black';style.fontFamily='monotype corsiva';"><font size=5 color=white><a href="register.html" style="text-decoration:'none';">Register</a></td>
<td onmouseover="style.fontFamily='comic sans ms';" onmouseout="style.backgroundColor='black';style.fontFamily='monotype corsiva';"><font size=5 color=white><a href="login.html" style="text-decoration:'none';">Login</a></td>
<td onmouseover="style.fontFamily='comic sans ms';" onmouseout="style.backgroundColor='black';style.fontFamily='monotype corsiva';"><font size=5 color=white><a href="login.html" style="text-decoration:'none';">Search</a></td>
<td onmouseover="style.fontFamily='comic sans ms';" onmouseout="style.backgroundColor='black';style.fontFamily='monotype corsiva';"><font size=5 color=white><a href="login.html" style="text-decoration:'none';">Display</a></td>
</tr>
</table>
<hr size=5 color=white>
<table align=center border=0>
<tr>
<td><img src="images/2.jpg" width=300 height=300 style="filter:alpha(style=2,opacity=60%)"></td>
<td width=50%><marquee direction=up onmouseover="this.stop()" onmouseout="this.start()"><font face="comic sans ms" size=2>&hearts;Model Institute Of Engg & Tech<br><br>
&hearts;Pioneer in technical education<br><br>
&hearts;Governed by a team of professionals<br><br>
&hearts;Most cost effective</font></marquee></td>
<td valign=top>

<?php
$bb=false;
if($row=mysql_fetch_array($arr))
{
	
	?>
	<table border=2>
<tr>
<td>Name</td>
<td>Roll_No</td>
<td>E_mail</td>
<td>branch</td>
<td>semester</td>
</tr>
	<tr>
	<td><?php echo $row['name'] ?></td>
	<td><?php echo $row['rollno'] ?></td>
	<td><?php echo $row['E_mail'] ?></td>
	<td><?php echo $row['branch'] ?></td>
	<td><?php echo $row['semester'] ?></td>
	</tr>
	<?php
	
	
}
else
{
echo "<font size=2 color=red>*the roll_no ".$r." doesnot exist <a href='search.html'>Back</a></font>";
}
?>
</table>
</td>
</tr>
</table>
</body>
</html>