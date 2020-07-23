<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dream&Collect - Cagnotte 100% solidaire</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex align-items-center justify-content-around">
            <div class="navbar__signin navbar__left justify-content-start">
                <a class=" navbar-brand" href="<?php get_home_url() . "/accueil/deposer-votre-projet/"?>">
                    <img src="<?php echo get_template_directory_uri() . "/img/contact-1293388_640.png" ?>" class="navbar__signin__logo d-inline-block align-top" alt="logo" loading="lazy">
                </a>
            </div>
            <div class="navbar__center justify-content-center">
                <a class="navbar-brand m-0" href="<?php echo get_home_url()?>">
                    <img src="<?php echo get_template_directory_uri() . "/img/logo-illustrator copie-1.png" ?>" class="navbar__logo" alt="logo" loading="lazy">
                </a>
            </div>
            <div class="navbar__right d-flex justify-content-end">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo get_home_url() . "/voir-les-projets"?>">Voir les projets<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url() . "/accueil/deposer-votre-projet/"?>">Déposer votre projet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url() . "/accueil/login/"?>">S'identifier</a>
                    </li>
                </ul>
                
            </div>
    </nav>
</header>
