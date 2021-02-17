
<?php
include('config.php');
?>

<?php
 
 if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $id = $_POST['ID'];

    
    $sql = "INSERT INTO `users` (`Id`,`Username`, `Email`, `Contact`,`Gender`, `city`) VALUES ($id, $username, $email, $contact,$gender, $city)";
    mysqli_query($conn,$sql);
  
}
else{
    echo"Please click submit button to submit the data";
}

?>

<!doctype = html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="Add.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    ID       <input type="text" name = "id" placeholder="Type your ID number"required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    CONTACT<input type="text" name = "contact" placeholder="Type your contact number"required><br>
    GENDER <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female" >
  <label for="female">Female</label><br>
    Select City <select name="city">
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Bengalore">Bengalorer</option>
        <option value="Rishikesh">Rishikesh</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Shimla">Shimla</option>
        <option value="Haridwar">Haridwar</option>
        <option value="Roorkee">Roorkee</option>
        <option value="Pune">Pune</option>
    </select><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
</form>
</body>
</html>


