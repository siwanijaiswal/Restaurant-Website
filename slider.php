<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/slider.css">
</head>

<body>
    <main>
        <div class="slider-container">
            <div class="slides fade">
                <div class="slider-image"><img src="./img/pic1.jpg" alt="background_1"></div>
            </div> <!-- slider -->

            <div class="slides fade">
                <div class="slider-image"><img src="./img/pic2.jpg" alt="background_2"></div>
            </div> <!-- slider -->

            <div class="slides fade">
                <div class="slider-image"><img src="./img/pic3.jpg" alt="background_3"></div>
            </div> <!-- slider -->

            <div class="slides fade">
                <div class="slider-image"><img src="./img/pic4.jpg" alt="background_4"></div>
            </div> <!-- slider -->
        </div>
    </main>
    <script>
        var slideIndex = 1;

        function showImage(n) { // for Display the first Image
            'use strict';
            var slide = document.getElementsByClassName('slides'),
                i;
            if (n > slide.length) { // to prevent larger values than the slide length
                slideIndex = 1;
            }
            if (n < 1) { // to avoide negative values
                slideIndex = slide.length;
            }
            for (i = 0; i < slide.length; i++) { // to make other images dispaly: none
                slide[i].style.display = 'none';
            }
            slide[slideIndex - 1].style.display = 'block';
        }
        showImage(slideIndex);

        function plusIndex(n) { // for Next & Prev Actions
            'use strict';
            showImage(slideIndex += n);
        }

        setInterval(function() {
            'use strict';
            showImage(slideIndex += 1);
        }, 4000);
    </script>

</body>

</html>