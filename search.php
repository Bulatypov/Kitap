<?php 
require_once('load_user.php'); 
require_once('settings.php'); 
$genres = true;


$search_q=$_POST['search_q'];
$search_q = trim($search_q);
$search_q = strip_tags($search_q);

$query = "SELECT * FROM books WHERE name LIKE '%$search_q%' OR author LIKE '%$search_q%'";
$result = $mysqli->query($query);
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
    <link href="../css/about_us.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <style>
.q{
    border: 5px solid #feb386;
    border-style: double;
    border-radius: 8px;
    color: #363636;
    padding: 0.4em;
}
    </style>
    <?php require_once('header.php'); ?>
    <main>
        <div class="container" style="margin-top: 3em; background-color: white; border-radius: 12px; padding-left: 3em; padding-right:3em; padding-top: 1em; padding-bottom:1em; border: 8px solid #feb386;
    border-radius: 18px;
    border-style: double;">
            <div class="row">
                <?php
                echo '<h4>По вашему запросу "';
                echo $search_q;
                if(($result -> num_rows) == 0 || strlen($search_q) < 3){
                    echo '<h4>" ничего не найдено</h4>';
                }
                else{
                if(($result -> num_rows) == 1){
                echo '" найдена ';
                    echo ($result -> num_rows);
                echo ' книга:</h4>';
                }
                else{
                    echo '" найдено ';
                    echo ($result -> num_rows);
                echo ' книги:</h4>';
                }
                }
                ?>
                <div class="container">
                    <?php
                    if(strlen($search_q) > 2){
                        while($book = $result->fetch_assoc())
                        {
                            echo ' <div class="row" style="margin-top: 2em; background-color: #fff8e7; border-radius: 8px;">
                            
                        <div class="col-md-3">
                            <img src="books/books_img/';
                            echo $book['img'];
                            echo '" class="img-fluid" style="float: left; border-radius: 18px; margin-top: 1em; margin-bottom: 1em;">
                        </div>
                            
                        <div class="col-md-9" style="text-align: justify; padding: 1em; padding-bottom: none;"> <a href="book.php?book_id=';
                            echo $book['book_id'];
                             echo '"><img src="images/button-RU.png" style=" margin-top: 0.5em; float:right; max-width: 10em;"> </a>
                            <h3>';
                            echo $book['name'];
                            echo '</h3>
                            <p class="text-muted">';
                            echo $book['author'];
                            echo '</p>
                            <hr>';
                            
                             echo '         <div style="display: inline-block;"> <h5 class="asd">Жанр:</h5>
                                            <p class="q">';
                            echo $book['genre'];
                            echo '</p>
                                        </div>
                                        <div style="display: inline-block; margin-left: 2em;">
                                            <h5 class="asd">Язык:</h5>
                                            <p class="q">';
                            echo $book['language'];
                            echo '</p>
                                        </div>    
                                            ';
                            
                            if($book['briefly']!=""){
                                echo '<h5><strong>О книге:</strong></h5>
                            <p style="font-size: 0.9rem;">';
                                echo $book['briefly'];
                                echo '</p>';
                            }
                            
                            echo '</div> </div>';
                        }
                    }
                    ?>
                        
                            
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
</body>

</html>