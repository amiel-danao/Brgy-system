<?php 

    include('include/admin/header.php'); 
    include('include/function/config.php'); 
?>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
    <?php include('include/admin/sidebar.php'); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                                <div class="header-button-item mr-0 js-sidebar-btn d-lg-none">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>

            <?php include('include/admin/sidebar2.php'); ?>
            <!-- END HEADER DESKTOP-->

            <section class="au-breadcrumb m-t-100">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left mx-auto">
                                      <h2 class="text-center">Users Account Form</h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            
            <?php 

            // require 'PHPMailer/PHPMailerAutoload.php';

            // if (isset($_POST['email']))
            // {
            //     function sendmail($to, $from, $fromname, $body)
            //     {
            //         $mail = new PHPMailer();
            //         $mail->setFrom($from, $fromname);
            //         $mail->addAddress($to);
            //         $mail->Subject = "Password for your account in OBIS system";  
            //         $mail->Body = $body;
            //         $mail->isHTML(false);

            //         return $mail->send();          
            //     }
            //             $body =   $_POST['userusername'];
            //             $fromname = "OBIS.com"; 
            //             $from = "elimpasan@gmail.com";
            //             $to =  $_POST['emailuser'];

            //         if(sendmail($to, $from, $fromname, $body))
            //         {

            //             echo "success";
            //         }
            //         else {
            //             echo "error";
            //         }
            // }
          //  use PHPMailer\PHPMailer\PHPMailer;
// require 'PHPMailer/PHPMailerAutoload.php';

// $mail = new PHPMailer();

// $mail->SMTPDebug = 2;                               // Enable verbose debug output
// //$mail->CharSet = 'utf-8';
// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
//                            // SMTP password
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465;    

// $mail->Username = "OBISDILG@gmail.com";                 // SMTP username
// $mail->Password = "OBIS@DILG@15";                                // TCP port to connect to

// $mail->setFrom("OBISDILG@gmail.com", "OBIS ADMIN");
// $mail->addAddress("OBISDILG@gmail.com", "ERICSON");     // Add a recipient
// // $mail->addAddress('ellen@example.com');               // Name is optional
// // $mail->addReplyTo('ericsonlimpasan@gmail.com', 'Information');


// // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }

//              ?>






             <?php 



              ?>
             <div class="main-contents m-t-30">
                <div class="section__content section__content--p20">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>User Account Information</strong>
                                    </div>
                                    <div class="card-body card-block">
    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" name="accountcreation">
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="userusername" class=" form-control-label">Username</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="userusername" name="userusername" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="emailuser" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="emailuser" name="emailuser" class="form-control" required>
                    </div>
                </div>
            

                <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm" 
                name="email">
                <i class="fa fa-dot-circle-o"></i> CREATE
                </button>
                </div>
                </form>
                                    </div>
                                </div>
                            </div>                  
                    </div>
                </div>
            </div>
    </div>                 
                                <!-- END DATA TABLE -->
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class="copyright bg-light">
                                     <p>Copyright © <?php echo date("Y") ?> Maragondon Cavite. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Jquery JS-->
<?php include('include/admin/footer.php'); ?>