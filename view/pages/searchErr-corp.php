<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <style>
        section{
            color: red;
        }
    </style>
</head>
<body>
<?php include "./view/_partials/nav.view.php";?>
<h2>Ieskoti imones</h2>
<form method="post">
    <div class="form-group">
        <input type="text" placeholder="Pavadinimas" class="form-control" id="pavadinimas" name="pavadinimas" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary" name="search">Search</button>
    <div>
        <section>Iveskite ka nors</section>
    </div>
</form>
</body>
</html>
