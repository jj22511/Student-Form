<?php


?>


<html>
<head>
<body>
<h2> Student Registration Form(Page 2 of 6)</h2>
<form method="GET" action="page3.php">
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
<td><input type="radio" name="genderm"/>Male</td>
<td><input type="radio" name="genderf"/>Female</td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="submit" value="Proceed to the next page"></td>
</tr>

</form>
</body>
</head>
</html>
