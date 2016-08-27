<header>
</header>
<table border="10" style="margin-left:25%"><tbody>
	<h1>Thank You!</h1></br></br></br></br>

<?php

// Starts the session, to hold the values

session_start();

// Loads the table

echo "<tr>
			<td>Full Name:</td> 
			<td>".$_SESSION['fullName']."</td>
	  </tr>";
echo "<tr>
			<td>Your Age:</td> 
			<td>".$_SESSION['age']."</td>
	  </tr>";
echo "<tr>
			<td>Your Gender:</td> 
			<td>".$_SESSION['yourGender']."</td>
	  </tr>";
echo "<tr>
			<td>How long has it been since your first purchase with us?</td> 
			<td>".$_SESSION['howLong']."</td>
	  </tr>";
echo "<tr>
			<td>How happy are you with this devoice on a scale from 1-5 where 1 is not satisfied and 5 is very satisfied?</td> 
			<td>".$_SESSION['happy']."</td>
	  </tr>";
echo "<tr>
			<td>Would you recommend the purcahse of this device to a friend?</td> 
			<td>".$_SESSION['recommend']."</td>
	  </tr>";

?>
</tbody></table>

<html>
	<head>
		<title> Finish </title>
		<style type="text/css">
		header
		{
		    margin: 0;
			padding: 10px 40px;
			background: #CC6600;
			height: 10px;
			width: 95.82%;
		}

		.buttonOne
		{
			margin-top: 5%;
			background-color: blue;
			color: white;
			margin-left: 40%;
			padding: 9px 34px 11px;
			font-size: 30px;
		}

		h1
		{
			margin-left: 40%;
		}

		.tr
		{
			margin-left: 40%;
		}
		</style>
	</head>

<body background="wood.png" background-size: 100% 100%;>
	<form>
		</br></br></br></br></br>
		<!-- Finish Button -->
		<input type="Submit" class="buttonOne" value="Finish" onclick="window.close()"/>
	</form>
</body>
</html>

