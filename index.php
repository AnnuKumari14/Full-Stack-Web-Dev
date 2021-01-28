<html>
<head>
<title>PHP First program</title>
</head>
<body>
<form method="post" action="index.php">
Variable 1 <input type="text" name="var1">
Variable 2 <input type="text" name="var2">
<input type="submit" name= "submit">
</form>
</body>
</html>

<?php
// $sum=$_GET['var1']+$_GET['var2'];
if(isset($_POST['submit']))
{
    if(empty($_POST['var1'])|| empty($_POST['var2']))
    {
        echo "No input provided.. fist enter values";
    }
    else{
        $sum=$_POST['var1']+$_POST['var2'];
        echo"sum of two variables is $sum";
    }

}
else{
    echo"No input";
}
?>
