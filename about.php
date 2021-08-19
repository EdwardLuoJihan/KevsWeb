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
        <div id="page">
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
                    <ul class="navbar__menu">
                        <li class="navbar__item">
                            <a href="" onclick="getfile('home');return false;" class="navbar__links" id="home">Home</a>
                        </li>
                        <li class="navbar__item">
                            <a href="" onclick="getfile('about');return false;" class="navbar__links" id="highlighted">About Us</a>
                        </li>
                        <div class="navbar__item">
                            <a href="" onclick="getfile('courses');return false;" class="navbar__links" id="courses">Courses</a>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </body>
</html>