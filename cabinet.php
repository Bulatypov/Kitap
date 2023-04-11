<?php 
require_once('load_user.php'); 
require_once('settings.php'); 
$login = true;

if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    echo "Ошибка: Не удалась создать соединение с базой MySQL и вот почему: \n";
    echo "Номер ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";
    exit;
}

$query = "SELECT * FROM users WHERE user_id=$user_id";
$result = $mysqli->query($query);
$user = $result->fetch_assoc();

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
        <link href="../css/cabinet.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <body>
        <?php require_once('header.php'); ?>
            <main>
                <div class="container container_user">
                    <?php 
                        if($_GET['book_was_successfully_added'] == 1){
                            echo '<div class="alert alert-dismissible fade show" role="alert" style="border: none; background-color: #caffc7;">
                            <h5 class="alert-heading">Книга успешно добавлена!</h5>
                            <p style="font-size: 0.9rem;">Ваше произведение сейчас находится на стадии проверки. Мы добавим его в скором времени, а потом вы и другие читатели сможете насладиться чудесной книгой!</p>
                            <hr>
                            <p class="mb-0" style="font-size: 0.9rem;">А пока можете <a href="add_book.php" style="text-decoration: underline; color: darkgreen;"> <strong style="color: #155724;">добавить ещё одну книгу</strong></a> или <a href="genres.php" style="text-decoration: underline; color: darkgreen;"> <strong style="color: #155724;">почитать уже добавленные произведения</strong></a></p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>';
                        }
                    
                    ?>
                    <div class="row">

                        <div class="col-md-5" style="justify-content: center; text-align: center;">
                            <div class="avatar">
                                <img class="rounded-circle" src="images/avatars/<?php echo $user['avatar']; ?>" width="190" height="190">
                                <div class="text_team" style="margin-top: 5%;">
                                    <h5><?php echo $user['name']; ?></h5>
                                    <h6 class="text-muted">
                                        <?php
                                        $datetime = new DateTime($user['date']);
                                        $interval = $datetime->diff(new DateTime(date("Y-m-d")));
                                        echo $interval->format("%Y");?> лет, <?php echo $user['city']; ?></h6>
                                </div>
                            </div>
                            <div class="statistics container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item_statistics"><b>
        <?php
        $query = "SELECT favourite FROM users WHERE user_id=$user_id";
        if ($result = $mysqli->query($query)) {
                /* извлечение ассоциативного массива */
                $favourite_str = $result->fetch_assoc()['favourite'];
                $favourite = explode(",",  $favourite_str);
                $row_cnt = count($favourite);
                if($favourite_str==""){
                    $row_cnt--;
                }
                 echo $row_cnt;   
    /* удаление выборки */
    $result->free();
        }
                                            
            ?>
                                            
                                            </b>
                                            <p>книг в избранных</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item_statistics"><b>
        <?php
        $login = $user['login'];
        $query = "SELECT * FROM books WHERE user_author='$login'";
        if ($result = $mysqli->query($query)) {
                /* извлечение ассоциативного массива */
            $row_cnt = $result->num_rows;
            echo $row_cnt;
    /* удаление выборки */
    $result->free();
        } ?></b>
                                            <p>книг добавлено</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item_statistics"><b>X</b>
                                            <p>рецензий на книги</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text_about_user">
                                <p style="text-aling: left;">"<?php echo $user['quote']; ?>"</p>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-7">

                            <nav class="navbar navbar-expand-lg navbar-light user_nav">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item <?php 
                                        if($_GET['page']=='favourite' || !(isset($_GET['page'])))
                                           {
                    echo 'active';} ?>">
                                            <a class="nav-link" href="cabinet.php?page=favourite">Избранное&nbsp♥</a>
                                        </li>
                                        <li class="nav-item <?php if($_GET['page']=='added'){
                    echo 'active';} ?>">
                                            <a class="nav-link" href="cabinet.php?page=added">Добавленное&nbsp+</a>
                                        </li>
                                        <li class="nav-item <?php if($_GET['page']=='settings'){
                    echo 'active';} ?>">
                                            <a class="nav-link" href="cabinet.php?page=settings">Настройки&nbsp<strong>⚙</strong></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                    
                            
                          
                            
                            
                            
                            
                            
                            
                            
                            
                            
    <?php 
            
           if($_GET['page']=='favourite' || !(isset($_GET['page']))){
                    echo '<div class="hs__wrapper">
    <ul class="hs">';
        $query = "SELECT favourite FROM users WHERE user_id=$user_id";
        if ($result = $mysqli->query($query)) {
                /* извлечение ассоциативного массива */
            $row_cnt = $result->num_rows;
            $favourite_str = $result->fetch_assoc()['favourite'];
            
            if($favourite_str==""){
                 echo '<p style="margin-left: 2em; color: #363636; font-size: 1.2rem; ";>Здесь будут находиться ваши любимые книги. </p>';
            }
            else{
                $favourite = explode(",",  $favourite_str);
                foreach($favourite as $value){
                    $query = "SELECT * FROM books WHERE book_id=$value";
                    $result = $mysqli->query($query);
                    $book = $result->fetch_assoc();
                    echo '<li class="hs__item"> <a href="book.php?book_id=';
                    echo $book['book_id'];
                    echo '">';
                    echo '<img class="hs__item__image" src="books/books_img/';
                    echo $book['img'];
                    echo '" alt=""/> </a> <div class="hs__item__description"><span class="hs__item__title">';
                    echo $book['name'];
                    echo '</span><span class="hs__item__subtitle">';
                    echo $book['author'];
                    echo '</span></div> </li>';
                    
                }
                
                
                
            }
    /* удаление выборки */
    $result->free();
        }
        
    echo '</ul>
                   
                     <a class="read_online-button" href="/all_books.php?type=favourite">
                                            <div class="face-primary">
                                                Все Избранные
                                            </div>

                                            <div class="face-secondary">
                                               ♥
                                            </div>

                                        </a>              

  </div>    
           ';                   
}
                            
                            
                            
                

        if($_GET['page']=='added'){
                    echo '<div class="hs__wrapper">
    <div class="hs__header">
      <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
    </div>
    <ul class="hs">';
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
                 echo '<li class="hs__item"> <a href="book.php?book_id=';
                    echo $added_book['book_id'];
                    echo '">';
                    echo '<img class="hs__item__image" src="books/books_img/';
                echo $added_book['img'];
                echo '" alt=""/> </a> <div class="hs__item__description"><span class="hs__item__title">';
                echo $added_book['name'];
                echo '</span><span class="hs__item__subtitle">';
                echo $added_book['author'];
                echo '</span></div> </li>';
                }
            }
    /* удаление выборки */
    $result->free();
        }
    echo '</ul>

                     <a class="read_online-button" href="/all_books.php?type=added">
                                            <div class="face-primary">
                                                Все Добавленные
                                            </div>

                                            <div class="face-secondary">
                                               +
                                            </div>

                                        </a>              

  </div>    
           ';                   
}

    if($_GET['page']=='settings'){
                    echo '<div class="hs__wrapper">

                             <div class="container_fluid book_add_container">
                    <form method="POST" enctype="multipart/form-data" action="edit_user_form.php">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="book_cover">
                                    <img class="book_cover_icon" src="images/One_User_Orange.png">
                                    <input id="book_cover" type="file" name="avatar" multiple>
                                    <label for="book_cover" style="margin-top: 1em;">Выберите файл новой аватарки (.JPEG .PNG)</label>
                                </div>
                                <div class="book_name">
                                    <label>Изменить ФИ:</label>
                                    <input type="text" name="user_name" value="';
                                echo $user['name'];
                                echo '">
                                </div>
                                <div class="book_author" style="margin-top: 1em;">
                                    <label>Изменить Город:</label>
                                    <input type="text" name="user_city" class="author_book" value="';
                                 echo $user['city'];
                                echo '">
                                </div>
                                <div class="book_name">
                                    <label>Изменить Дату Рождения:</label>
                                    <input type="date" name="user_date" value="';
                                echo  $user['date'];
                                echo '">
                                </div>
                                <div class="book_describe">
                                    <label>Изменить информацию о себе:</label>
                                    <textarea type="text" name="user_quote">';
                                echo $user['quote'];
                                echo '</textarea>
                                </div>
                                <div class="genre" style="margin-top: 0.5em;">
                                    <label>Изменить Пароль:</label>
                                    <input type="text" name="user_password" class="genre" value="';
                                echo $user['password'];
                                echo '">
                                </div>
                            </div>
                        </div>
                    <div class="row" style="justify-content: center;">
                        <a href="">
                            <button class="button_enter" type="submit">Сохранить</button>
                        </a>
                    </div>
                    </form>

                </div>

                            </div>';
    }
    ?>

                        </div>
                    </div>

                    <div class="row" style="background-color: #fff8e7; border-radius: 12px; padding: 2em; margin-top: 2em;">
                        <p>Вы можете  <a href="add_book.php" class="book_add_icon">добавить свою книгу или книгу, которой ещё нет</a> в нашей библиотеке</p>
                        
                    </div>
                    
                    <div class="row" style="margin-top: 1em; text-align: center; justify-content: flex-end;
