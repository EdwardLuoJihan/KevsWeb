<!DOCTYPE html>
<html lang="en">
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
                    <div class="navbar__item">
                        <a href="" onclick="getfile('courses');return false;" class="navbar__links" id="courses">Courses</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="hero">
            <div class="hero__container">
                <p class="hero__description">
                    Dummy Text
                </p>
                <button class="course_btn" onclick="getfile('courses');return false;">Courses</button>
            </div>
        </div>
    </body>
    <script>
        history.pushState(null, null, "home");
        $('body').load("home");
    </script>
</html>