<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $ID = $_POST['ID'];
    $USERNAME = $_POST['USERNAME'];
    $EMAIL = $_POST['EMAIL'];
    $GENDER = $_POST['GENDER'];
    $CITY = $_POST['CITY'];

    $sql = "INSERT INTO `users` (`ID`, `USERNAME`, `EMAIL`, `GENDER`, `CITY`) VALUES ('$ID', '$USERNAME', '$EMAIL', '$GENDER', '$CITY')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="asign3-q3add.php">
    ID <input type="text" name="ID" placeholder ="Type Your Username" required><br>
    USERNAME <input type="text" name="USERNAME" placeholder="Type Your Username" required><br>
    EMAIL <input type="email" name="EMAIL" placeholder="Type Your Email" required><br>
    Select GENDER - 
            Male <input type="radio" name="GENDER" value="M" checked>
            Female <input type="radio" name="GENDER" value="F"><br><br>
    Select CITY <select name="CITY">
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Nanital">Nanital</option>
        <option value="Mussoorie">Mussoorie</option>
        <option value="Lucknow">Lucknow</option>
    </select><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
</form>
</body>
</html>