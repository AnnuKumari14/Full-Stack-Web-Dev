<?php
include('config.php');
?>

<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>

    <table border="1px">
		<thead>
			<tr>
				<th>ID</th>
				<th>USERNAME</th>
				<th>EMAIL</th>
				<th>GENDER</th>
				<th>CITY</th>
			</tr>
		</thead>
		<tbody>
			
            <?php
			 while($row = $result->fetch_array())
			{?>
			<tr>
				<td><?php echo $row['ID']?></td>
				<td><?php echo $row['USERNAME']?></td>
				<td><?php echo $row['EMAIL']?></td>
				<td><?php echo $row['GENDER']?></td>
                <td><?php echo $row['CITY']?></td>
			
            </tr>
           <?php } ?>
		</tbody>
	</table>
<?php    }
?>
<html>
    <head>
        <title>User Details</title>
    </head>
<body>

</body>
</html>