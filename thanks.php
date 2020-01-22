<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
function htmlMail($t, $sub, $name, $teamname, $event){

  $name = $con->real_escape_string($_POST['name']);
  $email = $con->real_escape_string($_POST['email']);
  $contact = $con->real_escape_string($_POST['contact']);
  $story = $con->real_escape_string($_POST['story']);

  $html = '<!DOCTYPE html>
            <html>
                <head>
                    <style>
                        li{
                            padding:10px;
                        }
                        p{
                            font-size:16px;
                        }

                        *{
                            font-family:Helvetica,Arial,sans-serif;
                        }

                        h2{
                            text-align: center;
                            margin-top: 150px;

                        }
                        html, body{
                            background-color:#f7f9fb;
                            margin: 0;
                        }
                        .context {
                            font-size: 12px;
                            padding: 40px 60px;
                            margin-left:10%;
                            margin-right: 10%;
                        }

                        .context p{
                            font-size: 12px;
                        }
                        p{
                            margin: 15px 0px;
                        }

                    </style>
                </head>
                <body>

                    <div style="background: #0b0b0b; padding:10px 30px;"><img src="https://www.ecellvnit.org/img/logo-ecell.png"></div>
                    <h2 style="font-size:22px;">Welcome to Pitch Perfect</h2><br>

                    <div class="context">
                        <h3><b>Hey '.$name .'!</b></h3>
                        <p>Thank You for reaching out to us!</p>
                        <div>
                            <p>
                                It is an honour to connect with you. The response you submitted on the platform is:<br> '.$textarea.'.
                            </p>

                            <p>We will be reaching out to you on '.$phone.'.</p>
                            <p>
                                With warm regards,<br>
                                Lakshya
                                +91 77384 46941
                                Treasurer,
                                E-Cell VNIT
                            </p>
                        </div>
                    </div>
                </body>
            </html>';


  $subject = "Thank You for sharing your Story!";
  htmlMail($email,$s,$name,$name, 'Alumni');


  $url = 'https://startupconclave.ecellvnit.org/send';
  $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'Entrepreneurs1999');

  $options = array(
      'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($data)
      )
  );
  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  if ($result === FALSE) {
    $msg = 'We are facing problem in sending email. Contact +91 7738446941 to report.';
  }

}
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
