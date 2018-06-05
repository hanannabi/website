<html>
<head>
<title>Display</title>
</head>
<body bgcolor=black alink=white vlink=white text=white>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("janvar",$con);
$qry="select * from tom";

$arr=mysql_query($qry);

?>
<table width=80% align=center>
<tr>
<td onmouseover="style.fontFamily='comic sans ms';" onmouseout="style.backgroundColor='black';style.fontFamily='monotype corsiva';"><font size=5 color=white><a href="home.html" style="text-decoration:'none';">Home</a></td>
<td onmouseover="style.fontFamily='comic sans ms';" onmouseout="style.backgroundColor='black';style.fontFamily='monotype corsiva';"><font size=5 color=white><a href="register.html" style="text-decoration:'none';">Register</a></td>
<td onmouseover="style.fontFamily='comic sans ms';" onmouseout="style.backgroundColor='black';style.fontFamily='monotype corsiva';"><font size=5 color=white><a href="login.html" style="text-decoration:'none';">Login</a></td>
<td onmouseover="style.fontFamily='comic sans ms';" onmouseout="style.backgroundColor='black';style.fontFamily='monotype corsiva';"><font size=5 color=white><a href="login.html" style="text-decoration:'none';">Search</a></td>
<td onmouseover="style.fontFamily='comic sans ms';" onmouseout="style.backgroundColor='black';style.fontFamily='monotype corsiva';"><font size=5 color=white><a href="search.html" style="text-decoration:'none';">Display</a></td>
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
<td>
<table border=2>
<tr>
<td>Name</td>
<td>Roll_No</td>
<td>E_mail</td>
<td>Branch</td>
<td>Semester</td>
</tr>

<?php
$bb=false;
	
while($row=mysql_fetch_array($arr))
{

	?>
	<tr>
	<td><?php echo $row['Name'] ?></td>
	<td><?php echo $row['Roll_No'] ?></td>
	<td><?php echo $row['E_mail'] ?></td>
	<td><?php echo $row['Branch'] ?></td>
	<td><?php echo $row['Semester'] ?></td>
	</tr>
	<?php	
}
?>
</table>
</td>
</tr>
</table>
</body>
</html>