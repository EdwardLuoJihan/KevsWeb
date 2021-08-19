<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Kev Web</title>
    </head>
    <body>
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
                        <a href="" onclick="getfile('home');return false;" class="navbar__links" id="highlighted">Home</a>
                    </div>
                    <div class="navbar__item">
                        <a href="" onclick="getfile('about');return false;" class="navbar__links" id="about">About Us</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="hero">
            <div class="hero__container">
                <p class="hero__description">
                    Dummy Text
                </p>
            </div>
        </div>
    </body>
    <script>
        function getfile(data) {
                var file = data;
            $('body').load(file, function() {
                $(this)
                    .css("opacity", 0)
                    .stop()
                    .animate({ opacity: 1 });
                $(document).ready(function() {
                    $("body").slideDown(2000);
                });
            });
            history.pushState(null, null, file);
        }
    </script>
</html>