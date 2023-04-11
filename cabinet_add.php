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
                           
                            
                        
                          <nav class="navbar navbar-expand-lg navbar-light user_nav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="cabinet.php">Избранное&nbsp♥</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link current" href="cabinet_add.php">Добавленное&nbsp+<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="cabinet_settings.php">Настройки&nbsp<strong>⚙</strong></a>
      </li>
    </ul>
  </div>
</nav>  
                            
                                 
                            
                            
                            
                            
                            
                            
                            <div class="hs__wrapper">
    <div class="hs__header">
      <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
    </div>
    <ul class="hs">
      <li class="hs__item"> <img class="hs__item__image" src="books/books_img/shah_petux.jpg" alt=""/>
           <div class="hs__item__description"><span class="hs__item__title">Самолёт летит над полями</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/Jalil_Moabit_Tet.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/bala_belen_kub.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Итиль-река течет</span><span class="hs__item__subtitle">Кулихан Фаттах</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/bartold_kultura_musulmanstva.png" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Севастопольская тетрадь</span><span class="hs__item__subtitle">Сергей Ефремов</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/Tukay_Shurale.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Последний патрон</span><span class="hs__item__subtitle">Анатолий Устюгий</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/Kuyan_kizi.png" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Моабитская тетрадь</span><span class="hs__item__subtitle">Муса Джалиль</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/Koster_nad_obryvom.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Костёр над обрывом</span><span class="hs__item__subtitle">Муса Джалиль</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
     <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
      <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
       <li class="hs__item"> 
        <div class="hs__item__image__wrapper"><img class="hs__item__image" src="books/books_img/rasskazi_letchika.jpg" alt=""/></div>
        <div class="hs__item__description"><span class="hs__item__title">Рассказы летчика</span><span class="hs__item__subtitle">Юрий Белостоцкий</span></div>
      </li>
    </ul>
                                
                                
                 
                                
                     <a class="read_online-button" href="">
                                            <div class="face-primary">
                                                Все Добавленные
                                            </div>

                                            <div class="face-secondary">
                                               +
                                            </div>

                                        </a>              
                                
                                
                    
                    
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