<?php
include('config.php');
?>
<?php 
	$flag = true; 
	if(isset($_POST['submit'])){
		// $ID = $_POST['ID'];
		$USERNAME = $_POST['USERNAME'];
		$EMAIL = $_POST['EMAIL']; 
		$GENDER = $_POST['GENDER']; 
		$CITY = $_POST['CITY'];
	
		if($CITY == "Select CITY")
		{
			echo "Enter Valid CITY"; 
			$flag = false; 
		}
		else
			$CITY = $_POST['CITY'];
		
	 	if($flag == true){
            $sql = "INSERT INTO `users` (`USERNAME`, `EMAIL`, `GENDER`, `CITY`) VALUES ('$USERNAME', '$EMAIL', '$GENDER', '$CITY')";
			$a = mysqli_query($conn , $sql);
		}
	}	

?>
<html lang="en">
<head>
	<title>LOGIN FORM</title>
</head>
<body>
<form method="post">	
<table ID = "frm" align = "center" border = "3" cellspacing = " 20">
	<h1 align="center"> LOGIN FORM </h1>
	<!-- 1 -->
	<tr><td>USERNAME<td><input type="text" placeholder="Enter Username" name = "USERNAME" required></td></tr>

	<!-- 2 -->
	<tr><td>EMAIL<td><input type="EMAIL" placeholder="Enter Email" name = "EMAIL" required></td></tr>
	
	<!-- 3 -->
	<tr><td>GENDER
		<td>
			<input type="radio" ID="Male" name="GENDER" value = "Male" required>
			<label for="Male">Male</label><br>
			<input type="radio" ID="Female" name="GENDER"  value = "Female">
			<label for="Female">Female</label><br>
		</td>
	</td>
</tr>

	<!-- 4 -->
	<tr><td>CITY
		<td><select name = "CITY" required>
			<option>Select CITY</option>
			<option value="Dehradun">Dehradun</option>
			<option value="Delhi" >Delhi</option>
			<option value="Jaipur">Jaipur</option>
		</select>
	</td></tr>
	

	<tr><td><input type="Submit" name = "submit" >
</div>
</form>
</body>
</html>