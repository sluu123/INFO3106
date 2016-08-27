<?php

// Starts the session, to hold the values

session_start();

$isValid = true;

$fullName = "";
$age = "";
$gender = "";

// checks if a name is entered, if not it will throw an error to tell user to enter their name
// $_SESSION holds their value that was picked

if (isset($_POST) && !empty($_POST))
{
	if (isset($_POST['fullName']) && !empty($_POST['fullName']))	
	{ 
		$_SESSION['fullName'] = $_POST['fullName']; 
	}
	else
	{ 	
		$isValid = false;
		echo "Please fill in your Full Name.";
	} 
	
// check if age is entered, if not it will tell user to enter an age, it will check if the 
// user entered a numeric age
// $_SESSION holds their value that was picked

	if (isset ($_POST['age']) && !empty($_POST['age']))	
	{ 
		$_SESSION['age'] = $_POST['age']; 

		if (empty($_POST['age']))
		{ 	
			$isValid = false;
			echo "Please fill in your Age."; 
		}

		else if(!is_numeric($_SESSION['age']))
		{
			$isValid = false;
			echo "Must be a numeric value.";
		}
	}
	else
	{
		$isValid = false;
		echo "Please fill in your Age."; 
	}
	
// checks if user picks their gender, if not it will tell user to pick their gender
// $_SESSION holds their value that was picked

	if (isset($_POST['yourGender']) && !empty($_POST['yourGender']))	
	{ 
		$_SESSION['yourGender'] = $_POST['yourGender']; 
	}
	else
	{ 	
		$isValid = false;
		echo"Please pick your gender"; 
	}

// Once all fields are entered, it loads to next page
	 
	if ($isValid)
	{
		header('Location: qp2.php');
	}
}

?>

<html>
	<head>
		<title> Questions Page 1</title>
		<style type="text/css">
		header
		{
		    margin: 0;
			padding: 10px 40px;
			background: #CC6600;
			height: 10px;
			width: 95.82%;
		}
		
		.fullName
		{
			margin-top: 10%;
			margin-left: 16%;
			border-color: blue;
		}

		.age
		{
			margin-top: 2%;
			margin-left: 16.2%;	
			border-color: blue;
		}

		.yourGender
		{
			margin-top: 2%;
			margin-left: 15.2%;
			border-color: blue;
		}

		.buttonOne
		{
			margin-top: 5%;
			background-color: blue;
			color: white;
			padding: 9px 34px 11px;
			font-size: 30px;


		}

		.buttonTwo
		{
			margin-left: 32%;
			background-color: blue;
			color: white;
			padding: 9px 34px 11px;
			font-size: 30px;
		}


		</style>
	</head>
	<header>
	</header>
	
<body background="wood.png" background-size: 100% 100%;>

		
	<form method="post" action="qp1.php"> 
	
		<!--Full Name --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Full Name: <input type="text" name="fullName" class="fullName" value="<?php echo $fullName;?>"/><br/>
			
		<!-- Age --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Your Age: <input type="text" name="age" class="age" value="<?php echo $age; ?>"/><br/>	
		<br/>
		
		<!-- Gender Dropdown --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Your Gender: 
		<select name="yourGender" class="yourGender" value="<?php echo $gender; ?>">
			<option value=""></option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
		
		<br/>
		
		<!-- Back & Submit Button --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" class="buttonOne" value="Back" onclick="location.href='index.php'"/>
		<input type="submit" class="buttonTwo" value="Next"/>

	</form>
</body>
</html>