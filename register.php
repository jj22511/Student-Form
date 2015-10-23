<?php
// FULLNAME
	$firstName = $_POST["firstname"];
	$middleName = $_POST["middlename"];
	$lastName = $_POST["lastname"];
//GENDER
	$genderM = $_POST["genderm"];
	$genderF = $_POST["genderf"];
//BIRTHDAY
	$month = $_POST["Month"];
	$day = $_POST["Day"];
	$year = $_POST["Year"];
//PROGRAM AND STUDENT TYPE	
	$program = $_POST["Program"];
	$studentTypeFull = $_POST["full"];
	$studentTypePartial = $_POST["partial"];
	$studentTypePayee = $_POST["payee"];
//ADDRESS
	$address = $_POST["address_area"];
?>

First Name: <strong><?php echo "firstName";?></strong><br/>
Midde Name: <strong><?php echo "middleName";?></strong><br/>
Last Name: <strong><?php echo "lastName";?></strong><br/>
Gender: <strong><?php echo "genderM"."genderF";?></strong><br/>
Birthday: <strong><?php echo "Month"."Day"."Year";?></strong><br/>
Program: <strong><?echo "Program";?></strong><br/>
Student Type: <strong><?php echo "studentTypeFull"."studentTypePartial"."studentTypePayee";?></strong><br/>
Address: <strong><?php echo "address";?></strong><br/>


