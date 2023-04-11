<?php 
require_once('load_user.php'); 
require_once('settings.php'); 
$genres = true;
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
        <link href="css/genres.css" rel="stylesheet">
         <link href="css/style.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-offset="20">
        <?php require_once('header.php'); ?>

        <main style="margin-top: 4em;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="section-nav">
        <h4 class="section_nav_title">Жанры</h4>
		<ol>
            <?php   
            $query = "SELECT DISTINCT genre FROM books";
            $result = $mysqli->query($query);
            if ($result = $mysqli->query($query)) {
                /* извлечение ассоциативного массива */
                while ($genre = $result->fetch_assoc()) {
                    echo '<li><a href="#';
                    echo $genre['genre'];
                    echo '">';
                    echo $genre['genre'];
                    echo '</a></li>';
                }
                $result->free();
            }  
            
            ?>
		</ol>
	</nav>
                    </div>
                    
                    
                    <div class="col-md-9">
                        <div>
                            
                    
                            
        <?php
          $query = "SELECT DISTINCT genre FROM books";
          $result = $mysqli->query($query);
            if ($result = $mysqli->query($query)) {
                /* извлечение ассоциативного массива */
                while ($genre = $result->fetch_assoc()) {
                
                $genre_name = $genre['genre'];
                $query = "SELECT * FROM books WHERE genre='$genre_name' ORDER BY RAND() LIMIT 12";
                $result1 = $mysqli->query($query);
                echo '<section id="';
                echo $genre['genre'];
                echo '"> </section>';
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
                echo '</ul>';
                echo '<div style="width:100%; height: 50px;"> <a class="read_online-button" href="all_books.php?type=';
                echo $genre['genre'];
                echo '">
                                            <div class="face-primary">
                                                Все "';
                echo $genre['genre'];
                echo '"
                                            </div>

                                            <div class="face-secondary">';
                    $query = "SELECT * FROM books WHERE genre='$genre_name'";
                    $result1 = $mysqli->query($query);
                    echo 'Всего: ';
                    echo mysqli_num_rows($result1);
                    echo '
                                    </div>

                                        </a> </div>';
                echo '</div>';
                }
                $result->free();
        }                  
                        
        ?>
		
   
                
        
	</div>
                    </div>
                    
                </div>
            </div>
	
</main>
        
            <?php require_once('footer.php'); ?>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <script src='../js/spt.min.js'></script>
            <script src='../js/index.js'></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script>
                window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
            </script>
            <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
            <script src="../js/holder.min.js"></script>
            <script src="../js/bootstrap.bundle.js"></script>
            <script src="../js/bootstrap.bundle.min.js"></script>
            <script src="../js/bootstrap.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/popper.min.js"></script>
            <script src="../js/index.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script>
               window.addEventListener('DOMContentLoaded', () => {

	const observer = new IntersectionObserver(entries => {
		entries.forEach(entry => {
			const id = entry.target.getAttribute('id');
			if (entry.intersectionRatio > 0) {
				document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.add('active');
			} else {
				document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.remove('active');
			}
		});
	});

	// Track all sections that have an `id` applied
	document.querySelectorAll('section[id]').forEach((section) => {
		observer.observe(section);
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
    </body>

    </html>