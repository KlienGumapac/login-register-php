<?php
	session_start();
include 'connection.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
   
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); 
    } else {
        echo '<script> 
            alert("Invalid Username or Password");
        </script>';
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>LOGIN</title>
  </head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                                <form method="POST">
                                    <h1>LOG-IN</h1>
                                 <div class="mb-3">
                                 <label for="exampleFormControlInput1" class="form-label">Username:</label>
                                 <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="Username..." required>
                                 <p class="error username-error"></p>
                             </div>
                                 <label for="inputPassword5" class="form-label">Password:</label>
                                 <input type="password" id="inputPassword5" class="form-control" name="password" aria-describedby="passwordHelpBlock" placeholder="Password..." required>
                                <br>
                                 <button type="submit" class="btn btn-primary btn-sm" name="submit">Login</button>
                                <br>
                                <div class="register">
                                <a href="register.php">No Account? Click here to Sign-up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>