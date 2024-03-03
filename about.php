<?php
  require_once 'lang.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>About page</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style_aboutUs.css">
</head>

<body>

<!-- to go back to the home page -->
<nav>
  ><?php require_once 'assets/php/navpages.php';?>
</nav>

<!-- section qui represente le corps de la page avec la grande presentation et les 3 membres de la page-->
<article >
  <!-- div du petit paragraph representative de l'objectif de la page et qui sera superposer sur l'image -->
  <div class="paragraphAbout">
  <h1><?= __('AboutUS','About Us')?></h1>
  <p> <?= __('AboutUS','In a a world full of depression and lonliness, We give our guests the ability to learn about friendship, courage, love and power. We are a movie page that presents all kind of anime movies. Old and new! For us, anime is like a great heritage that we carry with us all our lives.')?></p>
</div>
<!-- image de background de notre about page-->
<img id="coverpic" src="assets/img/anime-girl-with-flowers-looking-towards-sunset-2j-1920x1080.jpg" alt="anime-girl-with-flowers-looking-towards-sunset" class="background">
<!-- petit titre introductifs des membres de la page-->
<h2 style="text-align:center">Our Team</h2>
<div class="row">

  <!-- first div with founder informations and her picture-->
  <div class="column">
    <div class="card">
      <img src="assets/img/card1.jpg" alt="Jane">
      <div class="container">
        <h2>Zahraa Wazni</h2>
        <p class="title"><?= __('AboutUS','Founder of the page')?></p>
        <p> <?= __('AboutUS','hello please have fun on this page and leave a review')?></p>
        <p>zahraa.wazni@etu.unistra.com</p>
      </div>
    </div>
  </div>

  <!-- second div with second member informations and his picture-->
  <div class="column">
   <div class="card">
     <img src="assets/img/card2.jpeg" alt="Mike">
     <div class="container">
       <h2>Mikkiii Mousouu</h2>
       <p class="title"><?= __('AboutUS','PHP specialist')?></p>
       <p><?= __('AboutUS','stop confusing me with that disney mouse I have feelings ')?></p>
       <p>notmickeymouse@gmail.com</p>
     </div>
   </div>
 </div>

 <!-- third div with third member informations and his picture-->
 <div class="column">
  <div class="card">
    <!-- picture part-->
    <img src="assets/img/card3.jpg" alt="John">
    <div class="container">
      <h2> Kakashi Hatake</h2>
      <p class="title"><?= __('AboutUS','Ninja and emotional support')?></p>
      <p><?= __('AboutUS','I am just an emotional support for my waifu')?></p>
      <p>copyninja@konoha.com</p>
    </div>
  </div>
</div>
</div>
</article>
</body>
</html>
