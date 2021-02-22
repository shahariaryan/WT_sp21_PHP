<?php
    $name="";
	$err_uname="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	$email="";
	$err_email="";
	$gender="";
	$err_gender="";
	$Hobbies="";
	$err_Hobbies="";
	$profession="";
	$err_profession="";
	$bio="";
	$err_bio="";

	 error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	 ini_set('log_errors', '0'); ini_set('error_log', './');
	 if(isset($_POST["submit"]))
	 {
		if(empty($_POST["name"]))
		 {
			 $err_name="[Name Required]";
		 }
		 else
		 {
			 $name=$_POST["name"];
		 }
		 
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
		 }
		 elseif(strpos($_POST["uname"],":"))
		 {
			 $err_uname="[Username should not contain space]";
		 }
		 else
		 {
			 $uname=$_POST["uname"];
		 }
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain white space]";
		 }
		 elseif(strlen($_POST["pass"])<8)
		 {
			 $err_uname="[Password must be at least 8 character long]";
		 }
		 elseif(strpos($_POST["pass"],"#"))
		 {
			 $err_pass="[1 special character needed]";
		 }
		 elseif(strpos($_POST["pass"],'?'))
		 {
			 $err_pass="[1 special character needed]";
		 }
		 elseif(ctype_upper($POST["pass"]))
		 {
			 $err_pass="[Should have 1 upper case latter]";
		 }
		 elseif(ctype_lower($POST["pass"]))
		 {
			 $err_pass="[Should have 1 lower case latter]";
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		 if(empty($_POST["email"]))
		 {
			 $err_email="[Email Required]";
		 }
		 elseif(strpos($_POST["email"],['@']))
		 {
			 $err_email="[1 special character needed]";
		 }
		 else
		 {
			 $email=$_POST["email"];
		 }
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Please select a gender]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 
		 if(!isset($_POST["Hobbies"]))
		 {
			 $err_Hobbies="[At least one option must be selected]";
		 }
		 
		 elseif(count($_POST["Hobbies"])<2)
		 {
			 $err_Hobbies="[At least 2 options need to be selected]";
		 }
		 else
		 {
			
			 $Hobbies=$_POST["Hobbies"];
		 }
		 if(!isset($_POST["profession"]))
		 {
			 $err_profession="[This field can not be skipped]";
		 }
		 else
		 {
			 $profession=$_POST["profession"];
		 }
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[Bio Required]";
		 }
		 else
		 {
			 $bio=$_POST["bio"];
		 
         }

	 }
?>

<html>
	<head></head>
	<body>
	<fieldset>
		<legend>User Registration</legend>
		<form action="" method="post">
			<table>
			<tr>
					<td><span><b>Name</b></span></td>
					<td>:<input type="text" name="name" value="<?php echo $name;?>">
					<span><?php echo $err_name;?></span></td>

				</tr>
				<tr>
					<td><span><b>Username</b></span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Password</b></span></td>
					<td>:<input type="password" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b></span></td>
					<td>:<input type="password" name="pass" value="<?php echo $cpass;?>">
					<span><?php echo $err_cpass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b></span></td>
					<td>:<input type="text" name="email" value="<?php echo $email;?>">
					<span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone</b></span></td>
					<td>:<input type="text" name="code" size="5" value="<?php echo $code;?>"> - <input type="text" name="number" size="10" value="<?php echo $number;?>">
					<span><?php echo $err_code;?></span><span><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><span><b>Address</b></span></td>
					<td>:<input type="text" name="Street Address"  value="<?php echo $sa;?>">
					<td>:<input type="text" name="city" size="6" value="<?php echo $city;?>"> - <input type="text" name="state" size="10" value="<?php echo $state;?>"></br>
					<input type="text" name="zip"  value="<?php echo $pcode;?>">
					<span><?php echo $err_code;?></span><span><?php echo $err_number;?></span></td>
				</tr>
				<tr>;
	 			