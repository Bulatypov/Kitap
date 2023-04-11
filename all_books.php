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

if($_GET['type'] == "favourite" || $_GET['type'] == "added"){
    $login = true;
    require_once('load_user.php');
$query = "SELECT * FROM users WHERE user_id=$user_id";
$result = $mysqli->query($query);
$user = $result->fetch_assoc();
}
else{
    $genres = true;
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>КИТАП – первая онлайн-библиотека татарской литературы</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reboot.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/all_books.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <?php require_once('header.php'); ?>

    <main>
        <div class="container" style="margin-top: 3em; background-color: white; border-radius: 12px; padding-left: 3em; padding-right:3em; padding-top: 1%; padding-bottom:1em; border: 8px solid #feb386;
    border-radius: 18px;
    border-style: double; ">
            <div class="row" style="justify-content: center; text-align: center;">
            <?php   if($_GET['type']=='added') echo '<h2>Все добавленные книги</h2>'; 
                    else if($_GET['type']=='favourite') echo '<h2>Все избранные книги</h2>';
                    else{
                        echo '<h2>Все книги жанра "';
                        echo $_GET['type'];
                        echo '" </h2>';
                    }
            ?>
            </div>
            
            <div class="row" style="justify-content: center; margin-top: 1em;">        
         
                
        
                
            <?php 
                
            if($_GET['type']=='added'){
                
                $login = $user['login'];
                $query = "SELECT * FROM books WHERE user_author='$login'";
                if ($result = $mysqli->query($query)) {
                /* извлечение ассоциативного массива */
            $row_cnt = $result->num_rows;
            if($row_cnt==0){
                 echo '<p style="margin-left: 2em; color: #363636; font-size: 1.2rem; ";>Здесь будут находиться книги, добавленные вами. </p>';
            }
            else{
                while ($added_book = $result->fetch_assoc()) {
                
                    echo '<div class="col-md-3 hs__item" style="width:100%;">';
                     echo '<a href="book.php?book_id=';
                    echo $added_book['book_id'];
                    echo '">';
                    echo '<div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/';
                    echo $added_book['img'];
                    echo '" alt=""/></div>';
                     echo '</a>';
        echo '<div class="hs__item__description"><span class="hs__item__title">';
                    echo $added_book['name'];
                    echo '</span><span class="hs__item__subtitle">';
                    echo $added_book['author'];
                    echo '</span></div>';
                    echo'</div> ';
                }
            }
    /* удаление выборки */
    $result->free();
        }
            }
                
                
                
            else if($_GET['type']=='favourite'){
                
                $query = "SELECT favourite FROM users WHERE user_id='$user_id'";
                if ($result = $mysqli->query($query)) {
                /* извлечение ассоциативного массива */
            $favourite_str = $result->fetch_assoc()['favourite'];
            if($favourite_str==""){
                 echo '<p style="margin-left: 2em; color: #363636; font-size: 1.2rem; ";>Здесь будут находиться ваши избранные книги. </p>';
            }
            else{
                   
                    $favourite = explode(",", $favourite_str);
                    foreach($favourite as $value)
                    {
                        $query = "SELECT * FROM books WHERE book_id=$value";
                        $result = $mysqli->query($query);
                        $favourite_book = $result->fetch_assoc();
                    echo '<div class="col-md-3 hs__item" style="width:100%;">';
                echo '<a href="book.php?book_id=';
                    echo $favourite_book['book_id'];
                    echo '">';
                        echo '<div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/';
                    echo $favourite_book['img'];
                    echo '" alt=""/></div>';
                        echo '</a>';
        echo '<div class="hs__item__description"><span class="hs__item__title">';
                    echo $favourite_book['name'];
                    echo '</span><span class="hs__item__subtitle">';
                    echo $favourite_book['author'];
                    echo '</span></div> </div> ';
                    
                }
            }
    /* удаление выборки */
    $result->free();
        }
            }
                
                
                
                
              else{  
                  $genre = $_GET['type'];
                $query = "SELECT * FROM books WHERE genre='$genre' ORDER BY RAND()";
                if ($result = $mysqli->query($query)) {
                /* извлечение ассоциативного массива */
                while ($book = $result->fetch_assoc()) {    
                    echo '<div class="col-md-3 hs__item" style="width:100%;">';
                     echo '<a href="book.php?book_id=';
                    echo $book['book_id'];
                    echo '">';
                    echo '<div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/';
                    echo $book['img'];
                    echo '" alt=""/></div>';
                     echo '</a>';
        echo '<div class="hs__item__description"><span class="hs__item__title">';
                    echo $book['name'];
                    echo '</span><span class="hs__item__subtitle">';
                    echo $book['author'];
                    echo '</span></div>';
                    echo'</div> ';
                }
    /* удаление выборки */
    $result->free();
        }
              }  
                
                
                     ?>
                
                
        
            </div>
        </div>
    </main>

    <?php require_once('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
</body>

</html>