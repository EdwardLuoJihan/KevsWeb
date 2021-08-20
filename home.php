<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="queries.css" />
        <title>Kev Web</title>
    </head>
    <body onload="document.body.style.opacity='1'">
        <nav>
            <div class="navbar__container" id="navbar">
                <div class="navbar__logo">
                    <h2 id="title">
                        <strong>KevWeb</strong>
                    </h2>
                </div>
                <div class="navbar__toggle" id="mobile-menu" style="z-index: 99;">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <div class="navbar__menu">
                    <div class="navbar__item">
                        <a href="home" onclick="getfile('home')" class="navbar__links" id="highlighted">Home</a>
                    </div>
                    <div class="navbar__item">
                        <a href="about" onclick="getfile('about')" class="navbar__links" id="about">About Us</a>
                    </div>
                    <div class="navbar__item">
                        <a href="classes" onclick="getfile('classes')" class="navbar__links" id="classes">Classes</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="hero">
            <div class="hero__container">
                <p class="hero__description">
                    Dummy Text
                </p>
                <div class="btn__container">
                    <a href="classes" class="course_btn">Classes</a>
                </div>
            </div>
        </div>
        <div class="main" id="home">
            <div class="course__container">
                <div class="text-box" id="left">
                    <h1>Dummy text</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                        hic porro, aliquam repudiandae accusantium iste facere vel
                        voluptatem enim voluptates rerum amet, architecto culpa temporibus
                        dignissimos at? Fuga, nobis molestiae!
                    </p>
                </div>
                
                <div class="text-box" id="left">
                    <h1>Dummy text</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                        hic porro, aliquam repudiandae accusantium iste facere vel
                        voluptatem enim voluptates rerum amet, architecto culpa temporibus
                        dignissimos at? Fuga, nobis molestiae! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum eligendi itaque asperiores cumque voluptate at sunt, sint explicabo velit ullam aperiam saepe ducimus molestiae corrupti obcaecati sed assumenda voluptatum quas.
                    </p>
                    
                </div>
            </div>
            <hr>
        </div>
    </body>
    <script>
        $(document).ready(function() {
            $("body").slideDown(2000);
        });
        function getfile(data) {
            $("body").load(data, function() {
                $(this)
                    .css("opacity", 0)
                    .stop()
                    .animate({ opacity: 1 });
            $(document).ready(function() {
                $("body").slideDown(2000);
            });
        }
    </script>
</html>