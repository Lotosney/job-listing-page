  
<?php require_once 'config/init.php'; ?>

<?php

$job = new Job;
$template = new Template('templates/frontpage.php');

$template->title="Latest Jobs";
$template->jobs = $job->getAllJobs();
$template->categories = $job->getCategories();
$category = isset($_GET['category']) ? $_GET['category'] : null;
if($category){
	$template->jobs = $job->getJobsByCategory($category);
	$template->title = 'Jobs In '. $job->getCategory($category)->name;
} else {
	$template->title = 'Latest Jobs';
	$template->jobs = $job->getAllJobs();
}

echo $template;