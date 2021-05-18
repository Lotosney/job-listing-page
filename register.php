<?php include_once 'config/init.php'; ?>

<?php
$user = new User;

if(isset($_POST['submit'])){

	$company =  trim($_POST['company']);
    $email = trim($_POST['contact_email']);
    $password = trim($_POST['password']);






	$data = array();
	$data['company'] = $company;
	$data['contact_email'] = $email;
	$data['password'] = $password;
	if($user->create($data)){
		redirect('index.php', 'Twoje konto zostało dodane', 'Sukces');
	} else {
		redirect('index.php', 'Coś poszło nie tak', 'Błąd');
	}
}

$template = new Template('templates/register-page.php');


echo $template;