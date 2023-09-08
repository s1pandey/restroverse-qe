<?php
session_start();
error_reporting(0);
include('include/dbConfig.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("include/head.php") ?>
</head>
<title><b>ABOUT US</b></title>
<body>

     <!-- Topbar Start -->
     <?php include('include/topbar.php'); ?>
    <!-- Topbar End -->


     <!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <?php
                    $categorysqll = "SELECT * FROM category ";
                    $sqlconn = mysqli_query($con, $categorysqll);
                    while ($rescategory = mysqli_fetch_array($sqlconn)) {

                    ?>

                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $rescategory['name'] ?>
                                <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href='exploremore.php?category=<?php echo $rescategory['id'] ?>' class="dropdown-item">
                                    View All</a>
                                <?php
                                $subcategorysqll = "SELECT * FROM subcategory WHERE categoryId='$rescategory[id]' ";
                                $subsqlconn = mysqli_query($con, $subcategorysqll);
                                while ($subcate = mysqli_fetch_array($subsqlconn)) {

                                ?>

                                    <a href="viewmore.php?subcategory=<?php echo $subcate['id'] ?>" class="dropdown-item"><?php echo "$subcate[name]"  ?></a>



                                <?php  } ?>
                            </div>

                        </div>





                    <?php  }   ?>




                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Rental</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">System</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="aboutus.php" class="nav-item nav-link active">About us</a>


                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->

<div class="container-fluid pt-4 pb-3" style="width: 60%; margin: auto;">
<h1 style="text-align:center;" class="mb-2">About Us</h1><br>
<div class="row px-xl-5 mt-2">
<div class="col-lg-12 col-12 col-xl-12 col-md-12 ">

<p align="justify"><b> <br>Wishing to get some products for few days and want to reduce your expense don't you worry 
        our robust rental management software is here to help you to rent different products.<br>And renters you are wondering where to get your market to lend products for rent. Here we welcome you to place where we bring your requirements into a single platform.<br>It helps renters manage bookings, inquiries, availability and more. It connects management of a fleet, people, and business, 
          to make the operations as efficient as possible. <br>We provide innovative solutions where you can choose product of your choice and enjoy it like your own product for certain period of time.<br>We focus on quality products and ensure customer satisfaction. 
</b></p>
</div>
</div>
</div>
<br><br>
<?php include("include/footer.php") ?>
    
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>