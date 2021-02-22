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
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$stad="";
	$err_stad="";
	$city="";
	$err_city="";
	$state="";
	$err_state="";
	$pcode="";
	$err_pcode="";
	$day="";
	$err_day="";
	$mon="";
	$err_month="";
	$year="";
	$err_year="";
	$que="";
	$err_que="";
	$gender="";
	$err_gender="";
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
		 $name=htmlspecialchars($_POST["name"]);
		 }
		 
		 
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain spaces]";
		 }
		 else
		 {
			 $uname=htmlspecialchars($_POST["uname"]);
		 }
		 
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		 elseif (strlen($_POST["pass"])<8) 
		 {
		 	$err_pass=["[Password must be 8 charachters long"];
		 }
		 elseif(!strpos($_POST["pass"],"#"))
		 {
			 $err_pass="[Password should contain special character]";
		 }
		 elseif(!!strpos($_POST["pass"],"[0-9]"))
		 {
			 $err_pass="[Password should contain Numeric values]";
		 }
		 elseif(!!ctype_lower($_POST["pass"]))
		 {
			 $err_pass="[Password should contain LowerCase values]";
		 }

		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain spaces]";
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 
		 }
		 if(empty($_POST["cpass"]))
		 {
			 $err_cpass="[Conformation Password Required]";
		 }
		 elseif (strlen($_POST["cpass"])<8) 
		 {
		 	$err_cpass=["[Password must be 8 charachters long"];
		 }
		 elseif(!strpos($_POST["cpass"],"#"))
		 {
			 $err_cpass="[Password should contain special character]";
		 }
		 elseif(!!strpos($_POST["cpass"],"[0-9]"))
		 {
			 $err_cpass="[Password should contain Numeric values]";
		 }
		 elseif(!ctype_upper($_POST["cpass"]))
		 {
			 $err_cpass="[Password should contain UpperCase values]";
		 }
		 elseif(!ctype_lower($_POST["cpass"]))
		 {
			 $err_cpass="[Password should contain LowerCase values]";
		 }

		 elseif(strpos($_POST["cpass"]," "))
		 {
			 $err_cpass="[Password should not contain spaces]";
		 }
		 else
		 {
			 $cpass=$_POST["cpass"];
		 
		 }
		 
		 if(empty($_POST["email"]))
		 {
			 $err_email="[Email Required]";
		 }
	     elseif(!strpos($_POST["email"],'@'))
		 {
			 $err_email="[@ needed]";
		 }
		elseif(!strpos($_POST["email"],'.'))
		 {
			 $err_email="[dot(.) required]";
		 }
		 else
		 {
			 $email=htmlspecialchars($_POST["email"]);
		 }
		 
		 if(empty($_POST["code"]))
		 {
			 $err_code="[Code Required]";
		 }
		 elseif(!is_numeric($_POST["code"]))
		 {
			 $err_code="[Numaric Value required]";
		 }
		else
		 {
			 $code=$_POST["code"];
		 }
		 if(empty($_POST["number"]))
		 {
			 $err_number="[number Required]";
		 }
		 elseif(!is_numeric($_POST["number"]))
		 {
			 $err_number="[Numaric Value required]";
		 }
		else
		 {
			 $number=$_POST["number"];
		 }
		 if(empty($_POST["stad"]))
		 {
			 $err_stad="[Street Name Required]";
		 }
		 else
		 {
			 $stad=htmlspecialchars($_POST["stad"]);
		 }
	    if(empty($_POST["city"]))
		 {
			 $err_city="[City Name Required]";
		 }
		 else
		 {
			 $city=htmlspecialchars($_POST["city"]);
		 }
		 if(empty($_POST["state"]))
		 {
			 $err_state="[State Name Required]";
		 }
		 else
		 {
			 $state=htmlspecialchars($_POST["state"]);
		 }
		 if(empty($_POST["pcode"]))
		 {
			 $err_pcode="[Post Code Required]";
		 }
		elseif(!is_numeric($_POST["pcode"]))
		 {
			 $err_pcode="[Numaric Value required]";
		 }	 
		 else
		 {
			 $pcode=$_POST["pcode"];
		 }
		 
		  if(!isset($_POST["day"]))
		 {
			 $err_day="BIRTHDATE need to be selected";
		 }
		 else
		 {
			 $day=$_POST["day"];
		 }
		 
		 if(!isset($_POST["mon"]))
		 {
			 $err_month=" ";
		 }
		 else
		 {
			 $month=$_POST["mon"];
		 }
		 
		 if(!isset($_POST["year"]))
		 {
			 $err_year=" ";
		 }
		 else
		 {
			 $year=$_POST["year"];
		 }
		 
		 if(!isset($_POST["que"]))
		 {
			 $err_que="[At least one option must be selected]";
		 }
		 
		 elseif(count($_POST["que"])<2)
		 {
			 $err_que="[At least 2 options need to be selected]";
		 }
		 else
		 {
			
			 $que=$_POST["que"];
		 }
		 
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Please select a gender]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[Bio Required]";
		 }
		 else
		 {
			 $bio=htmlspecialchars($_POST["bio"]);
		 
         }
		 
		 }
	 
