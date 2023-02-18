<?php 

session_start();

if(!$_SESSION['user']){
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg</title>
    <link rel="stylesheet" href="/css/main.css">

</head>
<body>
     <!-- Profile -->

     <form>
        <img src="<?=  $_SESSION['user']['avatar']?>" width="200px" alt="" style=" display:block; margin: 0 auto;">
        <h2 style="margin: 10px 0;">
        <?=  $_SESSION['user']['full_name']?>
        <a href="#"><?=  $_SESSION['user']['email']?></a>
        </h2>
        <a href="vendor/logout.php" class="logout">OUT</a>
     </form>
</body>
</html>