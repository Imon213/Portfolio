<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .leftdiv{
             margin:0 auto;
            width:30%;
            height:800px;
            background:#ADD8E6;
           float:left;
           margin-left:60px;
            
        }
        .rightdiv{
            width:60%;
            height:800px;
            background-image:url("portfolio.jpg");
            background-size:cover;
            float:left;
           
        }
        .pimage{
            width:150px;
            height:150px;
            border-radius:60px;
           margin-left:150px;
           margin-top:40px;
        }
        .name{
            font-size:30px;
            font-family: cursive;
            margin-left:130px;
            
        }
        .position{
            margin-left:130px;
            font-family: cursive;
            font-size:20px;
        }
        li{
            margin-left:130px;
            
        }
        .demo{
            font-size:25px;
            text-decoration:none;
            color:black;
        }
        .footer{
            font-size:17px;
            margin-top:60px;
            margin-left:70px;
            color:gray;
        }
        .hireme{
            font-size:30px;
            position:absolute;
            margin-left:400px;
            margin-top:400px;
            background:blue;
            color:white;
            text-decoration:none;
            padding:20px;  
        }
        .hireme:hover{
            background:tomato;
        }
        .del{
            position:absolute;
            background:silver;
            font-size:20px;
            width:200px;
            margin-left:230px;
            margin-top:220px;
            padding:20px;
            border-radius:14px;
            visibility:hidden;
        }
        .rightdiv:hover .del{
            visibility:visible;
        }
        .login{
            position:absolute;
           margin-left:950px;
           margin-top:20px;
           background:blue;
           font-size:25px;
           color:white;
           padding:20px;
           text-decoration:none;
        }
        </style>
</head>
<body>
    <div class="leftdiv">
         <img class="pimage" src="imon.jpg">
         <h3 class="name">Imon Faysal</h3>
         <h4 class="position">Software Engineer</h4>
         <ul type="none">
            
             <li ><a class="demo" href="home.php">Home</a></li>
             <li><a class="demo" href="service.php">Services</a></li>
             <li><a class="demo" href="skill.php">Skills</a></li>
             <li><a class="demo" href="home.php">Education</a></li>
             <li><a class="demo" href="experience.php">Experiences</li>
             <li><a class="demo" href="work.php">Work</li>
             <li><a class="demo" href="blog.php">Blog</li>
             <li><a class="demo" href="contact.php">Contact</li>
    
    </ul>
   <h3 class="footer"> @Copyright @2021 All Rights Reserved| This<br> templeate is made with love<h3>
</div>
<div class="rightdiv">
    <a class="login" href="login.php">Login</a>
    <h3 class="del"> Hello, This is Imon,<br>A Software Engineer.<br> If you want to hire me<br>then just click on hire me</h3>

    <a class="hireme" href="hiremr.php">Hire Me</a>
   
    </div>
</body>
</html>