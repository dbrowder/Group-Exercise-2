<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "mydesign.css" media = "screen"/>
<style>
.error {color: #DC143C;}
</style>
</head>

<body>
<?php
$password = "";
$name = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["name"])) {
		$nameErr = "Name is a required field.";
	}
	else {
		$name = test_input($_POST["name"]);
	}
	
	if(empty($_POST["password"])) {
		$passwordErr = "Password is a required field.";
	}
	else {
 		$password = test_input($_POST["password"]);
 	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return data;
}
?>

<h2>CakePHP Demonstration</h2>
<p><span class = "error">* required field</span></p>
<form method = "post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type = "text" name = "name">
	<span class = "error">* <?php echo $nameErr;?></span>
	<br><br>
	Password: <input type = "text" name = "password">
	<span class = "error">* <?php echo $passwordErr;?></span>
	<br>
	<input type = "submit" name = "submit" value = "submit">
</form>

<?php
echo "<h2>System Processing...</h2>";
echo $name;
echo "<br>"
echo $password
echo "<br>"

include 'Group2Excercise.php';
?>

</body>
</html>