<?php 
	session_start();
	include 'connection.php';

	if(isset($_POST['submit'])){

		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$age = $_POST['age'];
		$bday = $_POST['bday'];
		$email = $_POST['Email'];
		$Uname = $_POST['Uname'];
		$Pword = $_POST['Pword'];

		$sql = "INSERT into signup (firstname, middlename, lastname, age, birthday, email, username, password )  values('$fname', '$mname', '$lname', '$age', '$bday', '$email', '$Uname', '$Pword')";
		if($conn->query($sql)){
			$_SESSION['response'] = "Successfully Registered";
			$_SESSION['type'] = "success";
		} else {
			$_SESSION['response'] = "An error has occurred";
			$_SESSION['type'] = "warning";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>	

	<div class="container">
		<div class="class">
			<form method="POST">
				<label>First Name</label>
				<input type="text" name="fname">
				<label>Middle Name</label>
				<input type="text" name="mname">
				<label>Last Name</label>
				<input type="text" name="lname">
				<label>Age</label>
				<input type="number" name="age">
				<label>Birth Day</label>
				<input type="date" name="bday">
				<label>Email</label>
				<input type="email" name="Email">
				<label>Username</label>
				<input type="text" name="Uname">
				<label>Password</label>
				<input type="password" name="Pword">
				<button type="submit" name="submit">Sign Up</button>
			</form>
		</div>
	</div>

</body>
</html>








<?php
include 'connection.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header('Location: register.php'); 
    } else {
        $_SESSION['response'] = "Invalid username or password";
        $_SESSION['type'] = "warning";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<div class="container">
    <div class="class">
        <form method="POST">
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</div>

</body>
</html>
