<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .input{
            margin-left:120px;
            font-size:18px;

        }
        #phone{
            margin-left:38px;
            font-size:18px;
        }
        #title{
            font-size:18px;
            margin-left:58px;
        }
        #textarea{
            margin-left:250px;
            font-size:18px;
            
        }
        .maindiv{
            width:50%;
            margin:auto auto;
            margin-top:150px;
            border:solid black 1px;
            padding:20px;
            background:mediumseagreen;
        }
        label{
            margin-left:120px;
            font-size:20px;
            font-family: cursive;
            
        }
        #submit{
            font-size:22px;
            margin-left:350px;
            padding:10px;
            background:tomato;
            font-family: cursive;
            border-radius:20px;
           padding-left: 30px;
           padding-right:30px;
           
        }
        body{
            background-image:url("portfolio.jpg");
            
        }
       
        </style>
</head>
<body>
    <div class="maindiv">
        <form method="post" action="hirecheck.php">
            <label for="name">Enter Your name</label>
            <input type="text" name="name" class="input" id="name"><br><br>
            <label for="email">Enter Your Email</label>
            <input type="email" name="email" class="input" id="email"><br><br>
            <label for="phone">Enter Your Phone Number</label>
            <input type="number" name="phone" class="" id="phone"><br><br>
            <label for="title">Enter Your project title</label>
            <input type="text" name="title" class="" id="title"><br><br>
            <textarea id="textarea" rows="10" cols="30" class="details" name="details" >Enter your Project Details...</textarea><br><br>
            <input type="submit" name="submit" value="Submit" id="submit">
</div>
</body>
</html>