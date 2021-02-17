<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$bio="";
	$err_bio="";
	$gender="";
	$err_gender="";
	$hobbies="";
	$err_hobbies="";
	$profession="";
	$err_profession="";

	if ($_SERVER["REQUEST_METHOD"] == "POST"){

	
		
		If (empty($_POST["uname"])){
			$err_uname="Username Required";
		}
		elseif (strlen($_POST["uname"])<6){
			$err_uname="Username Must be 6 Characters Long";
		}
		elseif (strpos($_POST["uname"]," ")) {
			$err_uname="Username should not contain white space";
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
		}
		else{
			$pass=$_POST["pass"];
		}
		if(empty($_POST["bio"])){
			$err_bio="Bio Required";
		}
		else{
		$bio=$_POST["bio"];
		}
		if(!isset($_POST["gender"])){
			$err_gender="[Gender Required]";
		}
		else{
		$gender=$_POST["gender"];
		}
		if(!isset($_POST["hobbies"])){
			$err_hobbies="[Hobby Required]";
		}
		else{
		$hobbies=$_POST["hobbies"];
		}
		if(!isset($_POST["profession"])){
			$err_profession="[Profession Required]";
		}
		else{
		$profession=$_POST["profession"];
		}
	
	}
	
?>

<html>
	<head> </head>
	<body>
		<h1>User Registration</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td><span>Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname ; ?> " placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" value="<?php echo $pass;?>" name="pass">
						<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio"  value="<?php echo $gender;?>" name="gender"> <span>Male</span>
					    <input type="radio"  value="<?php echo $gender;?>" name="gender"> <span>Female</span>
						<span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
				<td><span>Hobbies</span></td>
				<td>:
					<input type="checkbox" value="<?php echo $hobbies;?>"><span>Movies </span>
					<input type="checkbox" value="<?php echo $hobbies;?>"><span> Music </span>
					<input type="checkbox" value="<?php echo $hobbies;?>"><span>Games </span>
					<input type="checkbox" value="<?php echo $hobbies;?>"><span> Garden </span>
					<span><?php echo $err_hobbies;?></span></td>
				</tr>
				<tr>
					<td><span>Profession:</span></td>
					<td>:
						<select name="profession">
							   <option disabled selected>Choose One</option>
							       <option>Teaching</option>
							          <option>Service</option>
							              <option>Business</option>
							                  <option>others</option>
						</select>
						<span><?php echo $err_profession;?></span>
						
				</tr>
				<tr>
					<td><span>Bio</span></td>
					<td>:<textarea name="bio"><?php echo $bio;?></textarea>
					<span><?php echo $err_bio ?><</span></td>
				</tr>
				</table><br>
					<input type="submit" name="submit "value="Submit">
		</form>
		</body>
		</html>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
