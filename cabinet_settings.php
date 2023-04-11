<?php 
require_once('load_user.php'); 
$login = true;
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
                    <div class="row">

                        <div class="col-md-5" style="justify-content: center; text-align: center;">
                            <div class="avatar">
                                <img class="rounded-circle" src="../images/reading_girl.jpg" width="190" height="190">
                                <div class="text_team" style="margin-top: 5%;">
                                    <h5>Закиева Гузель</h5>
                                    <h6 class="text-muted">8 лет, Казань</h6>
                                </div>
                            </div>
                            <div class="statistics container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item_statistics"><b>72</b>
                                            <p>книги прочитаны</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item_statistics"><b>15</b>
                                            <p>отзывов о книгах</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item_statistics"><b>7</b>
                                            <p>книг добавлено</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text_about_user">
                                <p>"Всем привет! Меня зовут Гузель. Я очень люблю сказки Габдуллы Тукая, особенно Су Анасы. Я и сама пишу сказки и буду рада, если вы их прочтете и оставите отзыв."</p>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-7">
                           
                            
                        
                          <nav class="navbar navbar-expand-xl navbar-light user_nav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="cabinet.php">Избранное&nbsp♥</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cabinet_add.php">Добавленное&nbsp+</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link current" href="cabinet_settings.php">Настройки&nbsp<strong>⚙</strong><span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>  
                            
                                 
                            
                            
                            
                            
                            
                            
                            <div class="hs__wrapper">
                                    
                                
                             <div class="container_fluid book_add_container">
                    <form method="POST" enctype="multipart/form-data" action="add_book_form.php">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="book_cover">
                                    <img class="book_cover_icon" src="images/One_User_Orange.png">
                                    <input id="book_cover" type="file" name="book_img" multiple>
                                    <label for="book_cover" style="margin-top: 1em;">Выберите файл новой аватарки (.JPEG .PNG)</label>
                                </div>
                                <div class="book_name">
                                    <label>Изменить ФИ:</label>
                                    <input type="text" name="user_name">
                                </div>
                                <div class="book_author" style="margin-top: 1em;">
                                    <label>Изменить Город:</label>
                                    <input type="text" name="user_city" class="author_book">
                                </div>
                                <div class="book_name">
                                    <label>Изменить Дату Рождения:</label>
                                    <input type="date" name="user_date">
                                </div>
                                <div class="book_describe">
                                    <label>Изменить информацию о себе:</label>
                                    <textarea type="text" name="user_quote"> </textarea>
                                </div>
                                <div class="genre" style="margin-top: 0.5em;">
                                    <label>Изменить Пароль:</label>
                                    <input type="text" name="user_password" class="genre">
                                </div>


                               
                            </div>
                            <?php if(isset($_GET['error'])){
                        echo '<p style="color: red;">Неверные данные</p>';
                        }
                        ?>
                        </div>
                    <div class="row" style="justify-content: center;">
                        <a href="">
                            <button class="button_enter" type="submit">Сохранить</button>
                        </a>
                    </div>
                    </form>
                    
                    
                    
                    
                    
                </div>
                                
                                
                                
                            </div>    
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                                
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