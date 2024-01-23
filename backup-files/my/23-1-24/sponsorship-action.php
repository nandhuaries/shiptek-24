<?php
include('../dbcon.php');
include("../PHPMailer/class.phpmailer.php");
include("../PHPMailer/class.smtp.php");

$error = "";
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '6Ldxe20UAAAAAFMORF6WO4ehTYDklXgm9mqZulDW';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        if (isset($_POST['submit'])) {
            exit();
            $fname = str_replace("'", '', $_POST['fname']);
            $lname = str_replace("'", '', $_POST['lname']);
            $phonenumber = str_replace("'", '', $_POST['phone_number']);
            $email = str_replace("'", '', $_POST['email']);
            $job = str_replace("'", '', $_POST['job']);
            $company = str_replace("'", '', $_POST['company']);
            $location = str_replace("'", '', $_POST['location']);
            $categories = str_replace("'", '',  $_POST['categories']);

            $date = date('Y-m-d');




            $sql = "INSERT INTO `dubai_sponsorship_reg_2024`(`fname`,`lname`,`phone_number`,`email`,`job_title`,`company`,`location`,`categories`,`status`,`added_date`) VALUES ('$fname','$lname','$phonenumber','$email','$job','$company','$location','$categories','1','$date');";
            $query = mysqli_query($con, $sql) or die(mysqli_error($con));
            if ($query) {
                $id = mysqli_insert_id($con);
                $sendmail = sendmail($fname, $lname, $phonenumber, $email, $job, $company, $location, $categories);
                echo "<script>window.location='sponsorship-enquiry-form?status=1'</script>";
            }
        }
    } else {
        $error .= "Robot verification failed, please try again. <br />";
        echo "<script>window.location='sponsorship-enquiry-form.php'</script>";
    }
} else {

    $error .= "Please click on the reCAPTCHA box. <br />";
    echo "<script>window.location='sponsorship-enquiry-form.php?status=0'</script>";
}

