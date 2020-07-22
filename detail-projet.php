<?php
/*
Template Name:  Project
*/
?>
<?php get_header();?>

<div class="projects__container">
        <div class="container p-4">
            <div class="card d-flex justify-content-center p-3 ">
                <h5 class="card-title ">Projet</h5>
                <div class="projects__news m-3 p-2">
                    <h4 class="text-center">News</h4>
                    <div class="mb-4">
                        <h6>Titre, date</h6>
                        <span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                    </div>
                </div>
                <div class="card-body h-100 ">
                    <img src="./img/hands-2847508_1920(1).jpg " class="card-img-top " alt="... ">
                    <p class="card-text h-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum provident officia et similique minima obcaecati qui voluptatibus amet alias magnam nobis corporis numquam ipsum eos voluptate quaerat nihil, accusantium earum! Fugiat, beatae
                        optio. Soluta culpa dolore laboriosam perspiciatis vero totam eos id ab fuga neque provident repellat quam corporis sed eum sequi explicabo aperiam magni esse assumenda, reiciendis praesentium impedit. Atque enim sed dignissimos
                        cum quaerat corrupti harum tenetur est cumque vel ratione non magnam quidem, minus quis soluta. Itaque aliquam tempore dolore molestiae, perspiciatis totam inventore laborum ipsum nobis. Deleniti nam neque, nisi ab, consectetur
                        libero magni voluptatem dolorum labore numquam et asperiores molestiae natus debitis ex dolores. Similique dolores ullam deleniti amet? Assumenda aut animi pariatur delectus illum. Dolor, corporis laborum nemo dolorum modi deserunt
                        veritatis mollitia nam minus exercitationem saepe, tempora sapiente similique ad totam explicabo dolore deleniti voluptatum, eligendi odio at laudantium provident! Placeat, ut excepturi. Nemo aliquid doloribus nihil ullam ad voluptatem
                        vel, in quisquam quos corrupti assumenda provident enim possimus ipsa cum? Alias quos odio eos velit id hic.</p>
                    <div class="row">
                        <img src="./img/fruit-2305192_1920.jpg " class="card-img-top col" alt="... ">
                        <img src="./img/leaf-1001679_1920.jpg " class="card-img-top col" alt="... ">
                    </div>
                    <p class="card-text h-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa tenetur iure facere cupiditate nulla quos optio nesciunt repudiandae error fugit fugiat, ut aspernatur consectetur eum magnam quae excepturi, est neque. Similique dolores
                        ullam deleniti amet? Assumenda aut animi pariatur delectus illum. Dolor, corporis laborum nemo dolorum modi deserunt veritatis mollitia nam minus exercitationem saepe, tempora sapiente similique ad totam explicabo dolore deleniti
                        voluptatum, eligendi odio at laudantium provident! Placeat, ut excepturi. Nemo aliquid doloribus nihil ullam ad voluptatem vel, in quisquam quos corrupti assumenda provident enim possimus ipsa cum? Alias quos odio eos velit id
                        hic
                    </p>
                    <img src="./img/art-1851483_1920.jpg" class="card-img-top " alt="... ">
                    <div class="projects__comments m-3 p-2">
                        <h4 class="text-center">Commentaires</h4>
                        <div class="mb-4">
                            <h6>Auteur, date</h6>
                            <span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                        <div class="mb-4">
                            <h6>Auteur, date</h6>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                        <div class="mb-4">
                            <h6>Auteur, date</h6>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                    </div>
                    <div class="projects__return m-3 p-2">
                        <h4 class="text-center">Contreparties</h4>
                        <div class="mb-4">
                            <span> 10€, 30€, 50€, 100€, 200€, 500€, 1000€</span>
                        </div>
                    </div>
                </div>
                <button type="button" class="projects__button btn btn-info m-3"><a href="<?php echo get_home_url() . "/accueil/voir-les-projets/project/contribute" ?>" class="text-light">Participer</a></button>
            </div>
        </div>
    </div>

<?php get_footer();?>