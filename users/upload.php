<?php require_once "../config.php"; ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Dashboard</title>
    <?php require_once "includes/css.php"; ?>

  </head>

  <body class="sb-nav-fixed">

    <?php require_once "includes/top-bar.php"; ?>

    <div id="layoutSidenav">
      <?php require_once "includes/side-bar.php"; ?>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">
            <h1 class="mt-4">Upload Post</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="row">
              <div class="col-md-12">
                <form action="">

                  <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Title</label>
                    <input required name="title" class="form-control py-4" id="inputtitleAddress" type="text"
                      placeholder="Enter title address" />
                  </div>

                  <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Content</label>
                    <textarea required name="content" class="form-control py-4" name="" id="" cols="30" rows="10"></textarea>
                   
                  </div>

                  <input type="hidden" name="user_id" value="<?=$_SESSION['customer_id'];?>">

                  <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Image</label>
                    <input required name="image" class="form-control py-4" id="inputimageAddress" type="file"
                       />
                  </div>





                   <input class="btn btn-primary" type="submit" value="upload" name="image">
                </form>

              </div>
            </div>



          </div>
        </main>
        <?php require_once "includes/footer.php"; ?>

      </div>
    </div>
    <?php require_once "includes/scripts.php"; ?>

  </body>

</html>