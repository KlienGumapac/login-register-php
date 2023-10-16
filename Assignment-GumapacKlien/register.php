<?php 
	session_start();
	include 'connection.php';

	if(isset($_POST['register'])){

    $names = $_POST['names'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO account (name, lastname, email, username, password) values ('$names','$last','$email','$username','$password')";

    if($conn->query($sql)){
      echo '<script> 
      alert("Registered Successfully");
  </script>';
      
		} else {
      echo '<script> 
      alert("Warning");
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
    <link rel="stylesheet" href="css/register.css" type="text/css">
    <title>REGISTER</title>
  </head>
  <body>
    <section>
        <div class="container"></div>
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card">
                        <div class="card-body">
                                <form method="POST">
                                    <h1>SIGN-UP</h1>
                                 <div class="mb-3">
                                 <label for="exampleFormControlInput1" class="form-label">Name:</label>
                                 <input type="text" class="form-control" id="exampleFormControlInput1" name="names" placeholder="Name..." required>
                             </div>
                             <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Lastname:</label>
                                 <input type="text" class="form-control" id="exampleFormControlInput1" name="last" placeholder="Lastname..." required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                                 <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Email..." required>
                            </div>
                                 <label for="inputPassword5" class="form-label">Username:</label>
                                 <input type="text" id="inputPassword5" class="form-control" name="username" aria-describedby="passwordHelpBlock" placeholder="Username..." required>
                                <br>
                                 <label for="inputPassword5" class="form-label">Password:</label>
                                 <input type="password" id="inputPassword5" class="form-control" name="password" aria-describedby="passwordHelpBlock" placeholder="Password..." required>
                                 <br>
                                 <button type="submit" class="btn btn-primary btn-sm" name="register">Register</button>
                                <br>
                                <div class="register">
                                <a href="index.php">Already had an Account? Click here to Sign-in</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>