<?php
/*
//require_once 'connect.php';

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "users";

$conn = mysqli_connect('localhost','root','','meridian');
// Создание соединения
//$conn = new mysqli($servername, $username, $password, $dbname);
// Проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Получение данных POST-запроса
$username = $_POST["username"];
$password = $_POST["password"];

// Поиск пользователя в базе данных
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Проверка наличия пользователя в базе данных
if ($result->num_rows > 0) {
  echo "User found!";
} else {
  echo "User not found!";
}

$conn->close();*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meridian";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$p_key = $_POST["p_key"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE p_key='$p_key' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Authorized";
} else {
  echo "Unauthorized";
}

$conn->close();

?>