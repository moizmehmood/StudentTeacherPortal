<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Cards</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include_once("sidebar.php");
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include_once("topbar.php");
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                    </div> -->


                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <form action="insertAssignCourse.php" method="POST" class="user" name="entryForm" enctype="multipart/form-data">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Student</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label>Date</label>
                                                        <input type="date" id="currentDate" class="form-control" name="date">
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label>Teacher</label>
                                                        <select class="form-control select2" name="teacher" id="teacher">
                                                            <option>Select</option>
                                                            <?php
                                                            include_once('../config.php');
                                                            $fetchEntry = mysqli_query($conn, "SELECT * FROM teacher where isdelete=0");
                                                            foreach ($fetchEntry as $row) :
                                                            ?>
                                                                <option value="<?php echo $row['tid']; ?>"><?php echo $row['name']; ?></option>
                                                            <?php
                                                            endforeach;
                                                            ?> -->
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label>Courses</label>
                                                        <select class="form-control select2" name="course" id="course">
                                                            <option>Select</option>
                                                            <?php
                                                            include_once('../config.php');
                                                            $fetchEntry = mysqli_query($conn, "SELECT * FROM course where isdelete=0");
                                                            foreach ($fetchEntry as $row) :
                                                            ?>
                                                                <option value="<?php echo $row['cid']; ?>"><?php echo $row['bookname']; ?></option>
                                                            <?php
                                                            endforeach;
                                                            ?> -->
                                                        </select>
                                                    </div> 
                                                    
                                                    <div class="col-lg-4 col-sm-12 mb-2">
                                                        <label>Student</label>
                                                        <select class="form-control select2" name="student" id="student">
                                                            <option>Select</option>
                                                            <?php
                                                            include_once('../config.php');
                                                            $fetchEntry = mysqli_query($conn, "SELECT * FROM student where isdelete=0");
                                                            foreach ($fetchEntry as $row) :
                                                            ?>
                                                                <option value="<?php echo $row['sid']; ?>"><?php echo $row['name']; ?></option>
                                                            <?php
                                                            endforeach;
                                                            ?> -->
                                                        </select>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-lg-6 col-sm-12 mb-2">
                                        <button type="submit" class="btn btn-success btn-block" name="btnRegister">Insert Entry</button>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-2">
                                        <button type="reset" class="btn btn-secondary btn-block">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>