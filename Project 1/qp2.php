<?php

// Starts the session, to hold the values

session_start();

$isValid = true;

$howLong = "";
$products = "";

// Checks if rating is clicked, if not throws error to tell user to pick a rating
// $_SESSION holds their value that was picked

if (isset($_POST) && !empty($_POST))
{
	if (isset($_POST['howLong']) && !empty($_POST['howLong']))	
	{ 
		$_SESSION['howLong'] = $_POST['howLong']; 
	}
	else
	{ 	
		$isValid = false;
		echo "Please select a Rating.";
	} 
	
// Checks if user has picked at least one proudct, if not picked it will throw an error telling user to pick a product
// $_SESSION holds their value that was picked

	if (isset($_POST['products']) && !empty($_POST['products']))	
	{ 
		$_SESSION['products'] = $_POST['products']; 
	}
	else
	{ 	
		$isValid = false;
		echo "At least one product must be selected."; 
	}  
	 
// Once all fields are entered, it loads to next page

	if ($isValid)
	{
		header('Location: qp3.php');}
	}

?>

<html>
	<head>
		<title> Questions Page 2</title>
		<style type="text/css">
		header
		{
		    margin: 0;
			padding: 10px 40px;
			background: #CC6600;
			height: 10px;
			width: 95.82%;
		}
		
		.howLong
		{
			margin-top: 10%;
			margin-left: 17%;
		}

		.products
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
		p
		{
			margin-left:17%;
		}


		</style>
	</head>
	<header>
	</header>
	
<body background="wood.png" background-size: 100% 100%;>
		
	<form method="post" action="qp2.php"> 
			
		<!-- Rating radio --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<p>How long has it been since your first purchase with us?:</p></br>
		<select name="howLong" style="display:none" value="<?php echo $howLong; ?>" >
			<input type="radio" class="howLong" name="howLong" value="1"/ >1 year
			<input type="radio" name="howLong" value="2"/ >2 years
			<input type="radio" name="howLong" value="3"/>3 years
			<input type="radio" name="howLong" value="4"/ >4 years
			<input type="radio" name="howLong" value="5"/ >5 or more years
		</select>
		<br/><br/><br/>
				
		<!-- Products checkbox --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
		Which of the following have you purchased from us?<br/>
		<select name="products[]" style="display:none" value="<?php echo $products; ?>" >
			<input type="checkbox" class="products" name="products[]" value="desktopComputers"/>Desktop computer<br/>	
			<input type="checkbox" class="products" name="products[]" value="laptop" />Laptop<br/>
			<input type="checkbox" class="products" name="products[]" value="tablet" />Tablet<br/>
		</select>
		<br/>
		
		<!-- Back & Submit Button --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<input type="button" class="buttonOne" value="Back" onclick="location.href='qp1.php'"/>
		<input type="submit" class="buttonTwo" value="Next"/>
		
	</form>

</body>
</html>