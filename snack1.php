<?php
// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55-60

$play = [
    [
        "squadra di casa" => "Olimpia Milano",
        "squadra ospite" => "Cantù",
        "punti squadra casa" => "55",
        "punti squadra ospite" => "60",
    ],
    [
        "squadra di casa" => "Saronno",
        "squadra ospite" => "Varese",
        "punti squadra casa" => "70",
        "punti squadra ospite" => "10",
    ],
    [
        "squadra di casa" => "Roma",
        "squadra ospite" => "Empoli",
        "punti squadra casa" => "39",
        "punti squadra ospite" => "90",
    ]
];

// var_dump($play);

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
                    <a class="nav-link active" aria-current="page" href="snack1.php">Snack 1</a>
                    <a class="nav-link" aria-current="page" href="snack2.php">Snack 2</a>
                    <a class="nav-link" aria-current="page" href="snack3.php">Snack 3</a>
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
        <h1>Snack 1</h1>
        <div class="text-center">
            <ul>
                <?php foreach ($play as $key)

                    echo $key['squadra di casa'] ?> - <?php echo $key['squadra ospite'] ?>

            </ul>
        </div>
    </div>
</body>

</html>