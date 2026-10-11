<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="max-width: 500px;">
        <div class="card" style="text-align: center;">
            <h2>Dashboard</h2>
            <p style="margin-bottom: 20px;">Welcome back, <strong><?= htmlspecialchars($_SESSION['username']) ?></strong>!</p>
            <p style="margin-bottom: 20px; color: #6b7280; font-size: 14px;">You have successfully logged into your account.</p>
            <a href="logout.php" class="btn" style="display: inline-block; text-decoration: none; background-color: #ef4444;">Log Out</a>
        </div>
    </div>
</body>
</html>