function sendmail($fname, $lname, $phonenumber, $email, $job, $company, $location, $categories)
{

    $subject = "ShipTek 2024 Dubai - Sponsorship Enquiry";

    $body = '<!DOCTYPE html>

  <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ShipTek 2024 Dubai - Sponsorship Enquiry </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    

    <body style="background-color: #F2F3F5;">

        <div style="background-color: #F2F3F5;">
            <div style="font-family: Arial, Helvetica, sans-serif;max-width: 650px;display: block;margin: 0 auto;margin-bottom: 50px;border-top: 2px dashed #ccc;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                <div style="background: #7ea8d8; padding: 30px;">
                    <img src="http://shiptekmaritimeevents.com/shiptek-2024/pics/logos/logo.png"  alt="" style="margin: 0 auto;display: block;padding: 6px 0px;width:350px;height:62px;">
                </div>
                <div style="background-color: white;padding: 5px 30px 30px 30px;">
                    
                    <p style="margin-bottom: 20px;">
                        Hi Admin,
                    </p>
                    <p style="line-height: 25px;text-align: justify;">

                          A Sponsorship Enquiry has been submitted via website under ShipTek 2024 Dubai. Please find the details:
                    </p>

                                                                                                                            
                    <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Name : ' . $fname . ' ' . $lname . '</h3>
                    <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 10px;">Email : <a href="mailto:' . $email . '">' . $email . '</a></h3>
                     <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 24px;">Company : 
                     ' . $company . '</h3>
                     <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 24px;">Phone Number : ' . $phonenumber . '</h3>
                      
                     
                      
                      
                     <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 24px;">Location : 
                     ' . $location . '</h3>
                      <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 24px;">Job : ' . $job . '</h3>
                    
                      
                      <h3 style="border-bottom: solid 1px #eee;padding-bottom: 15px;margin-top: 0px;opacity: 0.7;font-size: 15px;color: #000000;text-align: left;line-height: 24px;">Category : 
                      ' . $categories . '</h3>
                       
                          
                      
</p>

                    
                </div>
                <div style="background-color: #7ea8d8;padding: 15px;">
                    <p style="margin: 0px;font-size: 14px;color: white;opacity: 1;text-align: center;">Thank you...!</p>
                </div>
            </div>
        </div>
    </body>

</html>';

    $mail = new PHPMailer(true);


    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    //Set the hostname of the mail server
    $mail->Host = "mail.shiptek20.com";
    //Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 25;
    //Whether to use SMTP authentication
    //$mail->SMTPSecure = 'ssl';

    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication
    $mail->Username = "esol@shiptek20.com";
    //Password to use for SMTP authentication
    $mail->Password = "kZL00yzzCH?e";
    //Set who the message is to be sent from
    $from = "esol@shiptek20.com";

    //    $mail->addAddress($address);


    //$mail->addAddress("krishnendu@ariesesolutions.com"); 
    //$mail->addAddress("anagha.p@ariesesolutions.com");
    //$mail->addAddress("basil@ariesesolutions.com");
    $mail->addAddress("eventmanager@ariesgroupglobal.com");
    $mail->addBCC("ashish.g@ariesgroupglobal.com");

    $mail->setFrom($from, 'ShipTek 2024 Dubai');

    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->IsHTML(true);
    if ($mail->Send()) {
        $maill = new PHPMailer(true);


        //Tell PHPMailer to use SMTP
        $maill->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $maill->SMTPDebug = 0;
        //Ask for HTML-friendly debug output
        $maill->Debugoutput = 'html';
        //Set the hostname of the mail server
        $maill->Host = "mail.shiptek20.com";
        //Set the SMTP port number - likely to be 25, 465 or 587
        $maill->Port = 25;
        //Whether to use SMTP authentication
        //$mail->SMTPSecure = 'ssl';

        $maill->SMTPAuth = true;
        //Username to use for SMTP authentication
        $maill->Username = "esol@shiptek20.com";
        //Password to use for SMTP authentication
        $maill->Password = "kZL00yzzCH?e";
        //To attach brochure with the mail
        //$maill->addAttachment("assets/files/ShipTek- Brochure-2022.pdf");
        //Set who the message is to be sent from
        $from = "esol@shiptek20.com";


        $message = '<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ShipTek 2024 Dubai - Sponsorship Enquiry </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    

    <body style="background-color: #F2F3F5;">

        <div style="background-color: #F2F3F5;">
            <div style="font-family: Arial, Helvetica, sans-serif;max-width: 650px;display: block;margin: 0 auto;margin-bottom: 50px;border-top: 2px dashed #ccc;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
                <div style="background: #7ea8d8; padding: 30px;">
                    <img src="http://shiptekmaritimeevents.com/shiptek-2024/pics/logos/logo.png"  alt="" style="margin: 0 auto;display: block;padding: 6px 0px;width:350px;height:62px;">
                </div>
                <div style="background-color: white;padding: 5px 30px 30px 30px;">
                    
                    <p style="margin-bottom: 20px;">
                        Dear ' . $fname . ' ' . $lname . ', 
                    </p>
                    <p style="line-height: 25px;text-align: justify;">
    Your Sponsorship Enquiry has been successfully submitted via website under ShipTek 2024 Dubai.
                         
                    </p>

                  
                          
                      
</p>

                    
                </div>
                <div style="padding: 20px;background: #fff; display:flex;">
                         
                 <!-- <img src="https://insuretek.org/assets/images/sponsors/Sponsor-banner.jpg"  alt="" style="width:100%;margin: 0 auto;display: block;padding: 6px 0px;"> -->
               
            
                </div>

                <div style="background-color:#7ea8d8;padding: 15px;">
                    <p style="margin: 0px;font-size: 14px;color: white;opacity: 1;text-align: center;">Thank you...!</p>
                </div>
            </div>
        </div>
    </body>

</html>';


        $maill->addAddress($email);
        $maill->setFrom($from, 'ShipTek 2024 Dubai');

        $maill->Subject = "ShipTek 2024 Dubai - Sponsorship Enquiry";
        $maill->Body = $message;
        $maill->IsHTML(true);
        $maill->Send();
    }
}