">
                                    <a class="read_online-button" href="logout_form.php">
                                            <div class="face-primary">
                                                Выйти
                                            </div>

                                            <div class="face-secondary">
                                               X
                                            </div>

                                        </a>   
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
                <script src="js/index.js"></script>
                <script>
                    const button = document.querySelector('.button_add');
                    const submit = document.querySelector('.submit');

                    function toggleClass() {
                        this.classList.toggle('active_add');
                    }

                    function addClass() {
                        this.classList.add('finished');
                    }

                    button.addEventListener('click', toggleClass);
                    button.addEventListener('transitionend', toggleClass);
                    button.addEventListener('transitionend', addClass);
                </script>
                <script>
                    // work in progress - needs some refactoring and will drop JQuery i promise :)
                    var instance = $(".hs__wrapper");
                    $.each(instance, function(key, value) {

                        var arrows = $(instance[key]).find(".arrow"),
                            prevArrow = arrows.filter('.arrow-prev'),
                            nextArrow = arrows.filter('.arrow-next'),
                            box = $(instance[key]).find(".hs"),
                            x = 0,
                            mx = 0,
                            maxScrollWidth = box[0].scrollWidth - (box[0].clientWidth / 2) - (box.width() / 2);

                        $(arrows).on('click', function() {

                            if ($(this).hasClass("arrow-next")) {
                                x = ((box.width() / 2)) + box.scrollLeft() - 10;
                                box.animate({
                                    scrollLeft: x,
                                })
                            } else {
                                x = ((box.width() / 2)) - box.scrollLeft() - 10;
                                box.animate({
                                    scrollLeft: -x,
                                })
                            }

                        });

                        $(box).on({
                            mousemove: function(e) {
                                var mx2 = e.pageX - this.offsetLeft;
                                if (mx) this.scrollLeft = this.sx + mx - mx2;
                            },
                            mousedown: function(e) {
                                this.sx = this.scrollLeft;
                                mx = e.pageX - this.offsetLeft;
                            },
                            scroll: function() {
                                toggleArrows();
                            }
                        });

                        $(document).on("mouseup", function() {
                            mx = 0;
                        });

                        function toggleArrows() {
                            if (box.scrollLeft() > maxScrollWidth - 10) {
                                // disable next button when right end has reached 
                                nextArrow.addClass('disabled');
                            } else if (box.scrollLeft() < 10) {
                                // disable prev button when left end has reached 
                                prevArrow.addClass('disabled')
                            } else {
                                // both are enabled
                                nextArrow.removeClass('disabled');
                                prevArrow.removeClass('disabled');
                            }
                        }

                    });
                </script>
    </body>

    </html>