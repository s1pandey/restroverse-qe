<?php

session_start();
include("include/dbConfig.php");

if (isset($_POST['submit'])) {
    $sql = "UPDATE customer SET password='$_POST[newpassword]' WHERE id='$_SESSION[userid]'";


    $qsql = mysqli_query($con, $sql);
    if (mysqli_affected_rows($con) == 1) {
        echo "<script>alert('Password has been updated successfully..');</script>";
    } else {
        echo "<script>alert('Failed to update password..');</script>";
    }
}
?>

<html>

<head>
    <title>
        Change password
    </title>
    <?php include("include/head.php") ?>
</head>

<body>
    <!-- Topbar Start -->
    <?php include('include/topbar.php'); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include("include/navbar.php") ?>
    <!-- Navbar End -->
    <div class="container-fluid pt-4 pb-3" style="width: 80%; margin: auto;">
        <h1 style="text-align:center;" class="mb-2">Change Password</h1><br>

        <div class="row px-xl-5 mt-2">

            <div class="col-lg-12 col-xl-12 col-12 col-md-12 mb-3">
                <form method="post" action="" name="frmpatchange" onSubmit="return validateform()">
                    <table class="mediumTable table-responsive-md table-responsive-sm table-responsive-lg" width="500" align="center" border="3" style="font-size: 17px; border-radius: 3px;margin-bottom: 15px;" cellpadding="7">
                        <tr>
                            <td width="42%" id="x">New Password</td>
                            <td id="y"><input type="password" name="newpassword" id="newpassword" style="font-size: 17px;" size="28" /></td>
                        </tr>
                        <tr>
                            <td id="x">Confirm Password</td>
                            <td id="y"><input type="password" name="password" id="password" style="font-size: 17px;" size="28" /></td>
                        </tr>
                        <tr>
                            <td height="36" colspan="2" align="center"><input type="submit" name="submit" id="submit" value="SUBMIT" style="font-size: 16.5px;" /></td>
                    </table>
                </form>
                <script type="application/javascript">
                    function validateform() {
                        if (document.frmpatchange.newpassword.value == "") {
                            alert("New Password should not be empty..");
                            document.frmpatchange.newpassword.focus();
                            return false;
                        } else if (document.frmpatchange.newpassword.value.length < 8) {
                            alert("New Password length should be more than 8 characters...");
                            document.frmpatchange.newpassword.focus();
                            return false;
                        } else if (document.frmpatchange.newpassword.value != document.frmpatchange.password.value) {
                            alert(" New Password and confirm password should be equal..");
                            document.frmpatchange.password.focus();
                            return false;
                        } else {
                            return true;
                        }
                    }
                </script>
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

            </div>

        </div>

    </div>

    <br><br>
    <!--Footer Start-->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">About US</h5>
                <p class="mb-4">Rental System offers a wide range of vehicles for different occasions. From short-term rental to long-term leasing forpersonal use.</p>
                
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Register New Renter</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Register New Customer</a>

                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Log In As?</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Admin</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Renter</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Customer</a>
                           
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h6 class="text-secondary text-uppercase  mb-4">Find Us On</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <p class="mt-4 mb-3"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Sitapaila, Kathmandu, Nepal</p>
                <p class="mb-3"><i class="fa fa-envelope text-primary mr-3"></i>rentalsystem@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+977-9843557453</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#"></a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="">Simanta Shreaya Sarina Supriya Prabash</a>
                </p>
            </div>
        </div>
    </div>
    <!--Footer Ends-->

</body>

</html>