<?php

// Starts the session, to hold the values

session_start();

$isValid = true;

$happy = "";
$recommend = "";

// Checks if rating is clicked, if not throws error to tell user to pick a rating
// $_SESSION holds their value that was picked

if (isset($_POST) && !empty($_POST)){
	if (isset($_POST['happy']) && !empty($_POST['happy']))	{ 
		$_SESSION['happy'] = $_POST['happy']; 
	}else{ 	
		$isValid = false;
		echo "Please pick a Rating.";
	} 

// Checks if user picked either yes or no, if neither is picked it will throw an error to tell user to pick one
// $_SESSION holds their value that was picked
	
	if (isset($_POST['recommend']) && !empty($_POST['recommend']))	{ 
		$_SESSION['recommend'] = $_POST['recommend']; 
	}else{ 	
		$isValid = false;
		echo "Please choose either Yes or No."; 
	}  
	 
// Once all fields are entered, it loads to next page

	if ($isValid){
		header('Location: thankyou.php');}
	}


?>

<html>
	<head>
		<title> Questions Page 3</title>
		<style type="text/css">
		header
		{
		    margin: 0;
			padding: 10px 40px;
			background: #CC6600;
			height: 10px;
			width: 95.82%;
		}
		
		.rating
		{
			margin-top: 10%;
			margin-left: 17%;
			outline: 1px solid blue;
		}

		.ratingz
		{
			outline: 1px solid blue;
		}

		.recommend
		{
			margin-top: 2%;
			margin-left: 17%;	
			outline: 1px solid blue;
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
		
	<form method="post" action="qp3.php"> 
			
		<!-- Rating radio --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 		
		How happy are you with this device on a scale from 1 to 5 where 1 is not satisfied and 5 is very satisfied:<br/>
		<select name="happy" style="display:none" value="<?php echo $happy; ?>">
			<input type="radio" class="rating" name="happy" value="1"/ >1
			<input type="radio" class="ratingz" name="happy" value="2"/ >2
			<input type="radio" class="ratingz" name="happy" value="3"/ >3
			<input type="radio" class="ratingz" name="happy" value="4"/ >4
			<input type="radio" class="ratingz" name="happy" value="5"/ >5
		</select>
		<br/><br/>
				
		<!-- Yes or No Dropdown --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Would you recommend the purchase of this device to a friend?</br>
		<select name="recommend" class="recommend" value="<?php echo $recommend; ?>">
			<option value=""></option>
			<option value="yes">Yes</option>
			<option value="no">No</option>
		</select>
		
		<br/>
		
		<!-- Back & Submit Button --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<input type="button" class="buttonOne" value="Back" onclick="location.href='qp2.php'"/>
		<input type="submit" class="buttonTwo" value="Next"/>
		
			
	</form>

</body>
</html>