<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SQL Lab | UpgradeMore</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .custom {
            width: 100px !important;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <img src="https://upgrademore.com/_next/static/images/logo-dark-2ff1f730c72954aa4b2e9ce841833720.png" alt="logo" style="height: 60px;max-width: 200px;padding-top: -3px;margin-top: 10px;margin-left: 160px;margin-bottom: 15px;">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="container" style="padding-bottom: 15px;">
                    <div class="col-sm">
                            <div class="dropdown" style="text-align: center;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <b>Select Question</b>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="question-1.php"><b>Question 1</b></a>
                                  <a class="dropdown-item" href="question-2.php"><b>Question 2</b></a>
                                  <a class="dropdown-item" href="question-3.php"><b>Question 3</b></a>
                                  <a class="dropdown-item" href="question-4.php"><b>Question 4</b></a>
                                  <a class="dropdown-item" href="question-5.php"><b>Question 5</b></a>
                                  <a class="dropdown-item" href="question-6.php"><b>Question 6</b></a>
                                  <a class="dropdown-item" href="question-7.php"><b>Question 7</b></a>
                                  <a class="dropdown-item" href="question-8.php"><b>Question 8</b></a>
                                  <a class="dropdown-item" href="question-9.php"><b>Question 9</b></a>
                                  <a class="dropdown-item" href="question-10.php"><b>Question 10</b></a>
                                  <a class="dropdown-item" href="question-11.php"><b>Question 11</b></a>
                                  <a class="dropdown-item" href="question-12.php"><b>Question 12</b></a>
                                  <a class="dropdown-item" href="question-13.php"><b>Question 13</b></a>
                                  <a class="dropdown-item" href="question-14.php"><b>Question 14</b></a>
                                  <a class="dropdown-item" href="question-15.php"><b>Question 15</b></a>
                                </div>
                    </div>
            </div>

            <div class="card shadow mb-4" style="margin-left: 15px;margin-right: 15px;margin-top: 20px;">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold" style="color: #fff;">Question 10</h6>
                </div>
                <div class="card-body" style="background-color: #131417;">
               Write a query to display record of users who have salary = 15000 and lives in indore.
                <br><br>
                Example:
                <ul>
                <li>Select * WHERE column_name = value and column_name= value;</li>
                </ul>
                </div>
            </div>
            
            <div class="card card-sm card-body rounded mb-3" style="margin-right: 15px;margin-left: 15px;padding: 10px;background-color: #9936f3;"> 
						<div data-target="#panel-1" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1"><span class="h6 mb-0" style="color: #fff;"><b>Solution</b></span><span class="icon" style="margin-left: 10px;"><i class="fas fa-angle-down" style="color: #fff;"></i></span></div>
						<div class="collapse" id="panel-1">
							<div class="pt-3">
								<p class="mb-0" style="color: #fff;">
                                    <ul>
                                    <li>Select * WHERE salary = 15000 and city= "indore";</li>
                                    </ul>
                                </p>
							</div>
						</div>
					</div>

              <div class="container" style="margin-top: 25px;">
                <div class="row">
                  <div class="col-sm">
                    <button type="button" class="btn btn-primary custom"><a href="question-9.php" style="color: #fff; text-decoration: none;"><b>Back</b></a></button>
                  </div>
                  <div class="col-sm">
                    <button type="button" class="btn btn-primary custom" style="margin-left: 165px;"><a href="question-11.php" style="color: #fff; text-decoration: none;"><b>Next</b></a></button>
                  </div>
                </div>
              </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #000;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <div class="sidebar-heading" style="font-size: 35px;color: #fff;">
                            <b style="margin-left: 200px;">Basic DBMS or SQL Lab</b>
                </div>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small">Welcome, Hacker</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>

                <html> 
<iframe width="80%" height="80%" src="terminal-10.php" frameborder="yes" scrolling="yes" name="myIframe" id="myIframe" style="margin-left: 90px;"> </iframe>


            </div>
            <!-- End of Main Content -->

                        <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <div class="container">
  <div class="row">
    <div class="col-sm">
<i class="fab fa-discord" style="font-size: 25px;margin-left: -670px;"></i>
    </div>
    <div class="col-sm" style="margin-left: -830px;">
    <span style="font-size: 25px;"><b>Join UpgradeMore <a href="https://upgrademore.com/discord">Discord</a> Community For any kind of support.</b></span>
    </div>
  </div>
</div>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
