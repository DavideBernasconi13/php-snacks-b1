<?php

// Snack 2
// Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

function controlla()
{
    $message = "";
    if (!empty($_GET["name"]) && !empty($_GET["email"]) && !empty($_GET["age"])) {
        $name = $_GET["name"];
        $email = $_GET["email"];
        $age = $_GET["age"];

        if (strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
            $message = ('accesso riuscito');
        } else {
            $message = ('accesso negato');
        }
        return $message;
    }
}
var_dump(controlla());

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
                    <a class="nav-link active" aria-current="page" href="snack2.php">Snack 2</a>
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
    <header class="container">

        <h1>Snack 2</h1>

    </header>
    <main class="container">
        <form action="snack2.php" method="GET">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp"
                    placeholder="Enter name" name="name">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" placeholder="Age" name="age">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-default">Reset</button>
        </form>
    </main>
</body>

</html>