<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
    $username = $_POST['username'];
    $username = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    //if (password_verify($password, $user['password']))
    if ($password == $user['password']) {
        $_SESSION['username'] = $user['username'];
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Password Salah.";
    }
} else {
    echo "Username tidak ditemukan.";
}

}
?>  