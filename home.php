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
        <title>Math & English Aid - Home</title>
        <script src="https://use.fontawesome.com/609ade8089.js"></script>
    </head>
    <body onload="document.body.style.opacity='1'">
        <nav>
            <div class="navbar__container" id="navbar">
                <div class="navbar__logo">
                    <h2 id="title">
                    <a href="home"><a href="home"><img src="logo.png" alt="logo" /></a></a>
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
                      <a href="home"  class="navbar__links" id="highlighted">Home</a>
                    </li>
                    <div class="navbar__item" id="dropdown">
                      <a href="classes" onclick="return false;" class="navbar__links" id="classes">Classes</a>
                      <div id="dropdown-content">
                        <a href="classes/math" class="navbar__links--classes">Math</a>
                        <a href="classes/english" class="navbar__links--classes">English</a>
                      </div>
                    </div>
                    <li class="navbar__item">
                      <a href="about-us" class="navbar__links" id="about">About Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="hero">
            <div class="hero__container">
                <p class="hero__heading">
                    Math & English Aid
                </p>
                <p class="hero__description">
                  "Before anything else, preparation is the key to success."<br>- Alexander Graham Bell
                </p>
                <div class="btn__container">
                    <a href="classes" class="course_btn">Classes</a>
                </div>
            </div>
        </div>
        <div class="main" id="home">
            <div class="course__container">
                <div class="text-box" id="left">
                    <h1>Math</h1>
                    <p id="middle-p">
                    Math is used in everyday life. Shopping at the grocery store, cooking, and managing time all require good math skills. Math is also the base of many other subjects, such as physics or chemistry. In other words, you can’t dodge math in life. It will come up sooner or later, and the only way you can conquer math is to prepare for it in advance, which is what Math & English Aid is fully committed and dedicated to doing.
                    </p>
                    <a href="classes/math" class='learnmore'>Learn more <span>»</span></a>
                </div>
                
                <div class="text-box" id="left">
                    <h1>English</h1>
                    <p id="middle-p">
                    English Language Arts is simply necessary for all post-secondary programs and courses. There is no way around this cold, hard fact. Even if you become a scientist, you still won’t be able to leave English behind. Dale Carnegie states that 
“Financial success is due to 15% knowledge and 85% the ability to express ideas, to assume leadership and to arouse leadership among people.” The whole purpose behind English Language Arts is to develop a strong ability to communicate with people. In other words, your English knowledge must be vast and strong if you want to succeed in life. Our team at Math & English Aid is devoted to pushing you further into your English Language Arts journey.
                    </p>
                    <a href="classes/english" class='learnmore'>Learn more <span>»</span></a>
                </div>
            </div>
            <hr>
        </div>
    </body>
    <div class="footer__container" id="home-footer">
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
                  id = "email"
                  >mathenglishaid@gmail.com</a
                >
              </p>
              <p>
                420-690-4269
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
                href="https://github.com/EdwardLuoJihan/M_E_Aid_Source"
                target="_blank"
                id="github"
                class="social__icon--link"
                ><i class="fab fa-github"></i
              ></a>
              <a href="https://twitter.com/math_englishaid" target="_blank" class="social__icon--link" id="twitter"
                ><i class="fab fa-twitter"></i
              ></a>
              <a href="" target="_blank" class="social__icon--link" id="facebook"
                ><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </div>
          </div>
        </section>
      </div>
    <script>
        window.history.pushState(null, null, "home");
    </script>
</html>

<?php echo ''; ?>
