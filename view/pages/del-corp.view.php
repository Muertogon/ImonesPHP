<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<?php include "./view/_partials/nav.view.php";?>
<div class="container">
    <div class="row justify-content-md-center">
        <h2>Delete Corp</h2>
        <form method="post">
            <div class="form-group">
                <input type="text" placeholder="Imones ID" class="form-control" id="id" name="id">
            </div>
            <button type="submit" class="btn btn-dark" name="delete">Delete</button>
        </form>
    </div>
</div>
</body>
</html>