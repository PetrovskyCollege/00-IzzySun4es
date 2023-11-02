<?php
// Подключение к базе данных MySQL
$host = "localhost"; // Замените на свой хост
$username = "root"; // Замените на своего пользователя
$password = ""; // Замените на свой пароль
$database = "cooking_bd"; // Замените на свою базу данных

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

// Обработка запроса
if (isset($_GET['query'])) {
    $query = $connection->real_escape_string($_GET['query']);

    // Выполнение SQL-запроса для поиска
    $sql = "SELECT * FROM recipes WHERE title LIKE '%$query%' OR ingredients LIKE '%$query%'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Результаты поиска:</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "<p>{$row['title']}</p>";
        }
    } else {
        echo "Нет результатов по вашему запросу.";
    }
}

$connection->close();
?>