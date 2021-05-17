<?php include 'inc/header.php'; ?>
<div class="jumbotron">
  <h1>Find A Job</h1>
  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
</div>


<?php foreach($jobs as $job): ?>
      	<div class="row marketing">
	        <div class="col-md-10">
	          <h4><?php echo $job->job_title; ?></h4>
	          <p><?php echo $job->description; ?></p>     
	        </div>
	        <div class="col-md-2">
	        		<a class="btn btn-dark" href="job.php?id=<?php echo $job->id; ?>">View</a>
	        </div>
        </div>  
        <?php endforeach; ?>    


</div>
<?php include 'inc/footer.php'; ?>