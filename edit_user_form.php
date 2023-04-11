<?php 
require_once('load_user.php'); 
require_once('settings.php'); 
if(!isset($user_id)){
    header('Location: /login.php');
    die();
}

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



$user_name = $_POST['user_name'];
$user_city = $_POST['user_city'];
$user_date = $_POST['user_date'];
$user_quote = $_POST['user_quote'];
$user_password = $_POST['user_password'];
$img_path = $_FILES['avatar']['name'];

move_uploaded_file($_FILES['avatar']['tmp_name'], './images/avatars/' . $img_path);

if($user_name!=''){
    $query = "UPDATE users SET name='$user_name' WHERE user_id=$user_id";
    $mysqli->query($query);
}
if($user_city!=''){
    $query = "UPDATE users SET city='$user_city' WHERE user_id=$user_id";
    $mysqli->query($query);
}
if($user_date!=''){
    $query = "UPDATE users SET date='$user_date' WHERE user_id=$user_id";
    $mysqli->query($query);
}
if($user_quote!=' '){
    $query = "UPDATE users SET quote='$user_quote' WHERE user_id=$user_id";
    $mysqli->query($query);
}
if($user_password!=''){
    $query = "UPDATE users SET password='$user_password' WHERE user_id=$user_id";
    $mysqli->query($query);
}
if($img_path!=''){
    $query = "UPDATE users SET avatar='$img_path' WHERE user_id=$user_id";
    $mysqli->query($query);
}
header("Location: /cabinet.php?page=favourite");
?>