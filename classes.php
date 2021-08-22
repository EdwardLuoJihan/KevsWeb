<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="queries.css" />
        <link rel="icon" href="logo.png" />
        <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
        crossorigin="anonymous"
        />
        <title>Math & English Aid - Classes</title>
    </head>
    <body>
        <nav>
            <div class="navbar__container" id="navbar">
                <div class="navbar__logo">
                    <h2 id="title">
                    <a href="home"><img src="logo.png" alt="logo" /></a>
                        <strong>Math & English Aid</strong>
                    </h2>
                </div>
                <div class="navbar__toggle" id="mobile-menu" style="z-index: 99;">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="home" onclick="getfile('home')" class="navbar__links" id="home">Home</a>
                    </li>
                    <li class="navbar__item">
                        <a href="about" onclick="getfile('about')" class="navbar__links" id="about">About Us</a>
                    </li>
                    <div class="navbar__item" id="dropdown">
                      <a href="classes" onclick="getfile('classes')" class="navbar__links" id="highlighted">Classes</a>
                      <div id="dropdown-content">
                        <a href="classes/math" class="navbar__links--classes">Math</a>
                        <a href="classes/language-arts" class="navbar__links--classes">Language Arts</a>
                      </div>
                    </div>
                </ul>
            </div>
        </nav>
        <div class="main" id="home">
          <div class="classes__container">
            <div class="text-box" id="center" style="margin-bottom: 20px;">
              <h1><i class="fas fa-calculator" id="mla"></i></h1>
              <h1>Math</h1>
              <h2>$10 per class/ $15 for both classes</h2>
              <p>
                Classes take place virtually every Saturday at 4:00 p.m. MDT to 5:00 p.m. MDT on Google Meet.
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis soluta, corporis similique dolores iure cum est sed quam inventore veritatis molestias laudantium unde perferendis, nobis aliquid quo consectetur fugit exercitationem?
              </p>
              <div class="btn__container">
                <a href="classes/math" class="courses_btn">View Class</a>
              </div>
            </div>
            <div class="text-box" id="center" style="margin-bottom: 20px;">
              <h1><i class="fas fa-book" id="mla"></i></h1>
              <h1>Language Arts</h1>
              <h2>$10 per class/ $15 for both classes</h2>
              <p>
                Classes take place virtually every Sunday at 4:00 p.m. MDT to 5:00 p.m. MDT on Google Meet.
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis soluta, corporis similique dolores iure cum est sed quam inventore veritatis molestias laudantium unde perferendis, nobis aliquid quo consectetur fugit exercitationem?
              </p>
              <div class="btn__container">
                <a href="classes/language-arts" class="courses_btn">View Class</a>
              </div>
            </div>
          </div>
        </div>
        <hr>
    </body>
    <div class="footer__container" id="home-footer" style="margin-top: 80px;">
        <div class="footer__links">
          <div class="footer__link--wrapper">
            <div class="footer__link--items" id="footer-contact">
              <h1>
                Contact Info
              </h1>
              <p>
                <a
                  href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgmVXwQSBKMGgKBKQDngSCvCQVJNJMGHzRLcWlLmDKBCRHFVXGJHWHfHqSgCVHMxQlJxV"
                  target="_blank"
                  >mathenglishaid@gmail.com</a
                >
              </p>
              <p>
                420-690-4269
              </p>
            </div>
            <div class="footer__link--items">
              <h1>
                Navigate
              </h1>
              <p>
                <a href="home" onclick="getfile('home')" class="navbar__links" id="footer-home-page">Home</a>
              </p>
              <p>
                <a href="about" onclick="getfile('about')" class="navbar__links" id="footer-about-page">About Us</a>
              </p>
              <p>
              <a href="classes" onclick="getfile('classes')" class="navbar__links" id="footer-class-page">Classes</a>
              </p>
            </div>
          </div>
        </div>
        <section class="social__media">
          <div class="social__media--wrap">
            <div class="social__icons">
              <a href="https://www.instagram.com/mathenglishaid/" target="_blank" class="social__icon--link" id="insta"
                ><i class="fab fa-instagram"></i
              ></a>
              <a
                href=""
                target="_blank"
                class="social__icon--link"
                id="youtube"
                ><i class="fab fa-youtube"></i
              ></a>
              <a
                href="https://github.com/EdwardLuoJihan/KevsWeb"
                target="_blank"
                id="github"
                class="social__icon--link"
                ><i class="fab fa-github"></i
              ></a>
              <a href="https://twitter.com/math_englishaid" target="_blank" class="social__icon--link" id="twitter"
                ><i class="fab fa-twitter"></i
              ></a>
            </div>
          </div>
        </section>
      </div>
</html>