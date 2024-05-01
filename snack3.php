<?php
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
/* Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.*/

// //estrarre la data (per ogni chiave ho sempre un valore)
// foreach ($posts as $data => $postList) {
//     echo $data;
//     // guardo cosa c'è nell'array associato alla chiave  (stampo i post )
//     foreach ($postList as $post) {
//         echo $post['title'];
//         echo $post['author'];
//         echo $post['text'];
//     }
// }

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap e custom css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Snack php | Parte 1</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Snack PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="snack1.php">Snack 1</a>
                    <a class="nav-link" aria-current="page" href="snack2.php">Snack 2</a>
                    <a class="nav-link active" aria-current="page" href="snack3.php">Snack 3</a>
                    <a class="nav-link" aria-current="page" href="snack4.php">Snack 4</a>
                    <a class="nav-link" aria-current="page" href="snack5.php">Snack 5</a>
                    <a class="nav-link" aria-current="page" href="snack6.php">Snack 6</a>
                    <a class="nav-link" aria-current="page" href="snack7.php">Snack 7</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Start exercize -->
    <div class="container">
        <h1>Snack 3</h1>
        <h2>Lista post</h2>
        <ul>
            <?php foreach ($posts as $data => $postList) { ?>
                <li>
                    <p>Data: <?php echo $data ?> </p>
                    <?php foreach ($postList as $post) { ?>
                        <div>
                            <p><?php echo $post["title"] ?></p>
                            <p><?php echo $post["author"] ?></p>
                            <p><?php echo $post["text"] ?></p>
                        </div>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>

</html>