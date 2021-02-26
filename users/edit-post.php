<?php 
 require_once "../DB.php";
 require_once "../config.php";
 require_once "../controllers/functions.php";
 require_once "../controllers/helpers.php";


//  if(empty($_GET["id"])){
//   $redirectTo = APP_PATH."users/index.php";
//   header("Location: $redirectTo");
//   exit();
//  }

 $id = sanitize($_GET["id"]);
 
 $post = (object) selectSingleData("article","*","`id`={$id}");
//  if(empty($post)){
//   $redirectTo = APP_PATH."users/index.php";
//   header("Location: $redirectTo");
//   exit();
//  }

 
 if(empty($_SESSION["customer_id"])){
     $redirectTo = APP_PATH."users/auth/login.php";
     header("Location: $redirectTo");
     exit();
 }




 if(!empty($_POST["upload-post"])){
  $errors = $formData = [];
  extract($_POST);

 

  if(!empty($title)){
    $formData["title"] = sanitize($title,"lower");
  }else{
    $errors["title"] = "Please enter title";
  }

  if(!empty($content)){
    $formData["content"] = sanitize($content);
  }else{
    $errors["content"] = "Please enter content";
  }

  $imageResult = uploadImage($_FILES["image"]);
  if(!empty($imageResult["success"])){
    $formData["image"] = $imageResult["url"];
  }else{
    $formData["image"] = $oldImage;
  }

  $formData['id'] = $id;


  $formData["user_id"] = $_SESSION["customer_id"];

  if(empty($errors)){

        $result = updatePost($formData);
        if($result){
          $success = "Post successfully added";
          header("Location: index.php");
          exit();
        }
  }else{
    printData($errors);
  }

 }



?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Dashboard</title>
    <?php require_once "includes/css.php"; ?>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

  </head>

  <body class="sb-nav-fixed">

    <?php require_once "includes/top-bar.php"; ?>

    <div id="layoutSidenav">
      <?php require_once "includes/side-bar.php"; ?>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">
            <h1 class="mt-4">Edit Post</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="row">
              <div class="col-md-12">
                <form method="POST" action="<?=$_SERVER["PHP_SELF"]?>?id=<?=$post->id?>" enctype="multipart/form-data">

                  <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Title</label>
                    <input required name="title" class="form-control py-4" id="inputtitleAddress" type="text"
                      placeholder="Enter title address" value="<?=$post->title?>" />
                  </div>

                  <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Content</label>
                    <textarea required name="content" class="form-control py-4" id="" cols="30" rows="10"><?=$post->content?></textarea>
                   
                  </div>

                   <input type="hidden" value="<?=$post->id?>" name="id">
                  <input type="hidden" name="user_id" value="<?=$_SESSION['customer_id'];?>">
                  <input type="hidden" name="oldImage" value="<?=$post->image?>">

                  <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Image</label>
                    <input accept="image/*"  name="image" class="form-control py-4" id="inputimageAddress" type="file"
                       />
                  </div>





                   <input class="btn btn-primary" type="submit" value="Edit" name="upload-post">
                </form>

              </div>
            </div>



          </div>
        </main>
        <?php require_once "includes/footer.php"; ?>

      </div>
    </div>

    <script>
                        CKEDITOR.replace( 'content' );
      </script>
    <?php require_once "includes/scripts.php"; ?>

  </body>

</html>