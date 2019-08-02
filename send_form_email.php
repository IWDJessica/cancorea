<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "jhtda123@gmail.com";
    $email_subject = "Contact Us";
 

    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // required
    $website = $_POST['website']; // not required
    $comments = $_POST['comments']; // required
  
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "1.Name: ".clean_string($name)."\n";
    $email_message .= "2.Email: ".clean_string($email_from)."\n";
    $email_message .= "3.Telephone: ".clean_string($telephone)."\n";
    $email_message .= "4.Web site: ".clean_string($website)."\n";
    $email_message .= "5.Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<script>alert('Thank you for contacting us. We will be in touch with you very soon.');</script>

Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>
