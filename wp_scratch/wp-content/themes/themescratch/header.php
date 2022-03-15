<!DOCTYPE html>
<html lang="fr">
<head <?php language_attributes() ?>>
    <!-- bloginfo("charset") permet de decider de l encodage de maniére dynamique (back office de WP) au lieu -->
    <meta charset="<?php bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <!-- bloginfo("template_directory") permet de recup le chemin vars mn theme (voir le echo ligne 17 en desss (décommencez)) pr accéder à style.css au lieu d ecrire en dur l intégralité de ce chemin -->
    <!-- dns l attrb href de <link> je ne peux pas juste préciser  -->
    <link rel="stylesheet" href="<?php bloginfo("template_directory") ?>/style.css"> 
    <!-- bloginfo(name) permet de modif dynamique le nom du site dns l'onglet du titre -->
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
    
<!-- body class permet de recup ls classes/ variables prédéfinies de WP, si on en a besoin -->
<body <?php body_class() ?>>
      
 
<!-- pr afficher le chemin vers mn theme -->
<!-- <?= bloginfo("template_directory") ?> -->

<header class="container-fluid">
    <!-- nos 2 zones/widgets au-dessus de la nav  -->
    <div class="row">
        <!-- celle de gauche -->
        <div class="bleu col-6"> <?php dynamic_sidebar('haut-gauche') ?> </div>  

        <!-- celle de droite -->
        <div class="rouge col-6"> <?php dynamic_sidebar('haut-droit') ?> </div>

    </div>

    <!-- debut de la nav -->
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- fonction prédefini wordpress -->
                <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'primary')) ?> 
            </ul>
            </div>
        </div>
        </nav>

    </div>
    <!-- fin de la nav -->

    <!-- widget pr img entete -->
    <div class="row">
        <div class="entete col-12"> <?php dynamic_sidebar('entete') ?> </div>
    </div>
    <!-- fin img entete -->

</header>

<main class="container">

