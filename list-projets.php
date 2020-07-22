<?php
/*
Template Name: Liste des projets
*/
?>

<?php get_header();?>

<div class="projects p-5 ">
        <div class="projects__title mb-5 ">
            <h2 class="text-center text-light ">Les Projets En Cours</h2>
            <div class="projects__title__border "></div>
        </div>
        <div class="col-md-4 mb-5 form-group">
            <label class="text-light" for="disabledSelect">Filtrer:</label>
            <select id="disabledSelect" class="form-control">
                <option selected>Choisir une catégorie</option>
                <option value="1">Solidarité</option>
                <option value="2">Ecologie</option>
                <option value="3">Entrepreunariat</option>
                <option value="4">Culture</option>
                <option value="5">Santé</option>
                <option value="6">Agriculture</option>
            </select>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 1</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project"?>" class="text-light">Voir le projet</a></button>
            </div>
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center  mb-3">
                <h5 class="card-title ">Projet 2</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 3</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 4</h5>
                <div class="card-body h-100 "><img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 5</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 6</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 5</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 6</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 5</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 6</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 5</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 6</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 5</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 6</h5>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/"?>" class="text-light">Voir le projet</a></button>
            </div>
        </div>
    </div>

<?php get_footer();?>