<?php
session_start();

// Redirect if the admin is not logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: ras_admin_login.php');
    exit;
}

// Display the dashboard
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="icon" href="img/admin-icon.png" type="image/x-icon">

    <style>
        /* CSS for Admin Dashboard */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .dashboard-container {
            text-align: center;
        }

        h1 {
            font-size: 2em;
            color: #333;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        li {
            margin: 10px 0;
        }

        a {
            display: block;
            padding: 15px 30px;
            background-color: #196F3D;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1em;
            text-align: center;
            width: 200px;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        a:hover {
            background-color: #0B3D0B;
        }

    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome, <?= htmlspecialchars($_SESSION['username']) ?></h1>
        
        <ul>
            <li><a href="ras_cancel_app.php">Cancel Reservation</a></li>
            <li><a href="ras_student_list.php">Student Management</a></li>
            <li><a href="ras_lab_list.php">Lab Management</a></li>
            <li><a href="ras_change_admin_list.php">Admin Management</a></li>
            <li><a href="ras_admin_logout.php">Logout</a></li>
        </ul>
    </div>
</body>
</html>
