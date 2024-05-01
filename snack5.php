<?php
$paragrafoOriginale = "Vi preoccupate di come organizzare le vostre idee in un'accozzaglia testuale che trasmetta efficacemente la narrazione dei vostri concetti?

Scrivere un paragrafo efficace è una delle abilità più importanti che si possano sviluppare come scrittori. 

E avere a disposizione un'eccellente capacità di scrivere paragrafi è uno dei mestieri essenziali che si possono sviluppare.

Tuttavia, i paragrafi non si scrivono da soli, né sono efficaci, convincenti e leggibili di default.

Questo articolo vi illustrerà i consigli su come scrivere un paragrafo perfetto che porterà un ulteriore livello di coinvolgimento nella vostra storia. 

Diamoci dentro!

Che cos'è un paragrafo?
Un paragrafo è un'unità di frasi tutte collegate a un unico tema o idea. È una struttura di scrittura comune che usiamo pertrasmettere informazioni in modo chiaro e conciso. ";
var_dump($paragrafoOriginale);
$paragrafoRisultato = explode(".", $paragrafoOriginale);
var_dump($paragrafoRisultato);
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
                    <a class="nav-link" aria-current="page" href="snack3.php">Snack 3</a>
                    <a class="nav-link" aria-current="page" href="snack4.php">Snack 4</a>
                    <a class="nav-link active" aria-current="page" href="snack5.php">Snack 5</a>
                    <a class="nav-link" aria-current="page" href="snack6.php">Snack 6</a>
                    <a class="nav-link" aria-current="page" href="snack7.php">Snack 7</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Start exercize -->
    <div class="container">
        <h1>Snack 5</h1>
    </div>
</body>

</html>