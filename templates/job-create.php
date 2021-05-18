<?php include 'inc/header.php'; ?>
<h2 class="page-header">Zamieść ogłoszenie</h2>
<form method="post" action="create.php" onsubmit="return checkCreateForm()">
    <div class="form-group">
        <label>Firma</label>
        <input type="text" class="form-control" name="company">
    </div>
    <div class="form-group">
        <label>Kategoria</label>
        <select class="form-control" name="category">
            <option value="0">Wybierz kategorie</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Nazwa stanowiska</label>
        <input type="text" class="form-control" name="job_title">
    </div>
    <div class="form-group">
        <label>Opis stanowiska</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <div class="form-group">
        <label>Miejsce</label>
        <select name="location" class="form-control">
      <option value="0">Wybierz miejsce</option>
      <?php foreach ($locations as $location) : ?>
        <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
      <?php endforeach; ?>
    </select>
    </div>
    <!-- <div class="form-group">
			<label>Miejsce</label>
			<input type="text" class="form-control" name="location">
		</div> -->
    <div class="form-group">
        <label>Pensja</label>
        <input type="text" class="form-control" name="salary">
    </div>
    <div class="form-group">
        <label>Zamieszczony przez</label>
        <input type="text" class="form-control" name="contact_user">
    </div>
    <div class="form-group">
        <label>Mail kontaktowy</label>
        <input type="text" class="form-control" name="contact_email">
    </div>
    <input type="submit" class="btn btn-dark" value="Submit" name="submit">
</form>
<?php include 'inc/footer.php'; ?>