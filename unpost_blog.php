<?php
include('control.php');
$get_data = new data();
// $id_user = $_GET['delete'];
$unpost= $get_data->unpost_blog($_GET['unpost']);
$id_blog = $_GET['unpost'];
if ($unpost){
    header("location: admin.php");
}
else{
    echo("<script> alert'not unpost!!!'  </script>");
}
?>