<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Enigma GXP</title>
    <meta name="description" content="Enigma XP">
    <meta name="author" content="Benny">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Enigma</h3>

                <h1>
                    Guild XP <br>

                </h1>

                <div class="home-content__buttons">
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        Browse
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark"></h3>
                <h1 class="display-1 display-1--light">Members Guild XP</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">



            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
          <?php
          $id = '5988f8340cf2851f860c9a7b';
          $key = '51edd92e-95fd-4025-ab97-a021939e058c'; // i have changed this key
          $json = file_get_contents('https://api.hypixel.net/guild?key='.$key.'&id='.$id);
          $guild = json_decode($json, true);
          function uuid_to_username($uuid) {

              if (is_string($uuid)) {
                  $json = file_get_contents('https://sessionserver.mojang.com/session/minecraft/profile/' . $uuid);
                  if (!empty($json)) {
                      $dat = json_decode($json, true);
                      return $dat["name"];
                  }
              }
              return false;
          }
          foreach($guild['guild']['members'] as $members) {
          print_r('<br>');
          print_r('Username: ');
          print_r(uuid_to_username($members['uuid']));
          print_r('<br>Uuid: ' .$members['uuid']);
          print_r('<br>Rank: '.$members['rank']);
          $test = array_sum ($members['expHistory']);
          print_r('<br>Total XP This week: ' . $test);
          print_r('<br><br>Run down of the last 7 days');
          if( count($members['expHistory']) > 0) {
              echo '<ul>';
              echo '<li>' . implode( '</li><li>', $members['expHistory']) . '</li>';
              echo '</ul>';
          }}


          ?>

        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">About Stonk Script</h3>
                <h1 class="display-2">Easy to use Macro to AFK mine using Stonk</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">How to use it</h3>
                    <p>To use this macro you open it, Get in position (seen in the video below) and Press F4 to start And F6 To stop, After Pressing F6 You will need to press W + D + Mouse1 As these keys are "stuck". You can contact me on discord @ benny#8667 for support or if you need help
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Disclaimer and Information</h3>
                    <p>Macro's May be classed as exploiting so this is a Use at your own risk addon I do not take any responsibility if you are banned or your island is rollbacked. However I will be happy to help with any other issues you have with it. The macro is still under development So check back for updates
                    </p>
                </div>
				</div>
				<iframe width="1200" height="630" src="https://www.youtube.com/embed/EKqvq9EYIE8?controls=0" frameborder="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
            </div>
                </div>
            </div>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->



    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
