<?php
/*
Template Name: Login
*/
?>
<?php get_header();?>

<div class="form">
        <form class="container p-3">
            <h2 class="text-light text-center p-4">Identification</h2>
            <div class="form-group mb-3">
                <label class="text-light" for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mb-3">
                <label class="text-light" for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label text-light" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-light text-muted mb-3">Submit</button>
        </form>
    </div>
<?php get_footer();?>