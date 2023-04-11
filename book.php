<?php 
require_once('load_user.php'); 
require_once('settings.php'); 

$genres = true;


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
$book_id = $_GET['book_id'];
$query = "SELECT * FROM books WHERE book_id=$book_id";
$result = $mysqli->query($query);
$book = $result->fetch_assoc();

if(isset($user_id)){
    $query = "SELECT favourite FROM users WHERE user_id=$user_id";
$result = $mysqli->query($query);
$favourite_str = $result->fetch_assoc()['favourite'];
$favourite_arr = explode(",", $favourite_str);
if(in_array($book_id, $favourite_arr)){
    $_GET['book_added_to_favourite']=1;
}
}



if (isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
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
        <link href="../css/book.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>

    <body>
        <?php require_once('header.php'); ?>
            <main>
                <div class="container container_book">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="featurette-image img-fluid book_img mx-auto" src="../books/books_img/<?php echo $book['img']?>">
                            <!--
                            <div class="star-rating">
                                <div class="star-rating__wrap">
                                    <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                                    <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4" checked>
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
                            <?php 
                            if(isset($user_id)){
                                if($_GET['book_added_to_favourite']==1){
                                   echo '<button class="button_add finished">
                                    <span class="submit">Добавить в ❤</span>
                                    <span class="loading"><i class="fa fa-refresh"></i></span>
                                    <span class="check"><i class="fa fa-heart"></i></span>
                            </button>';
                                    
                                $query = "SELECT favourite FROM users WHERE user_id=$user_id";
                                $result = $mysqli->query($query);
                                $new_favourite_str = $result->fetch_assoc()['favourite'];
                                $new_favourite_arr = explode("," ,  $new_favourite_str);
                                
                                if(!(in_array($book_id, $new_favourite_arr))){
                                    array_push($new_favourite_arr, $book_id);
                                    $new_favourite_str = implode(",", $new_favourite_arr);
                                    $new_favourite_str = ltrim($new_favourite_str, ",");
                                    $query = "UPDATE users SET favourite='$new_favourite_str' WHERE user_id=$user_id";
                                    $mysqli->query($query);
                                }
                                
                                    
                                   
                                }
                                else{
                                    $book_id = $book['book_id'];
                                    echo "<a href=\"/book.php?book_added_to_favourite=1&book_id=$book_id\">
                            <button class=\"button_add\">
                                <span class=\"submit\">Добавить в ❤</span>
                                <span class=\"loading\"><i class=\"fa fa-refresh\"></i></span>
                                <span class=\"check\"><i class=\"fa fa-heart\"></i></span>
                            </button>
                            </a>  ";
                                }
                            }
                                 
                            else{
                                 echo "<a href=\"/login.php\">
                            <button class=\"button_add\">
                                <span class=\"submit\">Добавить в ❤</span>
                                <span class=\"loading\"><i class=\"fa fa-refresh\"></i></span>
                                <span class=\"check\"><i class=\"fa fa-heart\"></i></span>
                            </button>
                            </a>  ";
                            }
                            
                        ?>
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
                                                <td>АВТОР:</td>
                                                <td><?php echo $book['author']?></td>
                                            </tr>
                                            <tr>
                                                <td>ЯЗЫК КНИГИ:</td>
                                                <td><?php echo $book['language']?></td>
                                            </tr>
                                            <tr>
                                                <td>ЖАНР:</td>
                                                <td><?php echo $book['genre']?></td>
                                            </tr>
                                            <tr>
                                                <td>ЯЗЫК ОРИГИНАЛЬНОЙ КНИГИ:</td>
                                                <td><?php echo $book['language_original']?></td>
                                            </tr>
                                            <tr>
                                                <td>КОЛИЧЕСТВО СТРАНИЦ:</td>
                                                <td><?php echo $book['size_of_book(pages)']?></td>
                                            </tr>
                                            <tr>
                                                <td>ДОБАВИЛ ПОЛЬЗОВАТЕЛЬ:</td>
                                                <td><?php echo $book['user_author']?></td>
                                            </tr>
                                            <tr>
                                                <td>ПРОЧИТАНО:</td>
                                                <td><?php echo $book['views']?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="read_online-button" href="#read_online">
                                            <div class="face-primary">
                                                Читать онлайн
                                            </div>

                                            <div class="face-secondary">
                                                🢃
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dropdown">
                                            <button class="dropbtn">
                                                <span class="icon fa fa-cloud"></span> Скачать</button>
                                                <div class="dropdown-content">
                                                    <?php 
                                                    if(file_exists('books/books_text/books_pdf/' . $book['text'] . '_tat.pdf')){
                                                        echo ' <a href="books/books_text/books_pdf/';
                                                        echo $book['text'] . '_tat.pdf';
                                                        echo'" download="">.pdf';
                                                        echo ' (' . round(filesize('books/books_text/books_pdf/' . $book['text'] . '_tat.pdf')/1024, 2) . ' КБ)';
                                                        echo'<span><img class="format_icon" src="images/pdf.webp"></span></a>';
                                                    }
                                                    
                                                    if(file_exists('books/books_text/books_epub/' . $book['text'] . '_tat.epub')){
                                                        echo ' <a href="books/books_text/books_epub/';
                                                        echo $book['text'] . '_tat.epub';
                                                        echo '" download="">.epub';
                                                        echo ' (' . round(filesize('books/books_text/books_epub/' . $book['text'] . '_tat.epub')/1024, 2) . ' КБ)';
                                                        echo'<span><img class="format_icon" src="images/epub.svg"></span></a>';
                                                    }
                                            
                                                    if(file_exists('books/books_text/books_fb2/' . $book['text'] . '_tat.fb2')){
                                                        echo ' <a href="books/books_text/books_fb2/';
                                                        echo $book['text'] . '_tat.fb2';
                                                        echo '" download="">.fb2'; 
                                                        echo ' (' . round(filesize('books/books_text/books_fb2/' . $book['text'] . '_tat.fb2')/1024, 2) . ' КБ)';
                                                        echo'<span><img class="format_icon" src="images/fb2.png"></span></a>';
                                                    }
                                            
                                                    if(file_exists('books/books_text/books_txt/' . $book['text'] . '_tat.txt')){
                                                        echo ' <a href="books/books_text/books_txt/';
                                                        echo $book['text'] . '_tat.txt';
                                                        echo '" download="">.txt';
                                                        echo ' (' . round(filesize('books/books_text/books_txt/' . $book['text'] . '_tat.txt')/1024, 2) . ' КБ)';
                                                        echo '<span><img class="format_icon" src="images/Txt%20file.svg"></span></a>';
                                                    }
                                                    ?>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
<?php 
                if($book['briefly']!=""){
                    echo '<div class="row">
                        <div class="col-md-12 book_briefly">
                            <h4>О книге:</h4>
                            <p>';
                    echo $book['briefly'];
                    echo '</p>
                        </div>
                        </div>
                    ';
                }
?>         
                    <?php
                            $author = $book['author'];
                            $query = "SELECT * FROM books WHERE author='$author' ORDER BY RAND()";
                            $result = $mysqli->query($query);
                            $kol = 0;
                            while ($book = $result->fetch_assoc()){
                                $kol++;
                            }
                            if($kol>1){
                            if ($result = $mysqli->query($query)) {
                                echo ' <div class="row">
                        <div class="col-md-12 another_book_of_author">
                            <div class="container_car">';
                            echo '<div class="hs__wrapper">';
                            
                           echo '<div class="hs__header">
                            <h2 class="hs__headline">';
                            echo 'Другие произведения этого автора';
                        echo '</h2>
                        <div class="hs__arrows"><a class="arrow disabled arrow-prev"><img src="images/right-arrow-car-genres.png"> </a><a class="arrow arrow-next"><img src="images/right-arrow-car-genres.png"></a></div> </div>';    
                            
                            echo '<ul class="hs">';    
                                
                /* извлечение ассоциативного массива */
                        while ($book = $result->fetch_assoc()) {
                            if($book['book_id'] != $book_id){
                     echo '<li class="hs__item"> <a href=book.php?book_id=';
                     echo $book['book_id'];
                     echo '> <img class="hs__item__image" src="books/books_img/';
                    echo $book['img'];
                    echo '" alt=""/> </a> <div class="hs__item__description"><span class="hs__item__title">';
                    echo $book['name'];
                    echo '</span><span class="hs__item__subtitle">';
                    echo $book['author'];
                    echo '</span></div> </li>';
                            }
                         }
                echo '</ul> </div>';
               
                $result->free();
                                echo '</div>

                        </div>
                    </div>';
        }                  
                            }
                                            
            $book_id = $_GET['book_id'];
$query = "SELECT * FROM books WHERE book_id=$book_id";
$result = $mysqli->query($query);
$book = $result->fetch_assoc();
        ?>
                            
                    <div class="row"><a id="read_online"> </a> </div>
                    <div class="row">
                       <div class="col-md-12 read_online_text">
                            <h3><strong>
                                <?php 
                                 echo $book['name'];
                                if($page!=1){
                                    echo ' (стр. ';
                                    echo intval($page);
                                    echo')';
                                }
                                
                                ?>
                                </strong></h3>
                           
                           <p style="margin-top: 2em;"><?php
    if(!(file_exists('books/books_text/books_txt/' . $book['text'] . '_tat.txt'))){
        file_put_contents('mistakes.txt', $book['name'] . '
', FILE_APPEND);
    }
$text_str = file_get_contents('books/books_text/books_txt/' . $book['text'] . '_tat.txt');
$text = explode(' ', $text_str);
$num = 500;
if (isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}
$text_words = count($text);
$total = intval(($text_words - 1) / $num) + 1;
$page = intval($page);

if (empty($page) or $page < 0) $page = 1;
if ($page > $total) $page = $total;

$start = $page * $num - $num;
for ($i = $start;$i < $start + $num;$i++)
{
    echo $text[$i] . ' ';
    
    if($text[$i][strlen($text[$i])-1] == "\n") {
        echo '</p> <p>';
    }
}
                        ?>
                           </p>
                        </div>
                        
                        
    <div class="container">      
    <div class="row" style="justify-content: center;">                        
<?php
                        
if($total>1){
                        
echo '  <div class="wrapper">
  <nav>
    <ul class="pager">';

if($page!= 1){
    echo '<li class="pager__item pager__item--prev"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo $page-1;
    echo '?#read_online';
    echo'">
          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
            <g fill="none" fill-rule="evenodd">
              <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
            </g>
          </svg></a></li>';
}

if($page>=5){
    echo '<li class="pager__item"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo 1;
    echo '?#read_online">';
    echo 1;
    echo'</a></li>';
    
    
    echo '<li class="pager__item"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo $page-3;
    echo '?#read_online';
    echo'"> ...</a></li>';
    
    
    echo '<li class="pager__item"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo $page-2;
    echo '?#read_online">';
    echo $page-2;
    echo'</a></li>';
    
    
    echo '<li class="pager__item"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo $page-1;
    echo '?#read_online">';
    echo $page-1;
    echo'</a></li>';
}

else{
    for($i=1; $i<$page; $i++){
         echo '<li class="pager__item"><a class="pager__link" href="';
        echo'book.php?book_id=';
        echo $book_id;
        echo '&page=';
        echo $i;
        echo '?#read_online">';
        echo $i;
        echo'</a></li>';
    }
}

    
    echo '<li class="pager__item active"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo $page;
    echo '?#read_online">';
    echo $page;
    echo'</a></li>';
    
    
    

    
if($page <= $total-4){
    echo '<li class="pager__item"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo $page+1;
    echo '?#read_online">';
    echo $page+1;
    echo'</a></li>';
    
    echo '<li class="pager__item"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo $page+2;
    echo '?#read_online">';
    echo $page+2;
    echo'</a></li>';
    
    echo '<li class="pager__item"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo $page+3;
    echo '?#read_online';
    echo'"> ...</a></li>';
    
    echo '<li class="pager__item"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo $total;
    echo '?#read_online">';
    echo $total;
    echo'</a></li>';
}

else{
    for($i=$page+1; $i<=$total; $i++){
         echo '<li class="pager__item"><a class="pager__link" href="';
        echo'book.php?book_id=';
        echo $book_id;
        echo '&page=';
        echo $i;
        echo '?#read_online">';
        echo $i;
        echo'</a></li>';
    }
}
    
if($page != $total){
    echo '<li class="pager__item pager__item--next"><a class="pager__link" href="';
    echo'book.php?book_id=';
    echo $book_id;
    echo '&page=';
    echo $page+1;
    echo '?#read_online';
    echo '">
          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewbox="0 0 8 12">
            <g fill="none" fill-rule="evenodd">
              <path fill="#33313C" d="M7.41 1.41L6 0 0 6l6 6 1.41-1.41L2.83 6z"></path>
            </g>
          </svg></a></li>';
}
    
    
  echo '</ul>
  </nav>
</div> ';
                        
     }
?>                   
                        
          </div>    
                        </div>
                        
                        
                        </div>

                    </div>
            </main>

        
        
        <?php 
        
        $query = 'SELECT * FROM books';
        $result = $mysqli -> query($query);
        while ($book = $result -> fetch_assoc()){
            if(!(file_exists('books/books_img/' . $book['img']))){
             file_put_contents('mistakes.txt', $book['name'] . '  -  img' . '
             ', FILE_APPEND);
            }
         
            if(!(file_exists('books/books_text/books_epub/' . $book['text'] . '_tat.epub'))){
             file_put_contents('mistakes.txt', $book['name'] . '  -  epub' . '
             ', FILE_APPEND);
            }     
            
            if(!(file_exists('books/books_text/books_fb2/' . $book['text'] . '_tat.fb2'))){
             file_put_contents('mistakes.txt', $book['name'] . '  -  fb2' . '
             ', FILE_APPEND);
            }
            
            if(!(file_exists('books/books_text/books_pdf/' . $book['text'] . '_tat.pdf'))){
             file_put_contents('mistakes.txt', $book['name'] . '  -  pdf' . '
             ', FILE_APPEND);
            }
            
            if(!(file_exists('books/books_text/books_txt/' . $book['text'] . '_tat.txt'))){
             file_put_contents('mistakes.txt', $book['name'] . '  -  txt' . '
             ', FILE_APPEND);
            }
            
            
        }
        ?>
        
        
        
        
            <?php require_once('footer.php'); ?>

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
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
                    $(document).ready(function(){
                    $("#read_online").on("click","a", function (event) {
                    event.preventDefault();
                    var id  = $(this).attr('href'),
                    top = $(id).offset().top;
                    $('body,html').animate({scrollTop: top}, 1500);
    });
});
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