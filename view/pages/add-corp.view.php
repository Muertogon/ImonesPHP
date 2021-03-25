<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<?php include "./view/_partials/nav.view.php";?>
<h2>Corporations</h2>
<form method="post">
    <div class="form-group">
        <input type="text" placeholder="Pavadinimas" class="form-control" id="pavadinimas" name="pavadinimas" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input type="number" placeholder="Kodas" class="form-control" id="kodas" name="kodas" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input type="number" placeholder="Pvm kodas" class="form-control" id="pvm_kodas" name="pvm_kodas" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input type="text" placeholder="Adresas" class="form-control" id="adresas" name="adresas" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input type="number" placeholder="Telefonas" class="form-control" id="telefonas" name="telefonas" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input type="email" placeholder="El paštas" class="form-control" id="el_pastas" name="el_pastas" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input type="text" placeholder="Veikla" class="form-control" id="veikla" name="veikla" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <input type="text" placeholder="Vadovas" class="form-control" id="vadovas" name="vadovas" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary" name="send">Add</button>
</form>
</body>
</html>
