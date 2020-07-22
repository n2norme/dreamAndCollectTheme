<?php
/*
Template Name: Contribute
*/
?>
<?php get_header();?>

<div class="form">
        <form class="container p-3" action="">
            <h2 class="text-light text-center p-4">Contribution</h2>
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
            </div>
            <div class="form-row">
                <div class="col-12 mb-3">
                    <label class="text-light" for="validationDefault03">Adresse</label>
                    <input type="text" class="form-control" id="validationDefault03" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="text-light" for="validationDefault04">Ville</label>
                    <input type="text" class="form-control" id="validationDefault04" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="text-light" for="validationDefault05">Code postal</label>
                    <input type="text" class="form-control" id="validationDefault05" required>
                </div>
            </div>
            <div class="form-group form-row">
                <div class="col-12 mb-3">
                    <label class="text-light" for="validationDefault05">Montant de la contribution</label>
                    <input type="number" class="form-control" id="validationDefault05" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="text-light" class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
              </label>
                </div>
            </div>
            <button class="btn btn-light text-muted mb-3" type="submit">Valider</button>
        </form>
    </div>

<?php get_footer();?>