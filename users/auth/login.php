<?php 
 require_once "../../DB.php";
 require_once "../../config.php";
 require_once "../../controllers/functions.php";
 require_once "../../controllers/helpers.php";

 if(!empty($_SESSION["customer_id"])){
  $redirectTo = APP_PATH."users/index.php";
  header("Location: $redirectTo");
  exit();
}

  if(!empty($_POST["login"])){
    $errors = $formData = [];
    extract($_POST);

    if(!empty($email)){
      $formData["email"] = sanitize($email,"lower");
    }else{
      $errors["error"] = "Invalid Login Detail";
    }

    if(!empty($password)){
      $password = sanitize($password);
      $formData["password"] = sha1($password);
    }else{
      $errors["error"] = "Invalid Login Detail";
    }

    if(empty($errors)){
      extract($formData);
      $result  = selectSingleData("users","*","`email`='$email' AND `password`='$password'");
      if(!empty($result)){
          $_SESSION["customer_id"] = $result["id"];
          $_SESSION["customer_email"] = $result["email"];
          $_SESSION["customer_firstname"] = $result["firstname"];
          $_SESSION["customer_lastname"] = $result["lastname"];
          $redirectTo = APP_PATH."users/index.php";
          header("Location: $redirectTo");
          exit();
      }else{
      $errors["error"] = "Invalid Login Detail";
      }
    }
  }

?>


<!DOCTYPE html>
<html lang="en">

  <head>
  <title>Login</title>
  <?php require_once "../includes/css.php"; ?>
  </head>

  <body class="bg-primary">
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Login</h3>
                  </div>
                  <div class="card-body">
                    <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
                       <?php if(!empty($errors["error"])){?>
                         <p class="text-center text-danger"><?=$errors["error"]?></p>
                       <?php } ?>

                      <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                        <input required name="email" class="form-control py-4" id="inputEmailAddress" type="email"
                          placeholder="Enter email address" />
                      </div>
                      <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Password</label>
                        <input required name="password" class="form-control py-4" id="inputPassword" type="password"
                          placeholder="Enter password" />
                      </div>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input  name="rem" class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                          <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                        </div>
                      </div>
                      <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <button type="submit" name="login" value="login" class="btn btn-primary" >Login</button>
                        <a  href="index.html">Forgot password ?</a>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center">
                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">Copyright &copy; Your Website 2020</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
   <?php  require_once "../includes/scripts.php"; ?>
  </body>

</html>