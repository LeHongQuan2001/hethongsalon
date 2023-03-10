<?php
include('control.php');
$get_data = new data();
// $id_user = $_GET['delete'];
$delete= $get_data->delete_user($_GET['delete']);
$id_user = $_GET['delete'];
if ($delete){
    header("location: admin.php");
}
else{
    echo("<script> alert'not delete!!!'  </script>");
}
?>