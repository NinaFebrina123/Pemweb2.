<?php
//tangkap input login
$email = $_POST['email'];
$password = $_POST['password'];

// validasi login
if ($email == 'ninafebrina03@gmail.com' && $password == 'nina123') {
    header('Location: dashboard.php');
} else {
    echo "Login Gagal";
}