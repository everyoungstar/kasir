<?php
include "../pages/sidebar.php";
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

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                <input type="text" placeholder="Search">
                </div>
                <img src="../asset/proie-removebg-preview.png" alt="">
            </div>
        </div>
    <div class="card--container">
        <h3 class="main--title">Latest Data</h3>
        <div class="card--wrapper">
            <div class="data--card red">
            <div class="card--header">
            <div class="amount">
            <span class="title">Data Barang</span>
            <div class="amount--value">
            <?php
				include '../config/koneksi.php';
				$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
				$jumlah_produk = mysqli_num_rows($data_produk);
				?>
				<h3><?php echo $jumlah_produk; ?></h3>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>

    
    </div>
</body>
</html>