<?php
session_start();

if(!empty($_SESSION['name']))header('location:index.php');
////////// POST->SESSION ///////
    foreach($_POST as $key => $val){
        $_SESSION[$key] = $val;
    }
if(!empty($_FILES)){
    $_SESSION['photo_name'] = $_FILES['photo']['name'];
    print_r($_SESSION);
    //print_r($_FILES);


    ////// save data to 'data-file' ///////
    copy($_FILES['photo']['tmp_name'],'data-file/'.$_SESSION['photo_name']);
}
header('location:preview.php');

?>