<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../asset/favicon-32x32.png">
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="#">
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../pages/data-barang.php">
                    <span>Data Barang</span>
                </a>
            </li>
            <li>
                <a href="../pages/pembelian.php">
                    <span>Pembelian</span>
                </a>
            </li>
            <li>
                <a href="../pages/data-pengguna.php">
                    <span>Data Pengguna</span>
                </a>
            </li>
            <li class="logout">
                <a href="../config/logout.php">
                    <span>Log Out</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                <input type="text" placeholder="Search">
                </div>
                <img src="" alt="">
            </div>
        </div>
    </div>
</body>
</html>