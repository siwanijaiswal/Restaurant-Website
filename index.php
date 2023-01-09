<?php
include 'header.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Management Website</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
  <?php include 'slider.php' ?>
  <section id="home">
    <div id="services">
      <div class="box">
        <img src="./img/pic2.jpg" alt="" />
        <a href='menu.php' class="h-secondary center">Menu</a>
      </div>
      <div class="box">
        <img src="./img/pic3.jpg" alt="" />
        <a href='menu_special.php' class="h-secondary center">Specials</a>
      </div>
      <div class="box">
        <img src="./img/pic5.jpg" alt="" />
        <a href='https://www.google.com/maps/place/Hotel+Sabrina/@27.7615319,85.3497688,17z/data=!3m1!4b1!4m8!3m7!1s0x39eb1eac62ef2839:0x67ec2950036c23c3!5m2!4m1!1i2!8m2!3d27.7615319!4d85.3519575' target='blank' class="h-secondary center">Map</a>
      </div>
    </div>

  </section>
  <section id="about">
    <div class="info">
      <h1>About Our Cafe</h1>
      <h2>It was established in 2015 in 17/A, Ashram Road, Ahmedabad
        Gujarat, India.</h2>
      <h2>We provide the best service in the town.We treat our customer as a god. You will feel like your home.We provide you all the facilities.</h2>
      <h2>We have a beautiful swimming pool also.You can have a best dinner date here.</h2>
      <h2> You'll Love All The Amenities We Offer! WORTH TO COME AGAIN</h2>
      <h2>Best Service with best price</h2>
      <img src="./img/aboutpic.jpg" alt="" />
    </div>
  </section>
  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>
</body>

</html>

<?php
include './footer.php'
?>