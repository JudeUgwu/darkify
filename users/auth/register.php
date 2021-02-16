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



 if(!empty($_POST["register"])){
    $errors = $formData = [];
    extract($_POST);

    if(!empty($firstname)){
      $formData["firstname"] = sanitize($firstname,"lower");
    }else{
      $errors["firstname"] = "Please enter firstname";
    }

    if(!empty($lastname)){
      $formData["lastname"] = sanitize($lastname,"lower");
    }else{
      $errors["lastname"] = "Please enter lastname";
    }

    if(!empty($email)){
      if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailExists = selectSingleData("users","*","`email`='$email'");
        if(!empty($emailExists)){
          $errors["email"] = "Email already exists";
        }else{
          $formData["email"] = sanitize($email,"lower");
        }
      }else{
        $errors["email"] = "Please enter a valid email";
      }
    }else{
      $errors["email"] = "Please enter email";
    }

    if(!empty($password)){
      if(strlen($password) < 6){
         $errors["password"] = "Password must be at least 6 characters";
      }else{
        $password = sanitize($password);
        $formData["password"]  = sha1($password);
      }
    }else{
      $errors["password"] = "Please enter password";
    }


    if(empty($errors)){
       $result = registerUser($formData);
       if($result){
         $redirectLink = APP_PATH."users/auth/login.php";
          header("Location: $redirectLink");
          exit();
       }
    }

 
 
 }

?>
<!DOCTYPE html>
<html lang="en">

  <head>
  <title>Register</title>
  <?php require_once "../includes/css.php"; ?>
  </head>

  <body class="bg-primary">
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
                      <div class="form-row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="small mb-1" for="inputFirstName">First Name</label>
                            <input required name="firstname" class="form-control py-4" id="inputFirstName" type="text"
                              placeholder="Enter first name" />
                              <?php if(!empty($errors["firstname"])){ ?>
                            <span class="text-danger"><?=$errors["firstname"]?></span>
                            <?php } ?>

                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="small mb-1" for="inputLastName">Last Name</label>
                            <input required name="lastname" class="form-control py-4" id="inputLastName" type="text"
                              placeholder="Enter last name" />
                              <?php if(!empty($errors["lastname"])){ ?>
                            <span class="text-danger"><?=$errors["lastname"]?></span>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                        <input required name="email" class="form-control py-4" id="inputEmailAddress" type="email"
                          aria-describedby="emailHelp" placeholder="Enter email address" />
                          <?php if(!empty($errors["email"])){ ?>
                            <span class="text-danger"><?=$errors["email"]?></span>
                            <?php } ?>
                      </div>
                      <div class="form-row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="small mb-1" for="inputPassword">Password</label>
                            <input minlength="4" required name="password" class="form-control py-4" id="inputPassword" type="password"
                              placeholder="Enter password" />
                              <?php if(!empty($errors["password"])){ ?>
                            <span class="text-danger"><?=$errors["password"]?></span>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group mt-4 mb-0"><button type="submit" name="register" value="Register"  class="btn btn-primary btn-block" >Create
                          Account</button></div>
                    </form>
                  </div>
                  <div class="card-footer text-center">
                    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
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
    <?php require_once "../includes/scripts.php"; ?>
  </body>

</html>