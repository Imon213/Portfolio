<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #title{
            font-size:30px;
            margin-left:130px;
            font-family: cursive;
            
        }
        .maindiv{
            width:20%;
            margin:0 auto;
            margin-top:200px;
            border:solid black 1px;
            padding:20px;
            border-radius:10px;
            background:mediumseagreen;
        }
        .input{
            font-size:20px;
            margin-left:30px;
        }
        body{
            background-image:url('lg.jpg');
            background-repeat:no-repeat;
            background-size:cover;
        }
        .submit{
            margin-left:130px;
            font-size:25px;
            padding:10px;
            border-radius:10px;
        }
        </style>
</head>
<body>
    <div class="maindiv">
        <h3 id="title">Login<h3>
            <form action="logincheck.php" method="post">
            <input  type="email" name="email" class="input" id="name" placeholder="Enter Email" align="center"><br><br>
            <input align="center"  type="password" name="password" class="input" placeholder="Enter Password"><br><br>
            <input type="submit" value="LOGIN" name="login" class="submit">
    </form>

</div>
</body>
</html>