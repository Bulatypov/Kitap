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


if(!(isset($_POST['name_book']) && 
   isset($_POST['author_book']) &&
   isset($_POST['describe_book']) &&
   isset($_POST['genre_book']) &&
   isset($_POST['language_book'])))
{
     header("Location: /add_book.php?error=1");
     die();
}

$name_book = $_POST['name_book'];
$author_book = $_POST['author_book'];
$describe_book = $_POST['describe_book'];
$genre_book = $_POST['genre_book'];
$language_book = $_POST['language_book'];

$img_path = $_FILES['book_img']['name'];
$text_path = $_FILES['book_text']['name'];

move_uploaded_file($_FILES['book_img']['tmp_name'], './books_unchecked/books_img/' . $img_path);
move_uploaded_file($_FILES['book_text']['tmp_name'], './books_unchecked/books_text/' . $text_path);

$query = "SELECT login FROM users WHERE user_id=$user_id";
$result = $mysqli->query($query);
$user = $result->fetch_assoc();
$user_author = $user['login'];

$query = "INSERT INTO books_unchecked (name, author, briefly, genre, language, user_author, img, text) VALUES ('$name_book', '$author_book', '$describe_book', '$genre_book', '$language_book', '$user_author', '$img_path', '$text_path')";

$result = $mysqli->query($query);
if(!$result)
{
    echo $mysqli->error;
    die();
}
header("Location: /cabinet.php?book_was_successfully_added=1&page=favourite");
?>