?>

<html>
	<head></head>
	<body>
	<fieldset>
		<legend>Club Member Registraion</legend>
		<form action="" method="post">
			<table>
			<tr>
					<td><span><b>Name</b></span></td>
					<td>:<input type="text" name="name" placeholder = "Name" value="<?php echo $name;?>">
					<span><?php echo $err_name;?></span></td>

				</tr>
				<tr>
					<td><span><b>Username</b></span></td>
					<td>:<input type="text" name="uname" placeholder = "Username" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Password</b></span></td>
					<td>:<input type="password" name="pass" placeholder = "Password" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b></span></td>
					<td>:<input type="password" name="pass" placeholder = "Confirm Password" value="<?php echo $cpass;?>">
					<span><?php echo $err_cpass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b></span></td>
					<td>:<input type="text" name="email" placeholder = "Email" value="<?php echo $email;?>">
					<span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone</b></span></td>
					<td>:<input type="text" name="code" size="5" placeholder = "Code" value="<?php echo $code;?>">-<input type="text" name="number" placeholder = "Number" size="10" value="<?php echo $number;?>">
					<span><?php echo $err_code;?></span><span><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><span><b>Address</b></span></td>
					<td><input type="text" name="stad" placeholder = "Street Address" value="<?php echo $stad;?>"placeholder="Street Address">
					<span><?php echo $err_stad;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" name="city" placeholder = "City" value="<?php echo $city;?>" placeholder = "City" size="6">-<input type="text" name="state" placeholder = "State" size="8" value="<?php echo $state;?>">
					<span><?php echo $err_city;?></span><span><?php echo $err_state;?></span></td>
				</tr>
				<tr>
					<td><td>
					<input type="text" name="pcode" value="<?php echo $pcode;?>" placeholder = "Postal/Zip Code">
					<span><?php echo $err_pcode;?></span></td>
					</tr>
					
			 <tr>
				<td><span><b>Birth Date</b></span></td>
	
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($day=1;$day<=31;$day++)
						{
							echo "<option>$day</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($month=0;$month<count($mon);$month++)
						{
							echo "<option>$mon[$month]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($year=1970;$year<=2030;$year++)
						{
							echo "<option>$year</option>";
						}
					?>
				</select>
				<span><?php echo $err_day;?></span></td>
				<span><?php echo $err_month;?></span></td>
				<span><?php echo $err_year;?></span></td>
			</tr>
				<tr>
					<td><span><b>Gender</b></span></td>
					<td>:<input type="radio"  value="<?php echo $gender;?>" name="gender"> <span>Male</span>
					    <input type="radio"  value="<?php echo $gender;?>" name="gender"> <span>Female</span>
						<span><?php echo $err_gender;?></span></td>
				</tr>
				</tr>
				<td><span><b>WHere did you hear about us?<b></span></td>
				<td>
					<input type="checkbox" value="<?php echo $que;?>"><span>A Friend or Colleague </span></br>
					<input type="checkbox" value="<?php echo $que;?>"><span> Google </span></br>
					<input type="checkbox" value="<?php echo $que;?>"><span>Blog Post </span></br>
					<input type="checkbox" value="<?php echo $que;?>"><span> News Article </span>
					<span><?php echo $err_que;?></span></td>
				</tr>
			<tr>
				<td><span><b>Bio<b></span></td>
			
				<td><textarea name="bio" placeholder="Bio" value="<?php echo $bio;?>"></textarea></td>
				<td><span><?php echo $err_bio;?></span></td>
				</tr>
				
				<tr>
				<td>
				<input type="submit" name="submit" value="Submit">
				</td>
				</tr>
			</table>
		</form>
		</center>
		</fieldset>
	</body>
</html>