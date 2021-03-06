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
								<input type="checkbox" name="check_list1[]" class="form-check-input" value="Application" id="inlineCheckbox1"> Application
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list1[]" class="form-check-input" value="Email" id="inlineCheckbox1"> Email
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list1[]" class="form-check-input" value="Database" id="inlineCheckbox1"> Database
							</label>					
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list1[]" class="form-check-input" value="Security System" id="inlineCheckbox1"> Security System
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list1[]" class="form-check-input" value="Personal file system" id="inlineCheckbox1"> Personal file system
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list1[]" class="form-check-input" value="Host file system" id="inlineCheckbox1"> Host file system
							</label>					
					</div>
				</div>
				</div>
				</div>	
				</div>
		<div class="form-group">
			<label for="relation">Hacker Relation to target</label>
			<input type="text" name="relation" class="form-control" id="relation" placeholder="Relation eg. friend, colleague">
		 </div>
		 
		 <div class="form-group">
		
			<label for="motive">Motive</label>
				<div class="panel panel-default">
					<div class="panel-body">
				<div class="row">
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list2[]" class="form-check-input" value="Entitled" id="inlineCheckbox1"> Entitled
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list2[]" class="form-check-input" value="Sabotage" id="inlineCheckbox1"> Sabotage
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list2[]" class="form-check-input" value="Conflict of interest" id="inlineCheckbox1"> Conflict of interest
							</label>					
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list2[]" class="form-check-input" value="Intrusion" id="inlineCheckbox1"> Intrusion
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list2[]" class="form-check-input" value="Just because I can" id="inlineCheckbox1"> Just because I can
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list2[]" class="form-check-input" value="Espionage" id="inlineCheckbox1"> Espionage
							</label>					
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list2[]" class="form-check-input" value="Re-selling data" id="inlineCheckbox1"> Re-selling data
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list2[]" class="form-check-input" value="Revenge" id="inlineCheckbox1"> Revenge
							</label>					
					</div>
					<div class="col-md-4">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list2[]" class="form-check-input" value="Ransom" id="inlineCheckbox1"> Ransom
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
								<input type="checkbox" name="check_list3[]" class="form-check-input" value="Virus" id="inlineCheckbox1"> Virus
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list3[]" class="form-check-input" value="Worm" id="inlineCheckbox1"> Worm
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list3[]" class="form-check-input" value="Adware" id="inlineCheckbox1"> Adware
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list3[]" class="form-check-input" value="Spyware" id="inlineCheckbox1"> Spyware
							</label>					
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="Crapware" id="inlineCheckbox1"> Crapware
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list3[]" class="form-check-input" value="Trojan Horse" id="inlineCheckbox1"> Trojan Horse
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list3[]" class="form-check-input" value="Ransomware" id="inlineCheckbox1"> Ransomware
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list3[]" class="form-check-input" value="Jsmalware" id="inlineCheckbox1"> Jsmalware
							</label>					
					</div>
				</div>				
				</div>
				</div>
				</div>
		<div class="form-group">
			<label for="manlwareName">Malware Name</label>
			<input type="text" name="malware_name" class="form-control" id="manlwareName">
		 </div>
		 <div class="form-group">
			<label for="systemType">System Type</label>
			<input type="text" name="system_type" class="form-control" id="systemType">
		 </div>
		
		<div class="form-group">
		
			<label for="motive">Malware Source</label>
				<div class="panel panel-default">
					<div class="panel-body">
				<div class="row">
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list4[]" class="form-check-input" value="Phishing" id="inlineCheckbox1"> Phishing
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list4[]" class="form-check-input" value="Trusted Source" id="inlineCheckbox1"> Trusted Source
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list4[]" class="form-check-input" value="Website" id="inlineCheckbox1"> Website
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list4[]" class="form-check-input" value="Notes" id="inlineCheckbox1"> Notes
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
								<input type="checkbox" name="check_list5[]" class="form-check-input" value="Chrome" id="inlineCheckbox1"> Chrome
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list5[]" class="form-check-input" value="Internet Explorer" id="inlineCheckbox1"> Internet Explorer
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list5[]" class="form-check-input" value="Firefox" id="inlineCheckbox1"> Firefox
							</label>					
					</div>
					<div class="col-md-3">						
							<label class="form-check-label">
								<input type="checkbox" name="check_list5[]" class="form-check-input" value="Safari" id="inlineCheckbox1"> Safari
							</label>					
					</div>
				</div>
		</div>
			</div>
			</div>
		<div class="form-group">
			<label for="dates">Date (mm/dd/yyyy)</label>
			<input type="text" pattern="\d{1,2}/\d{1,2}/\d{4}" class="datepicker" name="date" value="" />
			<!--<input type="text" name="date" class="form-control" id="dates"> -->
		 </div>
		 <div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" name="description" type="text" rows="3"></textarea>
		 </div>
		<div class="form-group">
			<label for="contactName">Contact Name</label>
			<input type="text" name="contact_name" class="form-control" id="contactName">
		 </div>
		 <div class="form-group">
			<label for="sources">Sources</label>
			<input type="text" name="sources" class="form-control" id="sources">
		 </div>	
		<div class="text-center">	
		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		  </div>
		  </div>
		  </div>
		  
		</form>
	</div>
	<div class="col-md-2"></div>
	
</div>	
<!-- FORM -->

</body>
</html>