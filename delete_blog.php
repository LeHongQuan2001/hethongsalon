<?php
include('control.php');
$get_data = new data();
// $id_user = $_GET['delete'];
$delete= $get_data->delete_dichvu($_GET['delete']);
$id_dichvu = $_GET['delete'];
if ($delete){
    header("location: blog.php");

}
else{
    echo("<script> alert'xóa thất bại'  </script>");
}
?>