<?php
    $name = $_POST['name'];
    $subjects = $_POST['subject'];
    $emailid = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $formcontent="From: $name \n Mobile: $mobile \n Message: $message";
    $mailTo = "info@softovations.com";
    $subject = "$subjects";
    $mailheader = "From: $emailid \r\n" ;
    $mailsent = mail($mailTo, $subject, $formcontent, $mailheader);
    if($mailsent == true){ ?> <script language="javascript" type="text/javascript">
          alert('Thank you for Enquiry. We will contact you As soon as possible.');
        window.location = 'contact.php';
        </script>
      <?php  }else { ?>
        <script language="javascript" type="text/javascript">
            alert('Message not sent');
            window.loaction = 'contact.php';
            </script>
         <?php
        }
?>