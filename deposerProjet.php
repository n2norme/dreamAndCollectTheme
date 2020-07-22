<?php
/*
Template Name: Déposer Projet
*/
?>
<?php get_header();?>

<div class="form">
        <form class="container">
            <h2 class="text-light text-center p-4">Déposer votre projet</h2>
            <div class="form-row">
                <div class="col-12 mb-3">
                    <label class="text-light" for="validationDefault01">Nom</label>
                    <input type="text" class="form-control" id="validationDefault01" required>
                </div>

                <div class="col-12 mb-3">
                    <label class="text-light" for="validationDefault02">Prénom</label>
                    <input type="text" class="form-control" id="validationDefault02" required>
                </div>

                <div class="col-12 mb-3">
                    <label class="text-light" for="validationDefaultUsername">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <label class="text-light" for="validationDefault03">Téléphone</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                </div>

                <div class="col-12 mb-3">
                    <label class="text-light" for="validationDefault01">Titre du projet:</label>
                    <input type="text" class="form-control" id="validationDefault01" required>
                </div>

                <div class="col-12 mb-3 form-group">
                    <label class="text-light" for="disabledSelect">Choisissez votre catégorie:</label>
                    <select id="disabledSelect" class="form-control">
                        <option selected>Choisir...</option>
                        <option value="1">Solidarité</option>
                        <option value="2">Ecologie</option>
                        <option value="3">Entrepreunariat</option>
                        <option value="4">Culture</option>
                        <option value="5">Santé</option>
                        <option value="6">Agriculture</option>
                    </select>
                </div>

                <div class="col-12 mb-3 form-group">
                    <label class="text-light" for="exampleFormControlTextarea1">Résumé du projet:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>

                <div class="col-12 mb-3 form-group">
                    <label class="text-light" for="exampleFormControlTextarea1">Description détaillée du projet:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="15"></textarea>
                </div>

                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Importer une image:</label>
                </div>

                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Importer une vidéo:</label>
                </div>

                <div class="col-12">
                    <div class="row m-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label text-light" for="defaultCheck1">Déductible fiscalement</label>
                        </div>
                    </div>
                    <div class="col-12 mb-3 form-group">
                        <label class="text-light" for="disabledSelect">Choisissez votre catégorie:</label>
                        <select id="disabledSelect" class="form-control">
                            <option selected>Choisir...</option>
                            <option value="1">Intérêt général</option>
                            <option value="2">Utilité publique</option>
                        </select>
                    </div>

                </div>

                <div class="row m-3 align-items-center form-group ">
                    <label class="text-light" for="exampleFormControlTextarea1">Partager le projet:</label>
                    <div class="col m-3 ">
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label text-light" for="defaultCheck1">
                      Facebook
                    </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label text-light" for="defaultCheck1">
                      Twitter
                    </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label text-light" for="defaultCheck1">
                      LinkedIn
                    </label>
                        </div>
                    </div>
                    <div class="col m-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label text-light" for="defaultCheck1">
                      Instagram
                    </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label text-light" for="defaultCheck1">
                      Gmail
                    </label>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row m-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label text-light" for="defaultCheck1">je suis majeur er reconnais avoir pris connaissance des conditions générales d'utilisation de la plateforme</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-center mb-3">
                    <button class="btn btn-light text-muted m-3 align-content-center" type="submit ">Enregistrer mon brouillon</button>
                    <button class="btn btn-light text-muted m-3 align-content-center" type="submit ">Prévisualiser mon projet</button>
                    <button class="btn btn-light text-muted m-3 align-content-center" type="submit ">Valider</button>
                </div>
            </div>
    </div>
    </form>
    </div>

<?php get_footer();?>