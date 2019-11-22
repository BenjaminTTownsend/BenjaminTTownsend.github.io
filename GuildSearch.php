<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #39B54A; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #013220; 
}
</style>
    <!--- basic page needs
    ================================================== -->
    
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

                <h3><font color="white">Guild</font></h3>

                <h1>
                    Guild Searcher 

                </h1>
                    <h3>Made By Benny00<br></h3>
                <h4 href="https://www.youtube.com/watch?v=XTgFtxHhCQ0"><font color="blue">Under development</font></p></h4>
                <div class="home-content__buttons">
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        Start Searching
                    </a>
                    <a href="https://discord.gg/eCBk4T9" class="btn btn--stroke">
                        Engima Discord
                    </a>
                       <a href="https://docs.google.com/forms/d/e/1FAIpQLSd5sUF-uHvC69t1eMGTWe2RtIp_6Jon3jxtur71WbwhnH4jgA/viewform" class="btn btn--stroke">
                        Join our guild
                    </a>
                    <br>
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
                <h3 class="subhead subhead--dark">Type in any players username to gather there guilds data</h3>
                <h1 class="display-1 display-1--light">Members Guild XP</h1>
                <h3 class="subhead subhead--dark">If too many requests are sent this may not work correctly (May not show usernames, Will still show uuid's)</h3>
            </div>
        </div> <!-- end section-header --> 

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">



            </div>
        </div> <!-- end about-desc -->

<div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full aos-init aos-animate" data-aos="fade-up">
<body>

<form method='POST' action='GuildSearch.php'>
<input type='text' name='ign' placeholder='Enter a valid username'/>
<br><br>
<input type='submit' name='submit'/>

<?php
if(isset($_POST['submit'])){
    $ign = $_POST["ign"];
    $key = '51edd92e-95fd-4025-ab97-a021939e058c';
    $file = 'https://api.mojang.com/users/profiles/minecraft/'.$ign;
    $mojang = file_get_contents($file);
    $mojangArray = json_decode($mojang,true);
    if($mojang != null){
        $playerUuid = $mojangArray["id"];
        $hypixelJson = 'https://api.hypixel.net/findGuild?key='.$key.'&byUuid='.$playerUuid;
        $file = file_get_contents($hypixelJson);
        $hypixelArray = json_decode($file,true);
        print_r('<br>');
        print_r('<br>');
        print_r('<br>');



        $guildid = $hypixelArray["guild"];
        $json = file_get_contents('https://api.hypixel.net/guild?key='.$key.'&id='.$guildid);
        
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
        print_r('<br>Uuid: '.$members['uuid']);
        print_r('<br>Rank: '.$members['rank']);
        print_r('<br>Time till umute: '.$members['mutedTill']);
        $xplisttestthingy = array_sum ($members['expHistory']);
        print_r('<br>Total XP This week: ' . $xplisttestthingy);
        print_r('<br><br>Run down of the last 7 days');
        if( count($members['expHistory']) > 0) {
            echo '<ul>';
            echo '<li>' . implode( '</li><li>', $members['expHistory']) . '</li>';
            echo '</ul>';
        }};
    }
}
?>
        </div>
        <div class="about__line"></div>

    </section> <!-- end s-about -->



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
