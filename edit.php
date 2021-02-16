<?php
include('config.php');
?>

<?php
$ID=$_GET['ID'];
$sql = "SELECT * FROM `users` WHERE 'ID' =$ID";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$USERNAME = $row['USERNAME'];
$EMAIL = $row['EMAIL'];
$GENDER= $row['GENDER'];
$CITY = $row['CITY'];
?>
<?php
if(isset($_POST['update'])){
    $USERNAME = $_POST['USERNAME'];
    $EMAIL = $_POST['EMAIL'];
    $GENDER= $_POST['GENDER'];
    $CITY = $_POST['CITY'];

    $sql = "UPDATE `users` SET USERNAME='$USERNAME', EMAIL='$EMAIL', GENDER='$GENDER', CITY='$CITY' WHERE 'ID'=$ID";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
        header("Location:showdetails.php");
    }
    else{
        echo "Updation failed..";
    }
}
?>
<html>
    <head>
        <title>HTML Forms</title>
      
    </head>
<body>
<form method="GET" action="edit.php?id=<?php echo "$ID"?>">
    USERNAME <input type="text" name="USERNAME" value=<?php echo "$USERNAME" ?> ><br>
    E-MAIL <input type="email" name="EMAIL" value=<?php echo "$EMAIL" ?> ><br>
    <tr><td>GENDER
		<td>
			<input type="radio" id="Male" name="GENDER" <?php if($GENDER == "Male"){echo "checked";}?> value = "Male">
			<label for="Male" >Male</label><br>
			<input type="radio" id="Female" name="GENDER" <?php if($GENDER == "Female"){echo "checked";}?> value = "Female">
			<label for="Female" >Female</label><br>
		</td>
	</td>
</tr>
    Select CITY <select name="CITY">
        <option value="Dehradun" <?php if($CITY=="Dehradun"){echo "selected";}?>>Dehradun</option>
        <option value="Mumbai" <?php if($CITY=="Mumbai"){echo "selected";}?>>Mumbai</option>
        <option value="Kolkata" <?php if($CITY=="Kolkata"){echo "selected";}?>>Kolkata</option>
        <option value="Delhi" <?php if($CITY=="Delhi"){echo "selected";}?>>Delhi</option>
        <option value="Mussoorie" <?php if($CITY=="Mussoorie"){echo "selected";}?>>Mussoorie</option>
        <option value="Patna" <?php if($CITY=="Patna"){echo "selected";}?>>Patna</option>
    </select><br>
    <input type="submit" name="update" value="update">
</form>
</body>
</html>