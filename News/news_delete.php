<?php
include('db/connection.php');

$id=$_GET['delete'];
$query = mysqli_query($conn, "delete  from news where id= '$id' ");
if($query) {
    echo "<script> alert('News Deleted')</script>";
    echo "<script>window.location='http://localhost/news/news.php';</script>";

}else {
    echo "Please Try AGain";
}

?>
