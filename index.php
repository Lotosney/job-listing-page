  
<?php require_once 'config/init.php'; ?>

<?php

$job = new Job;
$template = new Template('templates/frontpage.php');

$template->title="Latest Jobs";
$template->jobs = $job->getAllJobs();
$template->categories = $job->getCategories();
$template->locations = $job->getLocations();
$category = isset($_GET['category']) ? $_GET['category'] : null;
$location = isset($_GET['location']) ? $_GET['location'] : null;
// $categoryLocation =isset($_GET['category'])&&$_GET['location']? $_GET['category']&&$_GET['location'] : null;
 if($category){
	$template->jobs = $job->getJobsByCategory($category);
	$template->title = 'Praca w '. $job->getCategory($category)->name;
} else if($location){
	$template->jobs = $job->getJobsByLocation($location);
	$template->title = 'Praca w '. $job->getLocation($location)->name;
} else {
	$template->title = 'Ostatnie oferty';
	$template->jobs = $job->getAllJobs();
}

echo $template;