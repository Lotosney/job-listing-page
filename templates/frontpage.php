<?php include 'inc/header.php'; ?>
<div class="jumbotron">
  <h1>Oferty</h1>
  <form method="GET" action="index.php">
    <select name="category" class="form-control">
      <option value="0">Wybierz kategorie</option>
      <?php foreach ($categories as $category) : ?>
        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
      <?php endforeach; ?>
    </select>
    <h4>lub</h4>
    <select name="location" class="form-control">
      <option value="0">Wybierz miejsce</option>
      <?php foreach ($locations as $location) : ?>
        <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
      <?php endforeach; ?>
    </select>
    <br>


    <br>
    <input type="submit" class="btn btn-lg btn-success" value="Szukaj">
  </form>


  </form>
</div>


<?php foreach ($jobs as $job) : ?>
  <div class="row marketing">
    <div class="col-md-10">
      <h4><?php echo $job->job_title; ?></h4>
      <p><?php echo $job->description; ?></p>
    </div>
    <div class="col-md-2">
      <a class="btn btn-dark" href="job.php?id=<?php echo $job->id; ?>">Szczegóły</a>
    </div>
  </div>
<?php endforeach; ?>


</div>
<?php include 'inc/footer.php'; ?>