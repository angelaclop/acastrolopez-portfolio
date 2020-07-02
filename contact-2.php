<?php
$title = "Angela Castro - Thank you!"; 
require('includes/header.php');
 ?>
	<body class='homeBody'>
        <a href="" id="anchor-header"></a>
        <?php
require('includes/nav.php');
 ?>
        <main class="SecContactPage">
<?php

//Code from https://www.freecontactform.com/email_form.php

if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contact@angela-castro.com";
    $email_subject = "Contact Request";
}
    function died($error) {
        // your error code can go here
        echo "Please complete all the required fields to continue ";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // optional
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($message) <2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
            <div id="thankYou-contact">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 34.775">
                <path class="envelope" id="Path_75" data-name="Path 75" d="M4874.082,4956.507v25.339h70v-32.775l-33.584,21.041-36.416-21.041h58.5" transform="translate(-4873.082 -4948.071)" fill="none" stroke="#474747" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
              </svg>
                <p>Thank you for contacting me!</p>
                <p> I'll get back to you soon.</p>
                <a href="index.php">
                    <span>home</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.27" height="13" viewBox="0 0 19.273 15.828">
                        <g id="Group_6" data-name="Group 6" transform="translate(1 1.414)">
                          <path id="Path_17" data-name="Path 17" d="M7649.8,297.466h17.273l-6.478-6.533" transform="translate(-7649.801 -290.933)" fill="none" stroke="#474747" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                          <path id="Path_18" data-name="Path 18" d="M7655.9,293.875l-3.135,3.083" transform="translate(-7641.914 -283.958)" fill="none" stroke="#474747" stroke-linecap="round" stroke-width="2"/>
                        </g>
                      </svg>
                </a>
              </div>
        </main>
<?php
require('includes/footer.php');
 ?>