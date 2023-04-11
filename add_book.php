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
        <link href="css/add_book.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <?php require_once('header.php') ?>
            <main>
                <div class="container book_add_container">
                    <div class="row" style="justify-content: center; margin-bottom: 1em;">
                        <h3>Добавьте книгу!</h3>
                    </div>
                    <form method="POST" enctype="multipart/form-data" action="add_book_form.php">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_cover" style="margin-bottom: 1em;">
                                    <img class="book_cover_icon" src="images/add_book_img1.png">
                                    <input id="book_cover" type="file" name="book_img" multiple>
                                    <label for="book_cover" style="margin-top: 1em;">Выберите файл обложки книги</label>
                                    <span style="color: #ce7900; text-align: center; font-size: 0.9rem;">(.JPEG .PNG)</span>
                                </div>
                                <div class="book_name">
                                    <label>Название книги:</label>
                                    <input type="text" name="name_book" required>
                                </div>
                                <div class="book_author" style="margin-top: 1em;">
                                    <label>Автор:</label>
                                    <input type="text" name="author_book" class="author_book" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="book_describe">
                                    <label>Краткое описание:</label>
                                    <textarea type="text" name="describe_book"> </textarea>
                                </div>
                                <div class="genre" style="margin-top: 0.5em;">
                                    <label>Жанр:</label>
                                    <input type="text" name="genre_book" class="genre" required>
                                </div>

                                <div class="radio" style="margin-top: 1em;">
                                    <label style="width: 100%; margin-bottom: 0rem;">Язык:</label>

                                    <label style="margin-right: 2em;">
                                        <input type="radio" class="option-input radio" name="language_book" value="0" checked /> татарский
                                    </label>
                                    <label>
                                        <input type="radio" class="option-input radio" name="language_book" value="1" /> русский
                                    </label>
                                </div>

                                <div class="book_text">
                                    <img class="book_text_icon" src="images/text_icon.png">
                                    <input id="book_text" type="file" name="book_text" multiple>
                                    <label for="book_text">Выберите файл текста книги</label>
                                    <span style="color: #ce7900; text-align: center; font-size: 0.9rem;">(.TXT .FB2 .PDF .EPUB)</span>
                                </div>
                            </div>
                            <?php if(isset($_GET['error'])){
                        echo '<p style="color: red;">Неверные данные</p>';
                        }
                        ?>
                        </div>
                    <div class="row" style="justify-content: center;">
                        <a href="">
                            <button class="button_enter" type="submit">Отправить</button>
                        </a>
                    </div>
                   </form>
                    
                    
                    
                    
                    
                </div>
            </main>

            <?php require_once('footer.php') ?>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script>
                    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
                </script>
                <script src="js/popper.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
                <script src="js/holder.min.js"></script>
                <script src="js/bootstrap.bundle.js"></script>
                <script src="js/bootstrap.bundle.min.js"></script>
                <script src="js/bootstrap.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/popper.min.js"></script>
                <script src="js/index.js"></script>
    </body>

    </html>