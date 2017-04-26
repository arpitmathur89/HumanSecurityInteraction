<?php
include 'database.php';

// create a variable
$org_name = isset($_POST['entity']) ? $_POST['entity'] : "N/A";
$target = isset($_POST['target']) ? $_POST['target'] : "N/A";
$target_datatype = !empty($_POST['check_list1']) ? implode(',', (array)$_POST['check_list1']) : "N/A";
$relation = isset($_POST['relation']) ? $_POST['relation'] : "N/A";
$motive = !empty($_POST['check_list2']) ? implode(',', (array)$_POST['check_list2']): "N/A";
$malware_type = !empty($_POST['check_list3']) ? implode(',', (array)$_POST['check_list3']): "N/A";
$malware_name = isset($_POST['malware_name']) ? $_POST['malware_name'] : "N/A";
$system_type = isset($_POST['system_type']) ? $_POST['system_type'] : "N/A";
$malware_source = !empty($_POST['check_list4']) ? implode(',', (array)$_POST['check_list4']): "N/A";
$browser_type = !empty($_POST['check_list5']) ? implode(',', (array)$_POST['check_list5']): "N/A";
$date1 = isset($_POST['date']) ? $_POST['date'] : "01/01/2000";
$date = date("Y-m-d", strtotime($date1) );
$description = isset($_POST['description']) ? $_POST['description'] : "N/A";
$contact_name = isset($_POST['contact_name']) ? $_POST['contact_name'] : "N/A";
$sources = isset($_POST['sources']) ? $_POST['sources'] : "N/A";

//Execute the query


mysqli_query($mysqli,"INSERT INTO incident (org_name,target,datatype,relation,motive,malwaretype,malwarename,systemtype,malwaresource,browsertype,date,description,contactname,sources) VALUES ('$org_name','$target','$target_datatype','$relation','$motive','$malware_type','$malware_name','$system_type','$malware_source','$browser_type','$date','$description','$contact_name','$sources')");
				
	if(mysqli_affected_rows($mysqli) > 0){
	echo "<p style='text-align: center; color:green;'>Incident is Added!!</p>";
	echo "<div style='text-align:center'><a style='text-align: center;' href='testform.php'>Add Another Incident</a></div>";
} else {
	echo "Incident NOT Added<br />";
	echo mysqli_error ($mysqli);
}

$mysqli->close();
