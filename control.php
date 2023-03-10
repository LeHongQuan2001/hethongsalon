<?php
include('connect.php');
 class data{
    public function in_contact($name,$email,$sub,$mess,$term,$subcribe)
    {
        global $conn;
        $sql="insert into contact(Name,Email,Subject,Message,Term,Subcribe)
        values('$name','$email','$sub','$mess','$term','$subcribe')";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function in_dichvu($tendichvu,$giadichvu){
        global $conn;
        $sql="insert into dichvu(TenDichVu,GiaDichVu) values('$tendichvu','$giadichvu')";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    public function login($user,$pass){
        global $conn;
        $sql="select*from register where user='$user' and password='$pass'and level='2'";
        $run=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($run);
        return $count;
    }
    public function login_admin($user,$pass){
        global $conn;
        $sql="select*from register where user='$user' and password='$pass' and level='1'";
        $run=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($run);
        return $count;
    }
public function register($user,$password,$address,$date,$file,$gender,$hobbie){
    global $conn;
    $sql="insert into register(user,password,address,date,file,gender,hobbie,level)
    values('$user','$password','$address','$date','$file','$gender','$hobbie','2')";
    $run=mysqli_query($conn,$sql);
    return $run;
}

public function kt_user($user){
    global $conn;
    $sql="select*from register where user='$user'";
    $run=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($run);
    return $count;
}

public function changepass($user,$pass,$pass2){
    global $conn;
    $sql="update register set password='$pass2' where user='$user' and password='$pass'";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function forgotpass($user){
    global $conn;
    $sql="select password from register where user='$user'";
    $run=mysqli_query($conn,$sql);
    $t=mysqli_fetch_array($run);
    return $t; 
}
// public function select_blog (){
//     global $conn;
//     $sql="select * from blog where level_blog='1'";
//     $run=mysqli_query($conn,$sql);
//     return $run;
// }
// public function select_blog_id ($id_blog){
//     global $conn;
//     $sql="select * from blog where id_blog=$id_blog";
//     $run=mysqli_query($conn,$sql);
//     return $run;
// }
public function select_dichvu_id ($id_dichvu){
    global $conn;
    $sql="select * from dichvu where IDDichVu=$id_dichvu";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function select_admin($user){
    global $conn;
    $sql="select * from register where user='$user'and level='1'";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function select_user($user){
    global $conn;
    $sql="select * from register where user='$user' and level='2'";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function select_info($id_user){
    global $conn;
    $sql="select * from register where id_user='$id_user'";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function select_user_admin(){
    global $conn;
    $sql="select * from register where level='2'";
    $run=mysqli_query($conn,$sql);
    return $run;
}
// public function select_blog_admin(){
//     global $conn;
//     $sql="select * from blog";
//     $run=mysqli_query($conn,$sql);
//     return $run;
// }
public function select_dichvu_admin(){
    global $conn;
    $sql="select * from dichvu";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function select_lichdat(){
    global $conn;
    $sql="select * from lichdat";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function select_blog_user($user){
    global $conn;
    $sql="select * from blog where user='$user'";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function delete_user($id_user){
    global $conn;
    $sql="delete from register where id_user='$id_user'";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function delete_blog($id_blog){
    global $conn;
    $sql="delete from blog where id_blog='$id_blog'";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function delete_dichvu($id_dichvu){
    global $conn;
    $sql="delete from dichvu where IDDichVu='$id_dichvu'";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function update_user($user,$address,$date,$file,$gender,$hobbie,$id_user){
    global $conn;
    $sql="update register set user='$user', address='$address',date='$date',file='$file',gender='$gender',hobbie='$hobbie' 
     where id_user='$id_user'";
    $run=mysqli_query($conn,$sql);
    echo $sql;
    return $run;
}

public function update_dichvu($tendichvu,$giadichvu,$iddichvu){
    global $conn;
    $sql="update dichvu set TenDichVu='$tendichvu', GiaDichVu='$giadichvu' where IDDichvu='$iddichvu'";
    $run=mysqli_query($conn,$sql);
    echo $sql;
    return $run;
}

public function insert_dichvu($tendichvu,$giadichvu){
    global $conn;
    $sql="INSERT INTO dichvu (TenDichVu, GiaDichVu) VALUES ('$tendichvu','$giadichvu')";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function post_blog($id_blog)
{
    global $conn;
    $sql="UPDATE blog SET level_blog='1' where id_blog='$id_blog'";
    $run=mysqli_query($conn,$sql);
    return $run;
}
public function unpost_blog($id_blog)
{
    global $conn;
    $sql="UPDATE blog SET level_blog='2' where id_blog='$id_blog'";
    $run=mysqli_query($conn,$sql);
    return $run;
}


}
?>