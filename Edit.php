<?php
include('config.php')
?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM `users` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);

$row = $result->fetch_array();
$username = $row['username'];
$email = $row['email'];
$contact = $row['contact'];
$city = $row['city'];
?>

<?php
if(isset($_POST['update'])){
	$username = $_POST['name'];
	$city = $_POST['city'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];

	$sql = "UPDATE `users` SET username='$username', email='$email',contact='$contact', city='$city' WHERE id='$id'";
	if(!mysqli_query($conn, $sql)){
		echo "Error ". mysqli_error($conn);
	}
	else{
		echo "Data updated successfully....";
		header("Location:Details.php");
	}
}
else{
	echo "please enter the details";
}

?>


<!DOCTYPE html>
<head>
	<title>update details</title>
</head>
<html>
  <body>
    <form method="POST" action="edit.php?id=<?php echo $id ?>">
        Name <input type="text" name="name" value ="<?php echo"$username" ?>" required ><br>
        E-mail <input type="email" name="email" value ="<?php echo"$email" ?>" required ><br>
       Contact<input type = "text" name="contact" value ="<?php echo"$contact"?>"required><br>
        Select City <select name="city">
	        <option value="Dehradun" <?php if($city=="Dehradun"){echo "selected";}?>>Dehradun</option>
	        <option value="Delhi" <?php if($city=="Delhi"){echo "selected";}?>>Delhi</option>
	        <option value="Jaipur" <?php if($city=="Jaipur"){echo "selected";}?>>Jaipur</option>
	        <option value="Nanital" <?php if($city=="Nanital"){echo "selected";}?>>Nanital</option>
	        <option value="Mussoorie" <?php if($city=="Mussoorie"){echo "selected";}?>>Mussoorie</option>
	        <option value="Lucknow" <?php if($city=="Lucknow"){echo "selected";}?>>Lucknow</option>
	    </select><br>
        <input type="submit" value="update" name="update"><br>
    </form>
  </body>
</html>