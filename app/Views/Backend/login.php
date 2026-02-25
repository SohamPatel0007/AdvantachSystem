<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<h2>Admin Login</h2>

<?php if(isset($_SESSION['error'])): ?>
    <p style="color:red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
<?php endif; ?>

<form method="POST" action="/admin/auth/login">
    <input type="hidden" name="csrf" value="<?php echo Security::csrf(); ?>">

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>