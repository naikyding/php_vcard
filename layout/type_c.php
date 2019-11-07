<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
    *{
        margin:0;
        padding:0;
        list-style: none;
    
    }
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .content{
        width:100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container{
        width:400px;
        margin:auto;
        border:1px solid lightgray; 
        border-radius:1.5rem;
    
    }
    .img{
        width:130px;
        height:130px;
    }
    .img img{
        width:100%;
        height: 100%;
        border-radius: 50%;
        border:2px solid lightgray;
        object-fit: cover;
    }
    .text{
        padding: 0 2rem;
        color:white;
        
    }
    .header{
        display: flex;
        align-items: center;
        background-color: greenyellow;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
        padding:1rem 2rem;
        
    }

    h3{
        border-bottom:1px solid lightgray;
    }
    .row{
        padding:1rem 2rem;
        position: relative;
    }
    .margin{
        margin: 1em 0 2em;
    }

    .row p{
        margin: .3rem 0;
        color:li;
    }
    button{
        width:100px;
        height:40px;
        border-radius: 20px;
        font-size: 14px;
    }
    button:hover{
        color:white;
        background-color: lightskyblue;
    }
    .goback{
        width:60px;
        height:60px;
        background-color: lightgray;
        border-radius:50%;
        position: absolute;
        top:-30px;
        right:30px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    i{
        color:white;
    }
</style>

<div class="content">

    <div class="container">
        <div class="header">
            <div class="img">
<?php
if(!empty($_SESSION['photo_name'])){
    echo '<img src="./data-file/'.$_SESSION['photo_name'].'" alt="'.$_SESSION['photo_name'].'">';
}else{
    echo '<img src="./img/none.jpg" alt="未設置頭像">';
}
?>
            </div>
            <div class="text">
                <div class="name"><h2><?=$_SESSION['username']?></h2></div>
                <div class="title"><p><?=$_SESSION['title']?></p></div>
            </div>
        </div>

        <div class="row">
            
            <div class="goback">
                <a href="javascript:history.go(-1)"><i class="fas fa-user-edit"></i></a>
            </div>
            <div class="skill margin">
                <h3>技能簡介</h3>
                <p><?=$_SESSION['skill']?></p>
            </div>

            <div class="tel margin">
                <h3>聯絡電話</h3>
                <p><?=$_SESSION['tel']?></p>
            </div>

            <div class="mail margin">
                <h3>電子信箱</h3>
                <p><?=$_SESSION['email']?></p>

            </div>

        </div>

    </div>

</div>
