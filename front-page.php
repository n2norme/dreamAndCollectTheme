<?php get_header();?>

<div class="headline p-5">
        <div class="headline__title">
            <h2 class="text-center text-light ">Les projets les plus suivis</h2>
            <div class="headline__title__border "></div>
        </div>
        <div class="carousel mt-3">
            <div id="carouselExampleInterval" class="slide" data-ride="carousel">
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <div class="carousel-inner">
                    <div class="carousel-item active" data- interval=" 10000 ">
                        <img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" class="d-block w-100 " alt="... ">
                    </div>
                    <div class="carousel-item" data- interval=" 10000 ">
                        <img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" class="d-block w-100 " alt="... ">
                    </div>
                    <div class="carousel-item" data- interval=" 10000 ">
                        <img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" class="d-block w-100 " alt="... ">
                    </div>
                    <a class="carousel-control-next " href="#carouselExampleInterval " role="button " data-slide="next ">
                        <span class="carousel-control-next-icon " aria-hidden="true "></span>
                        <span class="sr-only ">Next</span>
                    </a>
                </div>
                <div class="carousel__button mt-3">
                    <button type="button" class=" carousel__button__content btn btn-light text-muted mt-2"><a href="./depot-projet.html" class="carousel__button__content__link text-light">Déposez votre projet</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="categories p-5 ">
        <div class="categories__title mb-5">
            <h2 class="text-centert">Les Catégories</h2>
            <div class="categories__title__border "></div>
        </div>
        <div class="row align-items-center justify-content-around m-0 categories__iconbox">
            <div class="col-12 col-sm-6 col-md-4 col-lg-1 m-2 d-flex justify-content-center">
                <a href=" # " class="categories__icon text-decoration-none text-muted"><img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" alt="handshake ">Solidatité</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-1 m-2 d-flex justify-content-center">
                <a href="# " class="categories__icon text-decoration-none text-muted "><img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" alt="handshake ">Ecologie</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-1 m-2 d-flex justify-content-center">
                <a href="# " class="categories__icon text-decoration-none text-muted "><img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" alt="handshake ">Entrepreunariat</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-1 m-2 d-flex justify-content-center">
                <a href="# " class="categories__icon text-decoration-none text-muted "><img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" alt="handshake ">Culture</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-1 m-2 d-flex justify-content-center">
                <a href="# " class="categories__icon text-decoration-none text-muted "><img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" alt="handshake ">Santé</a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-1 m-2 d-flex justify-content-center">
                <a href="# " class="categories__icon text-decoration-none text-muted "><img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" alt="handshake ">Agriculture</a>
            </div>
        </div>
    </div>

    <div class="projects p-5 ">
        <div class="projects__title mb-5 ">
            <h2 class="text-center text-light ">Les Nouveaux Projets</h2>
            <div class="projects__title__border "></div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 1</h5>
                <div class="card-body h-100 ">
                    <img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" class="card-img-top " alt="... ">
                    <p class="card-text ">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="./detail-projet.html" class="text-light">Voir le projet</a></button>
            </div>
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center  mb-3">
                <h5 class="card-title ">Projet 2</h5>
                <div class="card-body h-100 ">
                    <img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" class="card-img-top " alt="... ">
                    <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="./detail-projet.html" class="text-light">Voir le projet</a></button>
            </div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 3</h5>
                <div class="card-body h-100 ">
                    <img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" class="card-img-top " alt="... ">
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="./detail-projet.html" class="text-light">Voir le projet</a></button>
            </div>
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 4</h5>
                <div class="card-body h-100 "><img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" class="card-img-top " alt="... ">
                    <p class="card-text ">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <button type="button " class="projects__button btn btn-info mb-3"><a href="./detail-projet.html" class="text-light">Voir le projet</a></button>
            </div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 5</h5>
                <div class="card-body h-100 ">
                    <img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" class="card-img-top " alt="... ">
                    <p class="card-text ">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <button type="button " class="projects__button btn btn-info mb-3"><a href="./detail-projet.html" class="text-light">Voir le projet</a></button>
            </div>
            <div class="card col-12 col-sm-5 col-md-5 col-lg-5 d-flex justify-content-center mb-3 ">
                <h5 class="card-title ">Projet 6</h5>
                <div class="card-body h-100 ">
                    <img src="<?php echo get_template_directory_uri() . "/img/hands-2847508_1920(1).jpg" ?>" class="card-img-top " alt="... ">
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div> <button type="button " class="projects__button btn btn-info mb-3"><a href="./detail-projet.html" class="text-light">Voir le projet</a></button>
            </div>
        </div>
        <div class="projects__bottom__button m-5 ">
            <button type="button " class="btn btn-info projects__bottom__button__content "><a href="./list-projets.html" class="text-light">Voir plus de projets</a></button>
        </div>
    </div>

<?php get_footer();?>