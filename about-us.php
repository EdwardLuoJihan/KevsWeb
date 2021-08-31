<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
        crossorigin="anonymous"
        />
        <link rel="icon" href="logo.png" />
        <title>Math & English Aid - About Us</title>
        <script src="https://use.fontawesome.com/609ade8089.js"></script>
    </head>
    <body onload="document.body.style.opacity='1'">
        <div id="page">
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
                      <a href="home"  class="navbar__links" id="home">Home</a>
                    </li>
                    <div class="navbar__item" id="dropdown">
                      <a href="classes" onclick="return false;" class="navbar__links" id="classes">Classes</a>
                      <div id="dropdown-content">
                        <a href="classes/math" class="navbar__links--classes">Math</a>
                        <a href="classes/english" class="navbar__links--classes">English</a>
                      </div>
                    </div>
                    <li class="navbar__item">
                      <a href="about-us" class="navbar__links" id="highlighted">About Us</a>
                    </li>
                </ul>
                </div>
            </nav>
        </div>
        <div class="main" id="home">
          <div class="text-box" id="center" style="margin: 25px;margin-top: 0;">
              <h1>Our Team</h1>
              <div class="teampictures">
                <div class="bios" id="kevin">
                  <div class="pfpcontainer" id="kevincont">
                    <img src="classes/kevin.png" alt="kevin" class="pfp" id="center">
                  </div>
                  <h1>Kevin Huang</h1>
                  <h2>Math Instructor</h2>
                  <p>My name is Kevin Huang, and I am 15 years old. I was born in Montreal, Quebec, but my family and I moved to Edmonton when I was just two months old. I developed a passion for math in grade 3, when I was able to use my knowledge to solve simple problems. Being able to combine concepts about math and numbers to solve long problems just seemed so intriguing to me. My love for math continues till this day, and I have been rewarded with very good success in this subject throughout my junior high years. Math is very fun; you just have to discover the beauty of this subject. If you register for our math class, you will develop a desire to learn math, and become prepared to take on math in junior high.</p>
                </div>
                <div class="bios" id="dan">
                  <div class="pfpcontainer" id="dancont">
                    <img src="blank.png" alt="dan" class="pfp" id="center">
                  </div>
                  <h1>Dan Zhang</h1>
                  <h2>English Instructor</h2>
                  <p>My name is Dan Zhang, a 15 year old born in Edmonton, Alberta. From a young age, I believed that writing is an important universal skill, which everyone should be familiar with. Although my writing in elementary could be considered average, I dedicated myself to improving my writing skills within my junior high years. This resulted in me successfully closing my junior high chapter with a 99% at the end of grade 9.
Writing is a form of art; a challenging form of art which takes dedication and practice to master. If you join our English class, we will break down the grade 7 Language Art curriculum and help you get a head start in junior high.</p>
                </div>
              </div>
            </div> 
          <div class="about__container">
            <div class="text-box" id="center" style="margin: 25px;">
              <h1>About Us</h1>
              <p id="bigger-p">
              Here at Math & English Aid, we believe that preparation drives success. Since numeracy and literature are two important, universal skills that are used on a daily basis, we are offering Math and English classes to grade 5-6 students attending school in Edmonton. 
<br><br>
Why should you choose our class over other classes? Although we aren’t as knowledgeable in our fields as other professional tutors, we recently lived through junior high, capping off our grade 9 year with a perfect 100% average in Math, and an astonishing 99% in English. To us, junior high was a journey; an intimidating experience where preparation defines success. Our classes will prepare you step by step to ensure you are prepared for your endeavours in junior high numeracy and literature. We wish to share with you both our successes and struggles while simultaneously setting an engaging atmosphere to make learning English and Math fun.
<br><br>
If you have any questions, feel free to contact us by email at <a
                  href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgmVXwQSBKMGgKBKQDngSCvCQVJNJMGHzRLcWlLmDKBCRHFVXGJHWHfHqSgCVHMxQlJxV"
                  target="_blank"
                  id = "email"
                  style="color: black;text-decoration: none;"
                  >mathenglishaid@gmail.com</a
                > or text us at . We hope to see you in class!
              </p>
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
                  id = "email"
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
                <a href="home"  class="navbar__links" id="footer-home-page">Home</a>
              </p>
              <p>
                <a href="about-us" class="navbar__links" id="footer-about-page">About Us</a>
              </p>
              <p>
              <a href="classes" class="navbar__links" id="footer-class-page">Classes</a>
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
</html>