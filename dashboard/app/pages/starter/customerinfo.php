<?php 
    if( session_status() == PHP_SESSION_NONE ){
        session_start();    
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PHP FDC11</title>
        <link href="<?php echo $_SESSION['project-path']?>/dashboard/vendors/sb-admin/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- topbar -->
        <?php
            include '../template/topbar.php';
        ?>
        <!-- end topbar -->

        <div id="layoutSidenav">
          <!-- sidebar -->
            <?php
                include '../template/sidebar.php';
            ?>
            <!-- end sidebar -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <h3 class="mt-4">Dashboard</h3>  
                        <!-- start content -->
                        <div class="row">
                            
                        </div>
                        <!-- end contant -->                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo $_SESSION['project-path'] ?>/vendors/sb-admin2/js/scripts.js"></script>
    </body>
</html>
