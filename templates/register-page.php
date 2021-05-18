<?php include 'inc/header.php'; ?>
<h2 class="page-header">Zarejestruj się</h2>
<form method="post" action="register.php" onsubmit="return checkCreateForm()">
    <div class="form-group">
        <label>Firma</label>
        <input type="text" class="form-control" name="company">
        <span class="invalid-feedback"></span>
    </div>
    <div class="form-group">
        <label>Mail kontaktowy</label>
        <input type="email" class="form-control" name="contact_email">
        <span class="invalid-feedback"></span>
    </div>
    <div class="form-group">
        <label>Hasło</label>
        <input type="password" class="form-control" name="password" placeholder="Hasło">
        <span class="invalid-feedback"></span>
    </div>
    <div class="form-group">
        <label>Powtórz Hasło</label>
        <input type="password" class="form-control" name="confirmPassword" placeholder="Potwierdź hasło">
        <span class="invalid-feedback"></span>
    </div>

    <input type="submit" class="btn btn-dark" value="Submit" name="submit">
</form>
<?php include 'inc/footer.php'; ?>