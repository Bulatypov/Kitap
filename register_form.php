<?php 
require_once('settings.php'); 

// О нет!! переменная connect_errno существует, а это значит, что соединение не было успешным!
if ($mysqli->connect_errno) {
    // Соединение не удалось. Что нужно делать в этом случае? 
    // Можно отправить письмо администратору, отразить ошибку в журнале, 
    // информировать пользователя об ошибке на экране и т.п.
    // Вам не нужно при этом раскрывать конфиденциальную информацию, поэтому
    // просто попробуем так:
    echo "Извините, возникла проблема на сайте";

    // На реальном сайте этого делать не следует, но в качестве примера мы покажем 
    // как распечатывать информацию о подробностях возникшей ошибки MySQL
    echo "Ошибка: Не удалась создать соединение с базой MySQL и вот почему: \n";
    echo "Номер ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";
    
    // Вы можете захотеть показать что-то еще, но мы просто выйдем
    exit;
}

if(!(isset($_POST['name']) && 
   isset($_POST['login']) &&
   isset($_POST['sex']) &&
   isset($_POST['date']) &&
   isset($_POST['city']) &&
   isset($_POST['email']) &&
   isset($_POST['password'])))
{
     header("Location: /register.php");
     die();
}

$name = $_POST['name'];
$login = $_POST['login'];
$sex = $_POST['sex'];
$date = date("Y-m-d", strtotime($_POST['date']));
$city = $_POST['city'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users (name, login, sex, date, city, email, password) VALUES ('$name', '$login', $sex, '$date', '$city', '$email', '$password')";

$result = $mysqli->query($query);

if(!$result)
{
    echo $mysqli->error;
    die();
}

$query = "SELECT user_id FROM users WHERE login='$login' AND password='$password'";
$result = $mysqli->query($query);
$user = $result->fetch_assoc();
session_start();
$_SESSION['user_id'] = $user['user_id'];
header("Location: /cabinet.php");
?>