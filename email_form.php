<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A web developer who loves building stuff people like.">
    <meta name="author" content="Rich Abdill">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Rich Abdill | IT Tinkerer</title>

    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Allan' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/abdill.css" rel="stylesheet">

<!-- smooth scrolling -->

<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type='text/javascript' src="js/bootstrap.js"></script>
<script type='text/javascript' src="js/abdill.js"></script>

  </head>

<body id="top">


    <div class="container" >

      <div class="row marketing">
        <div class="col-lg-12">
          <h2 id="about">Emailing Rich</h2>
          


<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "iam@richabdill.com";
 
    $email_subject = "FROM THE WEBSITE RICO";
 
     
 
     
 
    function died($error) {
        echo "Uh oh. ";
        echo $error."<br /><br />";
        die();
     }
 
 
    if(
 
        !isset($_POST['message'])) {
 
        died("Looks like you didn't actually include a message, friend.");       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email = $_POST['email']; // required
 
    $message = $_POST['message']; // required

    $test = $_POST['test']

    if($test != "4") died("You didn't answer the anti-spam question correctly, friend. Or should I say... ROBOT?!")
 
     
 
    $error_message = "";
 

 
 

 
  if(strlen($message) < 2) {
 
    $error_message .= 'The message you entered does not appear to be valid.<br />';
 
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
 
    $email_message .= "Email: ".clean_string($email)."\n";
    
    $email_message .= "Message: ".clean_string($message)."\n";

// create email headers
 
$headers = "From: iam@richabdill.com \r\n".
 
"Reply-To: iam@richabdill.com \r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
<p>It worked! Thanks for your message:<br>
<?php echo $message ?>

 
 
 
<?php
 
}
 
?><br><br>
<a class="btn btn-primary" href="/">Back home</a>
        </div>
    </div>
   </div>


  </body>
</html>































