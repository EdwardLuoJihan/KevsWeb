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
                        <a href="" onclick="getfile('home');return false;" class="navbar__links" id="home">Home</a>
                    </div>
                    <div class="navbar__item">
                        <a href="" onclick="getfile('about');return false;" class="navbar__links" id="about">About Us</a>
                    </div>
                    <div class="navbar__item">
                        <a href="" onclick="getfile('courses');return false;" class="navbar__links" id="highlighted">Courses</a>
                    </div>
                </div>
            </div>
        </nav>
        
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