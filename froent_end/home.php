<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .home{
        position: absolute;
        color: #fff;
        top: 390px;
        left: 120px;
    }
    .home > h1{
        font-size: 65px;   
    }
    .home > p{
        font-size: 25px;   
    }
    img{
        height: 700px;
        width: 100%;
    }
</style>
<body>
    <?php include "./index.php"; ?>
    <img src="./banner.jpg" class="img-fluid" alt="Responsive image">
    <div class="home">
        <h1>
        Student Management System
        </h1>
        <p>Registered Students can Login Here</p>
        <a class="btn btn-primary" href="../sms/index.php">Student Login</a>
    </div>
    <?php
    include "./about.php";
    ?>
</body>

</html>