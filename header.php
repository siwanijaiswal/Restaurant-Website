<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet" />

  <title>Document</title>
  <style>
    a {
      text-decoration: none;
      color: #000;
    }

    nav {
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      background: lightgray;
      margin-bottom: 0.5rem;
      color:black;
      font-size: 25px;
    }

    .nav_start {
      display: flex;
      align-items: center;
      flex: 1;
    }

    .nav_brand {
      font-size: 1rem;
      font-weight: 700;
      margin-right: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .nav_brand img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      margin-bottom: 5px;
    }

    ul li {
      display: inline-block;
      margin-right: 20px;
    }

    .flex-box{
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      gap: 5px;
    }

    .nav_end{
      display: flex;
      align-items: center;
      flex: 1;
      justify-content: flex-end;
      gap: 1rem;
    }
  </style>
</head>

<body>
  <nav>
    <div class="nav_start">
      <div class='nav_brand'>
        <img src="./img/logo1.png" alt="">
        <a href="">SABRINA</a>
      </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <div class = 'nav_end'>
      <div class="flex-box">
        <i class="ri-restaurant-fill"></i>
        <a href='menu.php'>Menu</a>
      </div>
      <div class="flex-box">
        <i class="ri-phone-fill">
          </i>
          <p>029-56736833</p>
      </div>
    </div>
  </nav>
</body>

</html>