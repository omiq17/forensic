<?php
if(isset($_POST['submit'])){
    $myemail = 'info@data-recovery-pro.net';//<-----Put Your email address here.
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $subject = "Mail from an user";
    $message = $_POST['message'];
    $mobile = $_POST['mobile'];
    $problem = $_POST['problem'];
    $client = $_POST['client'];
    $to = $myemail;
    $email_subject = $subject;
    $email_body = "Name: ". $name . "\n".
                            "Mobile No.:" .$mobile. "\n".                       
                            "Problem:" .$problem. "\n".                        
                            "Client:". $mobile. "\n".                    
                            "Message:". $message;                        
    $headers = "From: $email_address\n";
    $headers .= "Reply-To: $myemail";
    // echo $to,$email_subject, $email_body, $headers;
    // die();
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: confirm.html');
};
?>