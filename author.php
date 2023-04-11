<?php 
require_once('load_user.php'); 
require_once('settings.php');
$authors = true;


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
$author_id = $_GET['author_id'];
$query = "SELECT * FROM authors WHERE author_id=$author_id";
$result = $mysqli->query($query);
$author = $result->fetch_assoc();

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
        <link href="../css/author.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>

    <body>
        <?php require_once('header.php'); ?>
            <main>
                <div class="container container_book">
                    <div class="row"  style="justify-content: center;">
                        <h2> <?php echo $author['author_name'] ?> </h2>
                        <h3>  <span class="text-muted ml-3"><?php echo $author['author_life_years'] ?> </span> </h3>
                    </div>
                    <div class="row" style="margin-top: 2em;">
                        <div class="col-md-4">
                            <img class="featurette-image img-fluid book_img mx-auto" src="../authors/authors_img/<?php echo $author['author_img']?>">
                        <!--
                            <div class="star-rating">
                                <div class="star-rating__wrap">
                                    <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5" checked>
                                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                                    <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                                    <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                                    <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                                    <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                                </div>
                            </div>
                            -->
                            
                        </div>

                        <div class="col-md-8">
                            <div class="container container_book_describe">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2><?php echo $book['name']?></h2>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 1em;">
                                    <div class="col-md-12">
                                        <table class="book_characteristic">
                                            <tr>
                                                <td>ПОЛНОЕ ИМЯ:</td>
                                                <td><?php echo $author['author_fullname']?></td>
                                            </tr>
                                            <tr>
                                                <td>ЖАНРЫ:</td>
                                                <td>
                                                 <?php
                            $author_name = $author['author_name'];
$query = "SELECT DISTINCT genre FROM books WHERE author = '$author_name'";
$result = $mysqli->query($query);
$count = mysqli_num_rows($result);
while ($book = $result -> fetch_assoc()){
    echo $book['genre'];
    if($count>1) {
        echo ', ';
    }
    $count--;
}

                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ЯЗЫКИ:</td>
                                                <td>Татарский</td>
                                            </tr>
                                            <tr>
                                                <td>ПРОИЗВЕДЕНИЙ НА САЙТЕ:</td>
                                                <td>
                                                <?php
                            $author_name = $author['author_name'];
$query = "SELECT * FROM books WHERE author = '$author_name'";
$result = $mysqli->query($query);
$count = mysqli_num_rows($result);
echo $count;
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>МЕСТО РОЖДЕНИЯ:</td>
                                                <td><?php echo $author['author_city']?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="read_online-button" href="#read_online">
                                            <div class="face-primary">
                                                Читать
                                            </div>

                                            <div class="face-secondary">
                                                🢃
                                            </div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 book_briefly">
                            <h2>Биография</h2>
                           <pre><?php include('authors/authors_biography/' . $author['author_biography'])?></pre>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 book_of_author">
                            <h2 id="read_online" class="author_books_title">Произведения этого автора</h2>
                            
                            
                            
                            
                            <?php
                                $author_name = $author['author_name'];
                                $query = "SELECT DISTINCT genre FROM books WHERE author='$author_name'";
                                $result = $mysqli->query($query);
                                if ($result = $mysqli->query($query)) {
                /* извлечение ассоциативного массива */
                while ($genre = $result->fetch_assoc()) {
                $genre_name = $genre['genre'];
                $query = "SELECT * FROM books WHERE genre='$genre_name' AND author='$author_name'";
                $result1 = $mysqli->query($query);
                echo '<div class="hs__wrapper">
                        <div class="hs__header">
                            <h2 class="hs__headline">';
                echo $genre['genre'];
                echo '</h2>
                        <div class="hs__arrows"><a class="arrow disabled arrow-prev"><img src="images/right-arrow-car-genres.png"> </a><a class="arrow arrow-next"><img src="images/right-arrow-car-genres.png"></a></div> </div> <ul class="hs">';
                        
                while ($genre_book = $result1->fetch_assoc()) {
                     echo '<li class="hs__item"> <a href=book.php?book_id=';
                     echo $genre_book['book_id'];
                     echo '> <img class="hs__item__image" src="books/books_img/';
                    echo $genre_book['img'];
                    echo '" alt=""/> </a> <div class="hs__item__description"><span class="hs__item__title">';
                    echo $genre_book['name'];
                    echo '</span><span class="hs__item__subtitle">';
                    echo $genre_book['author'];
                    echo '</span></div> </li>';
                }
                echo '</ul> </div>';
                }
                $result->free();
        }                  
                        
        ?>
                            
                            
                            
                            
                            

                        </div>
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
                <script src="../js/index.js"></script>
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
$.each( instance, function(key, value) {
    
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
      x = ((box.width() / 2)) - box.scrollLeft() -10;
      box.animate({
        scrollLeft: -x,
      })
    }
      
  });
    
  $(box).on({
    mousemove: function(e) {
      var mx2 = e.pageX - this.offsetLeft;
      if(mx) this.scrollLeft = this.sx + mx - mx2;
    },
    mousedown: function(e) {
      this.sx = this.scrollLeft;
      mx = e.pageX - this.offsetLeft;
    },
    scroll: function() {
      toggleArrows();
    }
  });

  $(document).on("mouseup", function(){
    mx = 0;
  });
  
  function toggleArrows() {
    if(box.scrollLeft() > maxScrollWidth - 10) {
        // disable next button when right end has reached 
        nextArrow.addClass('disabled');
      } else if(box.scrollLeft() < 10) {
        // disable prev button when left end has reached 
        prevArrow.addClass('disabled')
      } else{
        // both are enabled
        nextArrow.removeClass('disabled');
        prevArrow.removeClass('disabled');
      }
  }
  
});
        </script>
    </body>

    </html>