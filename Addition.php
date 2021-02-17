<?php
$var1 = ''; 
$var2 = ''; 
$sum = '';
 
	if(isset($_POST['var1'])){
		$name = $_POST['var1'];
	}
	else{
		$name = ''; 
	}

    if(isset($_POST['var2'])){
		$name = $_POST['var2'];
	}
	else{
		$name = '';
         
	}
$sum=$_POST['var1']+$_POST['var2'];

if(isset($_POST['var1'])){
    $name = $_POST['var1'];
}
else{
    $name = ''; 
}
echo"The Sum is : $sum";
?>





<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="Addition.php">
    Var1 <input type="text" name="var1" placeholder="Type first number" required><br>
    var2 <input type="text" name="var2" placeholder="Type second number" required><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
</form>
</body>
</html>