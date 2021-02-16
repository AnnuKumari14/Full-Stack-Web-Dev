<?php
include('config.php');
?>

<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>

<html lang="en">
<head>
	<title>DATABSE RECORD</title>
</head>
<body>	
	<table border = "1" >
		
		<thead>
			<tr>
            <th>ID</th>
				<th>USERNAME</th>
				<th>EMAIL</th>
				<th>GENDER</th>
				<th>CITY</th>
				<th>Edit</th>
				<th>Delete</th>
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
				<td><a href="edit.php?id=<?php echo $row['ID']?>">
				<input type="button" name="Edit" value="Edit"></a></td>
				<td><a href="delete.php?id=<?php echo $row['ID']?>">
				<input type="button" onclick="return del()" name ="Delete" value="Delete"></a></td>
            </tr>
           <?php } ?>
		</tbody>
	</table>
<?php    }
?>
<script type="text/javascript">	
function del()
{
  if(confirm("Do you really want to delete this RECORD ? ")){
       return true ;
  }
  else{
    return false;
  }
}
</script>
</body>
</html>