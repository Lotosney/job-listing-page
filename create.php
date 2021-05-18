<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
	$data['job_title'] = $_POST['job_title'];
	$data['company'] = $_POST['company'];
	$data['category_id'] = $_POST['category'];
	$data['description'] = $_POST['description'];
	// $data['location'] = $_POST['location'];
    $data['location_id'] = $_POST['location'];
	$data['salary'] = $_POST['salary'];
	$data['contact_user'] = $_POST['contact_user'];
	$data['contact_email'] = $_POST['contact_email'];

	if($job->create($data)){
		redirect('index.php', 'Twoje ogłoszenie zostało dodane', 'success');
	} else {
		redirect('index.php', 'Coś poszło nie tak', 'error');
	}
}

$template = new Template('templates/job-create.php');
$template->locations = $job->getLocations();
$template->categories = $job->getCategories();

echo $template;