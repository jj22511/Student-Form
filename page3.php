<html>
<head>
<body>
<h2> Student Registration Form(Page 3 of 6)</h2>
<form method="GET" action="page4.php">
<table border="1">


<tr>
<td>First Name</td>
<td>Middle Name</td>
<td>Last Name</td>
</tr>

<tr>
<td><input type="text" name="firstname" value="<?php echo $_GET[firstname]?>"></td>
<td><input type="text" name="middlename" value="<?php echo $_GET[middlename]?>"></td>
<td><input type="text" name="lastname" value="<?php echo $_GET[lastname]?>"></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="genderm" value="<?php echo $_GET[genderm]?>" name="Gender"/>Male</td>
<td><input type="radio" name="genderf" value="<?php echo $_GET[genderf]?>" name="Gender"/>Female</td>
</tr>

<tr>
<td>Birthday</td>
</tr>

<tr>
<td>Month
<select name="Month"> 
	<option>
	</option><option>January
	</option><option>February
	</option><option>March
	</option><option>April
	</option><option>May
	</option><option>June
	</option><option>July
	</option><option>August
	</option><option>September
	</option><option>October
	</option><option>November
	</option><option>December
	</option>
</select>
</td>
<td>Day
	<select name="Day">
	<option>
	</option><option>1
	</option><option>2
	</option><option>3
	</option><option>4
	</option><option>5
	</option><option>6
	</option><option>7
	</option><option>8
	</option><option>9
	</option><option>10
	</option><option>11
`	</option><option>12
	</option><option>13
	</option><option>14
	</option><option>15
	</option><option>16
	</option><option>17
	</option><option>18
	</option><option>19
	</option><option>20
	</option><option>21
	</option><option>22
	</option><option>23
	</option><option>24
	</option><option>25
	</option><option>26
	</option><option>27
	</option><option>28
	</option><option>29
	</option><option>30
	</option><option>31
	</option></select>
</td>
<td>Year
<select name="Year">
	<option> 
	</option><option>2020
	</option><option>2019
	</option><option>2018
	</option><option>2017
	</option><option>2016
	</option><option>2015
	</option><option>2014
	</option><option>2013
	</option><option>2012
	</option><option>2011
	</option><option>2010
	</option><option>2009
	</option><option>2008
	</option><option>2007
	</option><option>2006
	</option><option>2005
	</option><option>2004
	</option><option>2003
	</option><option>2002
	</option><option>2001
	</option><option>2000
	</option><option>1999
	</option><option>1998
	</option><option>1997
	</option><option>1996
	</option><option>1995
	</option><option>1994
	</option><option>1993
	</option><option>1992
	</option><option>1991
	</option><option>1990
	</option><option>1989
	</option><option>1988
	</option><option>1987
	</option><option>1986
	</option><option>1985
	</option><option>1984
	</option><option>1983
	</option><option>1982
	</option><option>1981
	</option><option>1980
	</option>
</select>
</td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="submit" value="Proceed to the next page"></td>
</tr>

</table>
</form>
</body>
</head>
</html>
