<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('includes/mailing.php');

if(isset($_POST['submit'])){
  require "dbconnect.php";
  $name = $con->real_escape_string($_POST['name']);
  $email = $con->real_escape_string($_POST['email']);
  $contact = $con->real_escape_string($_POST['contact']);
  $story = $con->real_escape_string($_POST['story']);

  $alumquery = "CREATE TABLE IF NOT EXISTS Alumni(
              ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              Name VARCHAR(255) NOT NULL,
              Email VARCHAR(255) NOT NULL,
              Contact VARCHAR(255) NOT NULL,
              )";
  mysqli_query($con,$alumquery);

  $insert = "INSERT INTO Alumni(Name,Email,Contact) VALUES('$name','$email','$contact')";
  mysqli_query($con,$insert);

  $subject = "Thank You for sharing your Story!";

  htmlMail($email,$subject,$name,$story, $contact);

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <?php $pagetitle = 'Alumni | ECELL VNIT'; ?>

  <!-- Begin Head -->
  <?php include("includes/head.php")?>
  <!-- End Head -->
    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <?php include("includes/header.php")?>
        <!--========== END HEADER ==========-->

        <!-- <div class="s-swiper js__swiper-one-item"> -->
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/back.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-30--xs g-font-size-40--sm g-font-size-60--md g-color--white"><strong>Thank You for sharing your <br/><span class="g-color--red">Story!</strong></span><br></h1>
                            <?php echo $msg; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

        <!--========== FOOTER ==========-->
        <?php include("includes/footer_landing.php");?>
        <?php include("includes/script.php");?>

    </body>
    <!-- End Body -->
</html>
<?php }else {
  header('location:index.php');
} ?>
