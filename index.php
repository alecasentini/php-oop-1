<?php
require_once __DIR__ . '/database/db.php';
require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/genres.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="d-flex flex-column align-items-center" style="background-color: #112030;">
    <h1 class="py-3 text-white">Movies</h1>

    <div class="container d-flex flex-wrap my-5">
        <?php foreach ($arrayMovies as $movie) { ?>
            <div class="card mb-3" style="width:calc(100% / 4 - 20px); margin: 0px 10px;">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $movie->title; ?></h5>
                    <p class="card-text">Year: <?php echo $movie->year; ?></p>
                    <p class="card-text">Genres: <?php echo $movie->genre->getAllGenres(); ?></p>
                </div>
            </div>
        <?php } ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>