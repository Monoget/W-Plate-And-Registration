<?php
$from_email='appointment@plateregistration.com';
if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $email = $_POST['email'];

    $subject_contact = $_POST['subject'];


    $email_to = $email;
    $subject = 'Email From Plate Registration';
    $userName = $name ;
    $l = strtolower($userName);
    $u = ucfirst($l);

    $headers = "From: Plate Registration <" . $from_email . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/assets/images/logo-3.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                            
                            <h3 style='color:black'>Hi $u!</h3>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>Thank you for reaching out us</p>   
                        
                            <p style='color:black'>Our team is excited to join you on your journey with us!<br>
                                We look forward to speaking with you about projects we need to take to get you into your project.<br>
                                If there are any changes to your contact information or availability, please let us know by<br>
                                Reaching us at <a href='callto:8801729277768'>(880) 172 927 7768</a> or <a href='mailto:biplob@graphicsmirrormail.com'>biplob@graphicsmirrormail.com</a>
                            </p>
                            
                            <p style='color:black;font-weight:bold'>We look forward to speaking with you!<br>
                                Plate Registration Team
                             </p> 
                        </div>
                    </body>
                </html>
                ";

    if ( mail($email_to, $subject, $messege, $headers)) {

    } else {

    }

    $backend_message='';

    $i=0;
    foreach ($_POST as $key => $value) {
        if($i<count($_POST)-1){
            $backend_message.= htmlspecialchars($key).": ".htmlspecialchars($value)."<br>";
        }
        $i++;
    }

    $email_to = 'monoget1@gmail.com';
    $subject = $subject_contact;

    $headers = "From: Plate Registration <" . $from_email . ">\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $messege = "<html>
                    <body style='background-color: #eee; font-size: 16px;'>
                        <div style='max-width: 600px; min-width: 200px; background-color: #fff; padding: 20px; margin: auto;'>
                        
                            <img src='" . $_SERVER['SERVER_NAME'] . "/assets/images/logo-3.png' style='max-width: 300px;display: block;margin-left: auto;margin-right: auto;'>
                                
                            <p style='text-align: center;color:green;font-weight:bold'>New Plate Registration Info Data</p>   
                        
                            <p style='color:black'> " . $backend_message . "
                            </p>
                        </div>
                    </body>
                </html>
                ";

    if (mail($email_to, $subject, $messege, $headers)) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='Home';
                </script>";
    } else {

    }
}