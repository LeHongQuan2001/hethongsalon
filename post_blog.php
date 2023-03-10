<?php
include('control.php');
$get_data = new data();
// $id_user = $_GET['delete'];
$post= $get_data->post_blog($_GET['post']);
$id_blog = $_GET['post'];
if ($post){
    header("location: admin.php");
}
else{
    echo("<script> alert'not post!!!'  </script>");
}
?>