<!DOCTYPE html>
<html lang="en">
<head>
  <title>Human Security Interaction</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/validator.js"></script>
  
	<script>
    $(document).ready(function(){
     
    $('#snd').click(function(){
		$.post("contactus.php", $("#contactusFrm").serialize(),  function(response) {
			$('#valitateText').html("Email sent successfully");
			$("#Name").val("");
			$("#Email").val("");
			$("#Message").val("");
			$('#success').hide('slow');
    	});
    	return false;
     
    });
     
    });
    </script>

</head>


<body style="overflow:hidden;">
<div id="valitateText" style="color:#FF0000;"></div>
<form name="contactusFrm" id="contactusFrm" method="post" role="form">
    <div class="form-group">
      <label for="usr">Your Name<span class="star">(*)</span> :</label>
      <input type="text" class="form-control" id="Name" name="Name">
    </div>
    <div class="form-group">
      <label for="usr">Your Email<span class="star">(*)</span> :</label>
      <input type="text" class="form-control" id="Email" name="Email">
    </div>
    <div class="form-group">
      <label for="comment">Your Message<span class="star">(*)</span> :</label>
  	  <textarea class="form-control" rows="5" id="Comment" name="Comment"></textarea>
    </div>
    <div class="form-group">
    <input type="button" id="snd" class="btn btn-info pgbtn" value="Send" />
    </div>
</form>
<script language="JavaScript" type="text/javascript"
  xml:space="preserve">
  /*var frmvalidator  = new Validator("contactusFrm");
  frmvalidator.addValidation("Name","req","Please enter your Name");
  
  frmvalidator.addValidation("Email","maxlen=50");
  frmvalidator.addValidation("Email","req");
  frmvalidator.addValidation("Email","email","Please enter your Email");
 
  frmvalidator.addValidation("Comment","req","Please enter your Message");*/
</script>

<?php

 
$to = 'contactus@humancarinteraction.com';
$name = $_POST['Name'];
$email = $_POST['Email'];
$comment = $_POST['Comment'];
$subject = 'the subject';
$headers .= 'From: CONTACT_US <'.$email.'>' . "\r\n";

$message = 'FROM: '.$name.'  Email: '.$email.'  Message: '.$comment;

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message) or die('Error sending Mail'); //This method sends the mail.
}
?>
</body>
</html>