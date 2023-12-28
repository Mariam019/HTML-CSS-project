<?php 
        include("header.html");
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
        <link href="photos/feedback.png" rel="icon"/>

        <style>
                @font-face {
   font-family:Dancing_Script ;
   src: url(fonts/Dancing_Script/DancingScript-VariableFont_wght.ttf);
}
body{
    background-color:  #D9C4EC;
}
form{
    font-family:Dancing_Script ;
}
.feedback {
    font-family:Dancing_Script ;
    font-size: 20px;
    width: 400px;
     height : 100px;
     border-radius: 5px;
}
.email{
    font-family: 'Dancing_Script';
   font-size: 20px;
   height: 45px;
   width: 400px;
    border-radius: 5px;
}
.btn{
    font-family: 'Dancing_Script';
   font-size: 20px;
   background-color: #FB7B8E;
   font-weight: 500;
    font-size: 16px;
    width: 10%;
    height: 45px;
    border-radius: 5px;
    cursor: pointer;
}
</style>
</head>
<body>
<form id="feedback" action="feedback.php" method="post">
    <label class="feedback" for="feedback">Feedback :</label>
    <input class="feedback" type="text" name="feedback" maxlength="500"  required>
    <br>
    <br>
    <label class="email" for="email">Email :</label>
    <input class="email" type="email" name="email"   required>
    <br>
    <br>
    
    <input class="btn" type="button" value="Send">

    <input class="btn" type="button" value="Cancel">
</body>
</html>
