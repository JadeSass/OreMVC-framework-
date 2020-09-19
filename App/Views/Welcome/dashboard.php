<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/css/bootstrap.min.css">
        <title><?php echo APP_NAME; ?> | Dashboard </title>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-white mb-3">
        <div class="container">
            <a class="navbar-brand text-dark" href="<?php echo URL; ?>"><?php echo APP_NAME; ?></a>
            <button class="navbar-toggler text-white bg-dark" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['user_id'])) : ?>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo URL; ?>/auth/logout">Log Out</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo URL; ?>/auth/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo URL; ?>/auth/login">Login</a>
                </li>
            <?php endif ?>
            </ul>
        </div>
    </nav>
    <!-- Header section -->
    
    <?php echo "Welcome"; ?>

    <!-- Footer section -->
    <script src="<?php echo URL; ?>/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>/js/bootstrap.min.js"></script>
</body>
</html>