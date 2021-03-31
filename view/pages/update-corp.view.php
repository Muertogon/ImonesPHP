<?php
session_start();
if(!$_SESSION['email'] == 1){
    header('location:/ImonesPHPwitSQL/login');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<?php include "./view/_partials/nav.view.php";?>
<div class="container">
    <div class="row justify-content-md-center">
        <h2>Edit Corp information</h2>
        <form method="post">
            <div class="form-group">
                <input type="text" placeholder="Imones ID" class="form-control" id="id" name="id">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Pavadinimas" class="form-control" id="pavadinimas" name="pavadinimas">
            </div>
            <div class="form-group">
                <input type="number" placeholder="Kodas" class="form-control" id="kodas" name="kodas">
            </div>
            <div class="form-group">
                <input type="number" placeholder="Pvm kodas" class="form-control" id="pvm_kodas" name="pvm_kodas">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Adresas" class="form-control" id="adresas" name="adresas">
            </div>
            <div class="form-group">
                <input type="number" placeholder="Telefonas" class="form-control" id="telefonas" name="telefonas">
            </div>
            <div class="form-group">
                <input type="email" placeholder="El paštas" class="form-control" id="el_pastas" name="el_pastas">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Veikla" class="form-control" id="veikla" name="veikla">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Vadovas" class="form-control" id="vadovas" name="vadovas">
            </div>
            <button type="submit" class="btn btn-outline-dark" name="update">Update</button>
        </form>
    </div>
</div>
</body>
</html>