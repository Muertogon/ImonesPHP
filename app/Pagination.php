<?php
namespace ImonesApp;
use PDO;
class Pagination{
    if(isset($_GET['pageno']){

    }
    $no_of_records_per_page = 6;
    $offset = ($pageno-1)* $no_of_records_per_page;

    $total_pages_sql = "SELECT COUNT(*) FROM imones";
    $result = mysqli_query($conn, $total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    $sql = "SELECT * FROM imones LIMIT $offset, $no_of_records_per_page";
}