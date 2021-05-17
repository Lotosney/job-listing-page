<?php include 'inc/header.php'; ?>

<h2 class="page-header"><h2><?php echo $job->job_title; ?></h2> (<?php echo $job->location; ?>)</h2>
	<small>Zamieszczone przez <?php echo $job->contact_user; ?> dnia <?php echo $job->post_date; ?></small>
	<hr>
    <ul class="list-group">
		<li class="list-group-item"><strong>Firma:</strong> <?php echo $job->company; ?></li>
        <li class="list-group-item"><strong>Miejsce:</strong> <?php echo $job->location; ?></li>
		<li class="list-group-item"><strong>Pensja:</strong> <?php echo $job->salary; ?></li>
		<li class="list-group-item"><strong>Email Kontaktowy:</strong> <?php echo $job->contact_email; ?></li>
	</ul>
	<p class="lead"><?php echo $job->description; ?></p>

	<br><br>
	<a href="index.php">Go Back</a>
	<br><br>
<?php include 'inc/footer.php'; ?>