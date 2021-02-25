
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
                        <h1 class="mt-4">All Posts</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>



                    </div>
                </main>
                <?php require_once "includes/footer.php"; ?>

            </div>
        </div>
        <?php require_once "includes/scripts.php"; ?>

    </body>
</html>
