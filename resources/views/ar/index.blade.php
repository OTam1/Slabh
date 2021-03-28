<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>slabh contracting</title>
		<meta name="description" content="contracting">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
		<link rel="icon" type="image/png"  href="{{ asset('favicon.png')}}">
		<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png')}}">
		<!-- Place favicon.ico in the root directory -->

		<link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cube3d.css') }}">
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
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
			<img class='featured-img ftdimg1' src="img/forsan.jpg" alt="" />
            <img class='featured-img ftdimg1' src="img/main_swaidan_01.jpg" alt="" />
            <img class='featured-img ftdimg1' src="img/main_swaidan_02.jpg" alt="" />
            <img class='featured-img ftdimg1' src="img/main_swaidan_03.jpg" alt="" />
            <img class='featured-img ftdimg1' src="img/main_swaidan_04.jpg" alt="" /> 
            <img class='featured-img ftdimg1' src="img/featured12.png" alt="" />
			<img class='featured-img ftdimg1' src="img/featured1.png" alt="" />
			<img class='featured-img ftdimg2' src="img/featured2.png" alt="" />
			<img class='featured-img ftdimg3' src="img/featured3.png" alt="" /> 
			<img class='featured-img ftdimg6' src="img/featured6.png" alt="" />
			<img class='featured-img ftdimg7' src="img/featured7.png" alt="" />
			<img class='featured-img ftdimg8' src="img/featured8.png" alt="" />
			<img class='featured-img ftdimg9' src="img/featured9.png" alt="" />
			<img class='featured-img ftdimg10' src="img/featured10.png" alt="" />
			<img class='featured-img ftdimg11' src="img/featured11.png" alt="" />

			<header id="mainHeader">
				<div class="navN_close">
					<a href='#' class="logo"><img src="{{ asset('img/salabh.png')}}" alt="salabh contracting" /></a>
					<nav class="main-navigation">
						<ul>
						<li>
								<a href="/" class="nav-link">English</a>
							</li>
							<li>
								<a href="/Ar/contact" class="nav-link">تواصل معنا</a>
							</li>
							<li>
								<a href="/Ar/clients" class="nav-link">عملائنا</a>
							</li>
							<li>
								<a href="/Ar/projects" class="nav-link">المشاريع</a>
							</li>
							<li>
								<a href="/Ar/services" class="nav-link">الخدمات</a>
							</li>
							<li>
								<a href="/Ar/values" class="nav-link">القيم</a>
							</li>
							<li>
								<a href="/Ar/about" class="nav-link">عن صلابة</a>
							</li>
							<li>
								<a href="#" class="nav-link nav-active">الرئيسية</a>
							</li>
						</ul>
					</nav>
					<span id="navClose"> <span class="burger-menu"> <span class="bmenuItem bmenu-top"></span> <span class="bmenuItem bmenu-middle"></span> <span class="bmenuItem bmenu-bottom"></span> </span> </span>
				</div>
			</header>

		</section>
		
		<footer id="mainFooter">
			<a class="revival" href="http://revival.sa/#"></a>
		</footer>

		<script defer src="/js/vendor/jquery-2.1.3.min.js"></script>
		<script defer src="/js/plugins.js"></script>
		<script defer src="/js/main.js"></script>
		<script defer src="/js/rotator.js"></script>

	</body>
</html>
