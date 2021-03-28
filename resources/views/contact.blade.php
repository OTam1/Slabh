<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>slabh contracting</title>
        <meta name="description" content="contracting">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" type="image/png"  href="favicon.png">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/cube3d.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="preloader">
            <div id="preloaderImg"></div>
            <script type="text/javascript">
                var cSpeed = 7;
                var cWidth = 128;
                var cHeight = 128;
                var cTotalFrames = 18;
                var cFrameWidth = 128;
                var cImageSrc = 'img/sprites.gif';

                var cImageTimeout = false;
                var cIndex = 0;
                var cXpos = 0;
                var cPreloaderTimeout = false;
                var SECONDS_BETWEEN_FRAMES = 0;

                function startAnimation() {

                    document.getElementById('preloaderImg').style.backgroundImage = 'url(' + cImageSrc + ')';
                    document.getElementById('preloaderImg').style.width = cWidth + 'px';
                    document.getElementById('preloaderImg').style.height = cHeight + 'px';

                    //FPS = Math.round(100/(maxSpeed+2-speed));
                    FPS = Math.round(100 / cSpeed);
                    SECONDS_BETWEEN_FRAMES = 1 / FPS;

                    cPreloaderTimeout = setTimeout('continueAnimation()', SECONDS_BETWEEN_FRAMES / 1000);

                }

                function continueAnimation() {

                    cXpos += cFrameWidth;
                    //increase the index so we know which frame of our animation we are currently on
                    cIndex += 1;

                    //if our cIndex is higher than our total number of frames, we're at the end and should restart
                    if (cIndex >= cTotalFrames) {
                        cXpos = 0;
                        cIndex = 0;
                    }

                    if (document.getElementById('preloaderImg'))
                        document.getElementById('preloaderImg').style.backgroundPosition = (-cXpos) + 'px 0';

                    cPreloaderTimeout = setTimeout('continueAnimation()', SECONDS_BETWEEN_FRAMES * 1000);
                }

                function stopAnimation() {//stops animation
                    clearTimeout(cPreloaderTimeout);
                    cPreloaderTimeout = false;
                }

                function imageLoader(s, fun)//Pre-loads the sprites image
                {
                    clearTimeout(cImageTimeout);
                    cImageTimeout = 0;
                    genImage = new Image();
                    genImage.onload = function() {
                        cImageTimeout = setTimeout(fun, 0)
                    };
                    genImage.onerror = new Function('alert(\'Could not load the image\')');
                    genImage.src = s;
                }

                //The following code starts the animation
                new imageLoader(cImageSrc, 'startAnimation()');

            </script>
        </div>

        <section id="mainContent">

            <header id="mainHeader">
                <div class="navN_close">
                    <a href='/' class="logo"><img src="img/salabh.png" alt="salabh contracting" /></a>
                    <nav class="main-navigation">
                        <ul>
                            <li>
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li>
                                <a href="about" class="nav-link">About</a>
                            </li>
                            <li>
                                <a href="values" class="nav-link">Values</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link">Services</a>
                            </li>
                            <li>
                                <a href="projects" class="nav-link">Projects</a>
                            </li>
                            <li>
                                <a href="clients" class="nav-link">Clients</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link nav-active">Contact</a>
                            </li>
                            <li>
                                <a href="/Ar/Home" class="nav-link">العربية</a>
                            </li>
                        </ul>
                    </nav>
                    <span id="navClose"> <span class="burger-menu"> <span class="bmenuItem bmenu-top"></span> <span class="bmenuItem bmenu-middle"></span> <span class="bmenuItem bmenu-bottom"></span> </span> </span>
                </div>
            </header>

            <article id="contactMain">
                <div id="map-canvas"></div>
                <div style="font-size: 16px" class="contact_wrap">
                    
                    <div class="address clearfix">
                        <header class="slabh-adrsHeader">
                            Slabh Constructions
                        </header>
                        <p class="slabh-adrsData">
                            P.O. Box 6086 Dammam 32413
                            <br />
                            Kingdom of Saudi Arabia 
                            <br />
                            0138356440
                        </p>
                        <div style="width: 100px; height:auto; margin-top: -10px; margin-left: 50px;" class="">
                                <div class="row">
                                 <div class="column">
                                <a  href="https://twitter.com/slabh_sa">
                                <img src="/twitter.png" alt="" style="width:100%;">
                                </a>
                            </div>
                                 <div class="column">
                                 <a  href="https://www.instagram.com/slabh/">
                                <img src="/instagram.png" alt="" style="width:100%;">
                                </a>
                            </div>
                        </div>

                            </div>
                      


                    </div>
                    <div class="contact-form">
                        <form method="get" accept-charset="utf-8">
                            <br>
                    <br>
                    <br>
                    <br>
                            <input type="text" name="name" class="defaultInput blockInput nameInput" placeholder="NAME" />
                            <input type="text" name="phone" class="defaultInput input_half phoneInput" placeholder="PHONE"  />
                            <input type="text" name="email" class="defaultInput input_half emailInput" placeholder="EMAIL" />
                            <textarea name="msg" rows="4" cols="40" placeholder="MESSAGE" class="blockInput"></textarea>
                            <input type="submit" id="sendMsg" value="SEND"/>
                        </form>
                    </div>
                </div>
            </article>

        </section>

        <footer id="mainFooter">
            <a class="revival" href="http://revival.sa/#"></a>
        </footer>

        <script defer src="js/vendor/jquery-2.1.3.min.js"></script>
        <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1oG_CxMJRfYIk5vvc6aNPyWrTjj4cx0g"></script>
        <script defer src="js/plugins.js"></script>
        <script defer src="js/main.js"></script>
        <script type="text/javascript" charset="utf-8">
            function initialize() {
                var myLatlng = new google.maps.LatLng(26.456849, 50.115032);
                var mapOptions = {
                    center : myLatlng,
                    zoom : 16,
                    styles : [{
                        featureType : 'water',
                        elementType : 'all',
                        stylers : [{
                            hue : '#e9ebed'
                        }, {
                            saturation : -78
                        }, {
                            lightness : 67
                        }, {
                            visibility : 'simplified'
                        }]
                    }, {
                        featureType : 'landscape',
                        elementType : 'all',
                        stylers : [{
                            hue : '#ffffff'
                        }, {
                            saturation : -100
                        }, {
                            lightness : 100
                        }, {
                            visibility : 'simplified'
                        }]
                    }, {
                        featureType : 'road',
                        elementType : 'geometry',
                        stylers : [{
                            hue : '#bbc0c4'
                        }, {
                            saturation : -93
                        }, {
                            lightness : 31
                        }, {
                            visibility : 'simplified'
                        }]
                    }, {
                        featureType : 'poi',
                        elementType : 'all',
                        stylers : [{
                            hue : '#ffffff'
                        }, {
                            saturation : -100
                        }, {
                            lightness : 100
                        }, {
                            visibility : 'off'
                        }]
                    }, {
                        featureType : 'road.local',
                        elementType : 'geometry',
                        stylers : [{
                            hue : '#e9ebed'
                        }, {
                            saturation : -90
                        }, {
                            lightness : -8
                        }, {
                            visibility : 'simplified'
                        }]
                    }, {
                        featureType : 'transit',
                        elementType : 'all',
                        stylers : [{
                            hue : '#e9ebed'
                        }, {
                            saturation : 10
                        }, {
                            lightness : 69
                        }, {
                            visibility : 'on'
                        }]
                    }, {
                        featureType : 'administrative.locality',
                        elementType : 'all',
                        stylers : [{
                            hue : '#2c2e33'
                        }, {
                            saturation : 7
                        }, {
                            lightness : 19
                        }, {
                            visibility : 'on'
                        }]
                    }, {
                        featureType : 'road',
                        elementType : 'labels',
                        stylers : [{
                            hue : '#bbc0c4'
                        }, {
                            saturation : -93
                        }, {
                            lightness : 31
                        }, {
                            visibility : 'on'
                        }]
                    }, {
                        featureType : 'road.arterial',
                        elementType : 'labels',
                        stylers : [{
                            hue : '#bbc0c4'
                        }, {
                            saturation : -93
                        }, {
                            lightness : -2
                        }, {
                            visibility : 'simplified'
                        }]
                    }]
                };

                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                var marker = new google.maps.Marker({
                    position : myLatlng,
                    map : map,
                    icon:'img/icn_marker.png',
                    title : 'SLABH CONSTRUCTIONS'
                });
                
                 var contentString = '<h1 id="firstHeading" class="firstHeading">SLABH CONSTRUCTIONS</h1><br />P.O. Box 6086 Dammam 32413';
            var infowindow = new google.maps.InfoWindow({
                content : contentString
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
            };
            
           

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>

    </body>
</html>