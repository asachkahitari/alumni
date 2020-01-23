<?php

function htmlMail($t, $subject, $name, $story, $contact){

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
                    <h2 style="font-size:22px;">Welcome to the Alumni network of E-Cell VNIT</h2><br>

                    <div class="context">
                        <h3><b>Hey '.$name .'!</b></h3>
                        <p>Thank You for reaching out to us!</p>
                        <div>
                            <p>
                                It is an honour to connect with you. The response you submitted on the platform is:<br> '.$story.'.
                            </p>

                            <p>We will be reaching out to you on '.$contact.'.</p>
                            <p>
                                With warm regards,<br>
                                Lakshya<br>
                                +91 77384 46941<br>
                                Treasurer,
                                E-Cell VNIT
                            </p>
                        </div>
                    </div>
                </body>
            </html>';

    $to = $t;

    $url = 'https://startupconclave.ecellvnit.org/send';
    $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'Entrepreneurs1999');

    // use key 'http' even if you send the request to https://...
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
        $msg = 'We are facing problem in sending email. Please use this link to pay your registration fees.';
    }

  }
?>
