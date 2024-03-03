<!--  displays clicked image from index.php -->
<?php
require_once 'lang.php';    
require_once 'assets/php/bdd.php';
require_once('assets/php/navpages.php');
?>

<!--  print all movies -->
<?php
$id = $_GET['id'];
$movie = $movies[$id];

// display l'image
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Moviepage</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/filmPageStyle.css">
</head>

<!-- icon to return to the home page -->
<header>

</header>

<body>
    <section id="conteneur">
        <header>
            <img src="assets/img/<?php echo $movie['cover']; ?>" alt="<?php echo $movie['altdescp'];?>" >
        </header>
        <body>
            <h2 id="movietitle"> <?php echo $movie['title']; ?></h2>
            <p>
                <?= $movie['content']; ?>
            </p>
        </body> 

    </section>
</body>
