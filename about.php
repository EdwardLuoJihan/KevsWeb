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
                        <li class="navbar__item">
                            <a href="about" class="navbar__links" id="highlighted">About Us</a>
                        </li>
                        <div class="navbar__item" id="dropdown">
                          <a href="classes" class="navbar__links" id="classes">Classes</a>
                          <div id="dropdown-content">
                            <a href="classes/math" class="navbar__links--classes">Math</a>
                            <a href="classes/language-arts" class="navbar__links--classes">Language Arts</a>
                          </div>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="main" id="home">
          <div class="about__container">
            <div class="text-box" id="center" style="margin: 25px;">
              <h1>About Us</h1>
              <p id="bigger-p">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id perspiciatis impedit debitis quisquam veritatis porro facilis tenetur, delectus illum architecto quia optio maiores, esse qui minus at cupiditate repudiandae accusantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, fugiat ea aliquid cupiditate iusto, porro soluta dolores quasi nemo adipisci voluptas voluptatem ipsa ducimus nisi consequuntur repellendus, minus recusandae inventore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ab deserunt velit qui voluptatum, voluptate sit ut rerum natus necessitatibus autem officia, eveniet aliquam! Provident ab rerum corporis voluptates alias. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates libero laborum minus optio veritatis consectetur in, commodi laudantium est. Eveniet totam in aut sed perferendis. Dignissimos ab nesciunt laborum perspiciatis?
              </p>
            </div> 
            <div class="text-box" id="center" style="margin: 25px;margin-top: 0;">
              <h1>Our Team</h1>
              <div class="teampictures">
                <div class="bios" id="kevin">
                  <div class="pfpcontainer" id="kevincont">
                    <img src="classes/kevin.png" alt="kevin" class="pfp" id="center">
                  </div>
                  <h1>Kevin Huang</h1>
                  <h2>Math Instructor</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione recusandae minus facere nam suscipit vel doloribus quam eius voluptatibus, aliquam rem iste omnis laborum ipsam modi beatae inventore voluptas quisquam?</p>
                </div>
                <div class="bios" id="dan">
                  <div class="pfpcontainer" id="dancont">
                    <img src="https://cdn.imgbin.com/9/14/20/imgbin-toy-story-2-buzz-lightyear-to-the-rescue-rapunzel-mr-potato-head-character-lovely-eggs-ms-potato-head-digital-illustration-fUkrzfUnDNZMLPXSwbyZ9cJUT.jpg" alt="dan" class="pfp" id="center">
                  </div>
                  <h1>Dan Zhang</h1>
                  <h2>English Instructor</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione recusandae minus facere nam suscipit vel doloribus quam eius voluptatibus, aliquam rem iste omnis laborum ipsam modi beatae inventore voluptas quisquam?</p>
                </div>
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
                <a href="about" class="navbar__links" id="footer-about-page">About Us</a>
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
            </div>
          </div>
        </section>
      </div>
</html>