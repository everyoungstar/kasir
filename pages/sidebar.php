<div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="../admin/dashboard.php">
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../barang/data-barang.php">
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

    <style>
        * {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    display: flex;
}

.sidebar {
    position: sticky;
    top: 0;
    left: 0;
    bottom: 0;
    width: 110px;
    height: 100vh;
    padding: 0 1.7rem;
    color: #fff;
    overflow: hidden;
    transition: all 0.5s linear;
    background: rgba(113, 99, 186, 255);
}

.sidebar:hover {
    width: 240px;
    transition: 0.5s;
}
    </style>