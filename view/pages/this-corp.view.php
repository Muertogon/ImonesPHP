<?php
session_start();
if(!$_SESSION['email'] == 1){
    header('location:/ImonesPHPwitSQL/login');
}
?>
<?php
include "./view/_partials/nav.view.php"; ?>
<style>
    <?php include 'view/css/table.css'; ?>
</style>
<div class="container">
    <div class="row justify-content-md-center">