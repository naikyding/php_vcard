
<?php
    session_start();

if(empty($_SESSION['username']))header('location:index.php');
//if(!empty($_SESSION['username'])){

    //print_r($_SESSION);
    //echo $_SESSION['photo_name'];
    
    switch ($_SESSION['layout']) {
        case 'type_a':
            $layout = 'type_a.php';
            break;
        case 'type_b':
            $layout = 'type_b.php';
            break;
        case 'type_c':
            $layout = 'type_c.php';
            break;
        case 'type_d':
            $layout = 'type_d.php';
            break;
        
        default:
        $layout = 'type_a.php';
        break;
    }
    
    
    include('./layout/'.$layout.'');

?>