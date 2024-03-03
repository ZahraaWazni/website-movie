<?php
session_start();
require 'lang.php';      
require_once('assets/php/createDB.php');                     
require_once 'assets/php/bdd.php';                               
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<?php 
    // echo username
    if (isset($_SESSION['username'])) {
        echo '<h1 class="welcome">Bienvenue ' . $_SESSION['username'] . '</h1>';
    }
    ?>
<?php 
require_once 'assets/php/navpages.php';
?>
  <header>
    <div">
        <img class="logo" src="assets/img/logo.png" alt="logo" >
    </div>
  </header>

  <section id="conteneur">
      <!-- loop to display all images in bdd.php -->
        <?php
        
        foreach ($movies as $movie) :
            ?>
            <!-- for each image, make it clickable to film.php -->
            <a href="film.php?id=<?php echo $movie['id']-1; ?>" style="text-decoration:none">
                <article>
                    <header>
                           <img src="assets/img/<?php echo $movie['cover']; ?>" alt="<?php echo $movie['altdescp'];?>" >
                    </header>
                    <section>
                        <h2> <?php echo $movie['title']; ?> </h2>
                        <p>
                            <?= implode(' ', array_slice(explode(' ', $movie['content']), 0, 20)); ?>
                        </p>
                    </section>
                    <footer>
                        <button><?= __('Home','Details')?></button>
                    </footer>
                </article>
            </a>
        <?php endforeach; ?>
  </section>
</body>
</html>
