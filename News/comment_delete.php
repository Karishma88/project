
<?php

include('db/connection.php');
$del=$_GET['del'];
$query=mysqli_query($conn,"delete from comment where id= '$del'");
if ($query) {
    echo "<script> alert('Comment Deleted !')</script>";
    echo "<script>window.location='http://localhost/news/comments.php';</script>";

}else{
    echo "Please Try Again";

}
   
?>



