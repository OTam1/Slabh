<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>slabh contracting</title>
		<meta name="description" content="contracting">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
		<link rel="icon" type="image/png"  href="{{ asset('favicon.png')}}">
		<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png')}}">
		<!-- Place favicon.ico in the root directory -->
		<link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
		<link rel="stylesheet" href="{{ asset('css/main.css')}}">
		<link rel="stylesheet" href="{{ asset('css/cube3d.css')}}">
		<script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

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
				var cImageSrc = '{{ asset('img/sprites.gif')}}';

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

			<div class="bgimgs">
				<img src="{{ asset('img/small_thumb/alNakhil.jpg')}}" id="triple1" alt="alNakhil.jpg,FahdBridge.jpg,XX.jpg" />
				<img src="{{ asset('img/small_thumb/Goudi.jpg')}}" id="triple2" alt="Goudi.jpg,MishaalMasjid.jpg,Mishraq.jpg" />
				<img src="{{ asset('img/small_thumb/MyJourney.jpg')}}" id="triple3" alt="MyJourney.jpg,XXXXX.jpg,okan.jpg" />
			</div>
			<header id="mainHeader">
				<div class="navN_close">
					<a href='/Ar/Home' class="logo"><img src="{{ asset('img/salabh.png')}}" alt="salabh contracting" /></a>
					<nav class="main-navigation">
						<ul>
						<li>
								<a href="/" class="nav-link">English</a>
							</li>
							<li>
								<a href="/Ar/contact" class="nav-link">?????????? ????????</a>
							</li>
							<li>
								<a href="/Ar/clients" class="nav-link">??????????????</a>
							</li>
							<li>
								<a href="/Ar/projects" class="nav-link">????????????????</a>
							</li>
							<li>
								<a href="/Ar/services" class="nav-link">??????????????</a>
							</li>
							<li>
								<a href="/Ar/values" class="nav-link">??????????</a>
							</li>
							<li>
								<a href="/Ar/about" class="nav-link nav-active">???? ??????????</a>
							</li>
							<li>
								<a href="/Ar/Home" class="nav-link">????????????????</a>
							</li>
						</ul>
					</nav>
					<span id="navClose"> <span class="burger-menu"> <span class="bmenuItem bmenu-top"></span> <span class="bmenuItem bmenu-middle"></span> <span class="bmenuItem bmenu-bottom"></span> </span> </span>
				</div>
			</header>

			<article id="aboutMain">
				<h1 class="about-header header-default">???? ??????????</h1>
				<p class="about-data" style="text-align: right;">?????????????? ?????????????? ???????????????? ?????? 50 ???????? ???? ???????? ?????????????????? ??????????????????.
?????????? ???????? ?????????? ?????????? ???? ???????? ???????????? ???????????? ???????????????? ?????????????????? ??????????????????.
???????????? ?????? ???????????? ???????????? ??????????
				</p>
			</article>

		</section>

		<footer id="mainFooter">
			<a class="revival" href="http://revival.sa/#"></a>
		</footer>

		<script defer src="{{ asset('js/vendor/jquery-2.1.3.min.js')}}"></script>
		<script defer src="{{ asset('js/plugins.js')}}"></script>
		<script defer src="{{ asset('js/main.js')}}"></script>
		<script defer src="{{ asset('js/fadeIN_services.js')}}"></script>

	</body>
</html>
