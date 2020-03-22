<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog ACS Mulhouse</title>
    <?php wp_head();?>
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <header>
 <div class="container">
 <div class="header-titles">   
 <h1 class="site-title"><a href="http://messaoudab.promo-36.codeur.online/blogacs">Blog de la promo ACS - Un site utilisant WordPress</a></h1>
 <div class="site-description">Un site utilisant WordPress</div>
 </div> 
    
    <?php
     wp_nav_menu(
array(
    'theme_location' => 'top-menu',
    'menu_class' => 'top-bar',
)
     );
     ?>
 </div>
 </header>   
