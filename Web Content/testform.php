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
<!-- Form -->

		<form action="process.php" method="post">
		
		 <div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="text-center">INCIDENT FORM</h3>
			</div>
		<div class = "panel-body">		
		 <div class="form-group">
			<label for="entity">Organization Name</label>
			<input type="text" name="entity" class="form-control" id="entity" placeholder="Enter your organization name">
		 </div>
		 <div class="form-group">
			<label for="target">Target</label>
			<input type="text" name="target" class="form-control" id="target" placeholder="Target">
		 </div>
		 
			<div class="form-group">
		
			<label for="target">Target Datatype</label>
				<div class="panel panel-default">
					<div class="panel-body">
				<div class="row">
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Application
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Email
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Database
							</label>					
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Security System
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Personal file system
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Host file system
							</label>					
					</div>
				</div>
				</div>
				</div>	
				</div>
		<div class="form-group">
			<label for="relation">Hacker Relation to target</label>
			<input type="text" class="form-control" id="relation" placeholder="Relation eg. friend, colleague">
		 </div>
		 
		 <div class="form-group">
		
			<label for="motive">Motive</label>
				<div class="panel panel-default">
					<div class="panel-body">
				<div class="row">
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Entitled
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Sabotage
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Conflict of interest
							</label>					
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Intrusion
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Just because I can
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Espionage
							</label>					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Re-selling data
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Revenge
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Ransom
							</label>					
					</div>
				</div>	

				</div>
				</div>
				</div>
		 
		 <div class="form-group">
		
			<label for="motive">Malware Used type</label>
				<div class="panel panel-default">
					<div class="panel-body">
				<div class="row">
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Virus
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Worm
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Adware
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Spyware
							</label>					
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Crapware
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Trojan Horse
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Ransomware
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Jsmalware
							</label>					
					</div>
				</div>				
				</div>
				</div>
				</div>
		<div class="form-group">
			<label for="manlwareName">Malware Name</label>
			<input type="text" class="form-control" id="manlwareName">
		 </div>
		 <div class="form-group">
			<label for="systemType">System Type</label>
			<input type="text" class="form-control" id="systemType">
		 </div>
		
		<div class="form-group">
		
			<label for="motive">Malware Source</label>
				<div class="panel panel-default">
					<div class="panel-body">
				<div class="row">
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Phishing
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Trusted Source
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Website
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Notes
							</label>					
					</div>
				</div>
		</div>
		</div>
		</div>
		
		<div class="form-group">
		
			<label for="motive">Browser Type</label>
			<div class="panel panel-default">
					<div class="panel-body">
				<div class="row">
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Chrome
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Internet Explorer
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Firefox
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="option1" id="inlineCheckbox1"> Safari
							</label>					
					</div>
				</div>
		</div>
			</div>
			</div>
		<div class="form-group">
			<label for="dates">Date</label>
			<input type="text" class="form-control" id="dates">
		 </div>
		 <div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" type="text" name="description" rows="3"></textarea>
		 </div>
		<div class="form-group">
			<label for="contactName">Contact Name</label>
			<input type="text" class="form-control" id="contactName">
		 </div>
		 <div class="form-group">
			<label for="sources">Sources</label>
			<input type="text" class="form-control" id="sources">
		 </div>	
		<div class="text-center">	
		  <button type="submit" class="btn btn-primary">Submit</button>
		  </div>
		  </div>
		  </div>
		  
		</form>
	</div>
	<div class="col-md-2"></div>
	
</div>	
<!-- FORM -->

<!--
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
</form> -->
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

 /*
$to = 'contactus@humancarinteraction.com';
$name = $_POST['Name'];
$email = $_POST['Email'];
$comment = $_POST['Comment'];
$subject = 'the subject';
$headers .= 'From: CONTACT_US <'.$email.'>' . "\r\n";
$message = 'FROM: '.$name.'  Email: '.$email.'  Message: '.$comment;
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message) or die('Error sending Mail'); //This method sends the mail.
} */
?>
</body>
</html>