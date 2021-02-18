
<?php 
 require_once "../DB.php";
require_once "../config.php";

if(empty($_SESSION["customer_id"])){
    $redirectTo = APP_PATH."users/auth/login.php";
    header("Location: $redirectTo");
    exit();
}

?>

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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Welcome <?=$_SESSION["customer_firstname"]?> <?=$_SESSION["customer_lastname"]?></li>
                        </ol>



                    </div>

                    <!-- tables -->
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                               To upload a post click the link
                                <a  href="<?=APP_PATH?>users/upload.php">UPLOAD</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                YOUR  BLOG POST LISTS
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>TITLE</th>
                                                <th>LIKES</th>
                                                <th>VIEWS</th>
                                                <th>ACTION</th>
                                                <th>DATE</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>

                                       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- tables -->





                </main>
                <?php require_once "includes/footer.php"; ?>

            </div>
        </div>
        <?php require_once "includes/scripts.php"; ?>

    </body>
</html>
