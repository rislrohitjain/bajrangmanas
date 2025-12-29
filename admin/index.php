<?php
session_start();
include '../db_config.php'; // Move your DB connection variables to a central file or copy them here

if (isset($_SESSION['admin_logged_in'])) {
    header("Location: dashboard.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = $_POST['password'];
	$q = "SELECT * FROM admins WHERE username='$user'";
    $result = $conn->query("SELECT * FROM admins WHERE username='$user'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
		// print_r(md5($pass));die;
		// print_r($row['password']);
		// die;
        if (md5($pass) == $row['password']) {
            $_SESSION['admin_logged_in'] = true;
            header("Location: dashboard.php");
        } else { $error = "Invalid Password"; }
    } else { $error = "Admin not found"; }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>body{ background: #f4f4f4; display: flex; align-items: center; height: 100vh; }</style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 card p-4 shadow">
            <h3 class="text-center">Admin Login</h3>
            <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
            <form method="POST">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>