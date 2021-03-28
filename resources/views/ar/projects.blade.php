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
			
			<header id="mainHeader">
				<div class="navN_close">
					<a href='/Ar/Home' class="logo"><img src="{{ asset('img/salabh.png')}}" alt="salabh contracting" /></a>
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
								<a href="#" class="nav-link nav-active">المشاريع</a>
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
								<a href="/Ar/Home" class="nav-link">الرئيسية</a>
							</li>
						</ul>
					</nav>
					<span id="navClose"> <span class="burger-menu"> <span class="bmenuItem bmenu-top"></span> <span class="bmenuItem bmenu-middle"></span> <span class="bmenuItem bmenu-bottom"></span> </span> </span>
				</div>
			</header>

			<article id="projectsMain">
					<!-- // full image name should be assigned as an alt attribute for each project image  -->
                    
                    <span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">الفرسان</span>
					</h2>
					<img class='pop_image' src="/img/small_thumb/forsan.jpg" alt="forsan.jpg" /> 
					<span class="color_overlay"></span> 
				</span>
 <span  class="projectItem clearfix">
                    <h2 class="project-title">
                        <span class="icon_plus">
                            <span class="horline"></span>
                            <span class="verline"></span>
                        </span>
                        <span class="project-name">ماريوت</span>
                    </h2>
                    <img class='pop_image' src="{{ asset('img/small_thumb/Mirot.png')}}" alt="Mirot_full.png" />
                    <span class="color_overlay"></span>
                </span>
 <span  class="projectItem clearfix">
                    <h2 class="project-title">
                        <span class="icon_plus">
                            <span class="horline"></span>
                            <span class="verline"></span>
                        </span>
                        <span class="project-name">مسجد السويدان</span>
                    </h2>
                    <img class='pop_image' src="{{ asset('img/small_thumb/swidan3d.png')}}" alt="swidan3d.png,swaidan_01.jpg,swaidan_02.jpg,swaidan_03.jpg,swaidan_04.jpg,swaidan_05.jpg,swaidan_06.jpg,swaidan_07.jpg,swaidan_08.jpg,swaidan_09.jpg,swaidan_10.jpg,swaidan_11.jpg,swaidan_12.jpg,swaidan_13.jpg,swaidan_14.jpg" />
                    <span class="color_overlay"></span>
                </span>
 <span  class="projectItem clearfix">
                    <h2 class="project-title">
                        <span class="icon_plus">
                            <span class="horline"></span>
                            <span class="verline"></span>
                        </span>
                        <span class="project-name">مبنى ريتان</span>
                    </h2>
                    <img class='pop_image' src="{{ asset('img/small_thumb/retan.jpg')}}" alt="retan1.jpg" />
                    <span class="color_overlay"></span>
                </span>
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">أوكان</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/okan.jpg')}}" alt="okan_01.png,okan_02.png" /> 
					<span class="color_overlay"></span> 
				</span>
				
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">جلوية</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/Galawia.jpg')}}" alt="Galawia_01.png,Galawia_02.png" /> 
					<span class="color_overlay"></span> 
				</span>
				
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">الشيخة</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/Goudi.jpg')}}" alt="Goudi_01.png" /> 
					<span class="color_overlay"></span> 
				</span>
				
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">المشراق</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/Mishraq.jpg')}}" alt="Mishraq_01.png,Mishraq_02.png,Mishraq_03.png,Mishraq_04.png,Mishraq_05.png,Mishraq_06.png,Mishraq_07.png,Mishraq_08.png,Mishraq_09.png" /> 
					<span class="color_overlay"></span> 
				</span>
				
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">مسجد محمد الشعلان</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/ShaalanMasjid.jpg')}}" alt="ShaalanMasjid_01.png,ShaalanMasjid_02.png,ShaalanMasjid_03.png,ShaalanMasjid_05.png" /> 
					<span class="color_overlay"></span> 
				</span>
				
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">رحلتي</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/MyJourney.jpg')}}" alt="MyJourney_01.png,MyJourney_02.png,MyJourney_03.png,MyJourney_04.png,MyJourney_06.png,MyJourney_07.png,MyJourney_09.png" /> 
					<span class="color_overlay"></span> 
				</span>
				
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">النخيل</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/alNakhil.jpg')}}" alt="alNakhil_01.png,alNakhil_02.png,alNakhil_03.png,alNakhil_04.png,alNakhil_05.png,alNakhil_06.png" /> 
					<span class="color_overlay"></span> 
				</span>
				
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">جسر الملك فهد</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/FahdBridge.jpg')}}" alt="kfahd_01.png,kfahd_02.png,kfahd_03.png,kfahd_04.png" /> 
					<span class="color_overlay"></span> 
				</span>
				
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">مسجد مشعل الشعلان</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/MishaalMasjid.jpg')}}" alt="MishaalMasjid_01.png,MishaalMasjid_04.png,MishaalMasjid_02.png,MishaalMasjid_03.png" /> 
					<span class="color_overlay"></span> 
				</span>
				
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">مجمع السهلي</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/XX.jpg')}}" alt="XX_01.png,XX_02.png" /> 
					<span class="color_overlay"></span> 
				</span>
				
				<span  class="projectItem clearfix">
					 <h2 class="project-title">
					 	<span class="icon_plus"> 
					 		<span class="horline"></span>
					 		<span class="verline"></span> 
					 	</span>
					 	<span class="project-name">مكتب لاند روفر</span>
					</h2>
					<img class='pop_image' src="{{ asset('img/small_thumb/XXXXX.jpg')}}" alt="XXXXX_01.png,XXXXX_02.png,XXXXX_03.png,XXXXX_04.png" /> 
					<span class="color_overlay"></span> 
				</span>
                
                <span  class="projectItem clearfix">
                    <h2 class="project-title">
                        <span class="icon_plus">
                            <span class="horline"></span>
                            <span class="verline"></span>
                        </span>
                        <span class="project-name">مبنى روف</span>
                    </h2>
                    <img class='pop_image' src="{{ asset('img/small_thumb/rof.jpg')}}" alt="rof1.jpg" />
                    <span class="color_overlay"></span> 
                </span>
                
               
                
                
			 
			</article>
			<section id="imgPOP"> 
			</section>
			<span class="proJnav-right"></span>
			<span class="proJnav-left"></span>

		</section>
		
		<footer id="mainFooter">
			<a class="revival" href="http://revival.sa/#"></a>
		</footer>

	<script defer src="/js/vendor/jquery-2.1.3.min.js"></script>
		<script defer src="/js/plugins.js"></script>
		<script defer src="/js/main.js"></script> 
		<script defer src="/js/projItems_nav.js"></script> 
		<script defer src="/js/popimg.js"></script> 

	</body>
</html>
