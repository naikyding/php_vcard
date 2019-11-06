<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|ZCOOL+XiaoWei&display=swap" rel="stylesheet">

<?php



?>
<style>
    body{
        font-family: 'Noto Sans TC', 'ZCOOL XiaoWei', serif;

    }
    .content{
        width:100vw;
        height: 100vh;
        display:flex;
        justify-content: center;
        align-items: center;
        font-size: 0;
    }
    .rows{
        width: 800px;
        height: auto;
        display: flex;
        vertical-align: center;
        justify-content: center;
        box-shadow: 5px 5px 10px gray;

    }
    form{
        width:50%;
        height: 600px;
        background-color:white;
        box-sizing:border-box;
        padding: 20px 30px;

    }
    .data{
        font-size: 1rem;;
    }
    
    .wellcome{
        width: 50%;
        height: 600px;
        font-size: 0;
        padding: 3rem 2rem;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-image:linear-gradient(to right, rgba(0,0,0, .6)	, rgba(0,0,0, .6)	 ),
                        url(img/wellcome.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        }
    .wellcome h1{
        font-size: 2rem;
        color:white;

    }
    .wellcome p{
        font-size: 1rem;
        color:white;
    }
    input, select{
        width:100%;
        height: 30px;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding:10px 15px;
        margin: 5px 0 10px;
        font-size: 14px;
        color:gray;
    }
    textarea{
        width:100%;
        font-size: 14px;
        color:gray;
    }

    input[type='file']{
        display: none;
    }
    label[for='l-photo']{
        font-size: 14px;
        padding:5px 20px;
        border-radius:5px;
        background-color:#4682b4;
        position: absolute;
        color:white;
        top: -5px;
        right:0px;
        cursor: pointer; 
    }
    button{
        width: 100px;
        height: 40px;
        border-radius: 3rem;
        background-color:#323237;
        color:white;
        font-size: 16px;
        margin: 15px 0 ;
    }
    button:hover{
        background-color: #555;
    }

    .input_top{
        position: relative;

    }

    .username{
    }
    input[name='username']{
        width:100%;
    }
    textarea{
        border-radius: 10px;
        border: 1px solid #ccc;
        padding:10px 15px;

    }
    .select{
        margin: 10px 0 ;
    }
</style>
<div class="content">
    <div class="rows">
        <div class="wellcome">
            <h1>Welcome Join Us</h1>
            <p>Our staff and employees will do their best to make your visit comfortable and worthwhile. Today, they will introduce to you our newly built plant and research center. Please do not hesitate to ask any questions you might want to ask.  I want to extend my warmest welcome to all of you, and sincerely hope that your visit here will be worthwhile and meaningful.</p>
        </div>
        
        <form action="api.php" method="post" enctype="multipart/form-data">
            
                <div class="data">
                    <div class="input_top">
                        <div class="username">
                            <label for="l-usn">姓名</label>
                            <input type="text name" name="username" id="l-usn">
                        </div>
                            <label for="l-photo"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;頭像上傳</label>
                            <input type="file" name="photo" id="l-photo">
                    </div>

                    <div>
                        <label for="l-ttl">職稱</label>
                        <input type="text" name="title" id="l-ttl">
                    </div>

                    <div>
                        <label for="l-tel">電話</label>
                        <input type="tel" name="tel" id="l-tel">
                    </div>

                    <div>
                        <label for="l-mail">電子信箱</label>
                        <input type="email" name="email" id="l-mail">
                    </div>

                    <div>
                        <label for="l-skill">技能簡介</label><br>
                        <textarea name="skill" id="l-skill" cols="10" rows="5"></textarea>
                    </div>


                    <div class="select">
                        <label for="l-layout">選擇版型</label>
                        <select name="layout" id="l-layout">
                            　<option value="type_a">TypeA</option>
                            　<option value="type_b">TypeB</option>
                            　<option value="type_c">TypeC</option>
                            　<option value="type_d">TypeD</option>
                        </select>
                    </div>

                    <button type="submit" >預&nbsp;&nbsp;覽</button>
        </form>
    </div>
</div>