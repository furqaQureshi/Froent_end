<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    *{
        padding: 0;
        margin: 0;
    }
    .navbar{
        background-color: #E1009F;
        height: 80px;
    }
    .navbar-brand{
      font-size: 30px;
      margin-left: 40px;
    }
    .navbar a{
        color: #fff;
        font-size: 19px;
    }
    .navbar-nav {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
}
  </style>
  <body>
  <nav class="navbar navbar-expand-lg navbar fixed-top">
  <a class="navbar-brand" href="#">SMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="nav justify-content-center">
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link mx-2" href="./home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-2" href="./about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-2" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link mx-2" href="#">Admin</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link mx-2" href="#">Student</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
</body>
</html>