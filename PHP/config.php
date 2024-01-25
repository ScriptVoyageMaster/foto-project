<?php
$host = 'your_host';  // Хост бази даних
$username = 'your_username';  // Ім'я користувача бази даних
$password = 'your_password';  // Пароль користувача бази даних
$dbname = 'your_dbname';  // Ім'я бази даних

// Створення з'єднання
$conn = new mysqli($host, $username, $password, $dbname);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Помилка з'єднання: " . $conn->connect_error);
}
?>
