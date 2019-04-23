<?php 

function getUserIP() {    
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

$ip=getUserIP();
echo "User ip is ".$ip;


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Pallavi Loves Abhinav</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Pallavi Loves Abhinav" />
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Great+Vibes&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
	<audio autoplay loop>
      <source src="pallavi_audio.mp3">
</audio>
	<!-- main -->
	<div class="main-banner" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-sm-4">
					<!-- logo -->
					<div id="logo">
						<h1><a href="index.html">Pallavi<span class="fa fa-gratipay"></span> Abhinav</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_temps-amkls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="main-temps-amkpvt">
			<div class="container">
				<div class="style-banner">
					<h3 class="text-wh">Miss You<span>Pallavi..</span> </h3>
					<p class="mt-5 text-li">I miss you meri jaan, tu meri dil jaan nhi pta nhi kya ho bas ek tareeke se meri saansein chl ri ho par har saans mujhe bas yhi puchti hai ki mein jee kiske liye rha hu rok de mujhe, par chah kar bhi nhi kar pata par mujhe esa lag rha hai ki meri pallavi mere bina isi halat me hogi ,pallavi mein apni dil jaan jigar har cheez chordne ko taiyaar ho jo ap bologi vo hesha ke liye apna lunga bas mujhe maf kr do, tum hi is duniya mein ab jeene ki vajah bhi lagti ho, maine jeene ki koshish kri par har pal har dum ghut rha hu or jeene ka maksad kho rha hu please mere jeene ka maksad ban jao. <br>please pallavi  meri zindagi mein aa jao.
					</p>
				</div>
			</div>
		</div>
		<div class="img-banner-temps-amk" style="margin-top:24px;">
			<img src="images/img2.jpg" alt="" class="img-fluid" style="height:600px;border-radius:45%;">
		</div>
		<!-- //banner -->
		<!-- bubble effect -->
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<!-- //bubble effect -->
	</div>
	<!-- //main -->

	<!-- photo graphy  -->
	<section class="py-5 team-temps-amkls" id="photos">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-temps-amk pt-sm-5 mb-5 font-weight-bold">I Love You..
				<span>Please come back</span>
			</h3>
			<div class="d-flex team-temps-amkls-row pt-xl-5 pt-md-3">
				<div class="col-lg-4 col-sm-6">
					<div class="box20">
						<img src="images/img4.jpg" alt="" class="img-fluid" 
						style="-ms-transform: rotate(90deg);
							-webkit-transform: rotate(90deg);
							transform: rotate(90deg);height:350px;" />
						<div class="box-content">
							<h3 class="title">Photo Still 1</h3>
							<span class="post">Sweet Memories</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 my-sm-0 my-4">
					<div class="box20 active">
						<img src="images/img5.jpg" alt="" class="img-fluid" style="-ms-transform: rotate(-90deg);
							-webkit-transform: rotate(-90deg);
							transform: rotate(-90deg);height:350px;" />
						<div class="box-content active">
							<h3 class="title">Photo Still 2</h3>
							<span class="post">Sweet Memories</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 mt-lg-0 mt-sm-4 mx-auto">
					<div class="box20">
						<img src="images/img7.jpg" alt="" class="img-fluid" style="-ms-transform: rotate(-90deg);
							-webkit-transform: rotate(-90deg);
							transform: rotate(-90deg);height:350px;" />
						<div class="box-content">
							<h3 class="title">Photo Still 3</h3>
							<span class="post">Sweet Memories</span>
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex team-temps-amkls-row pt-lg-5 mt-lg-0 mt-4">
				<div class="col-lg-4 col-sm-6">
					<div class="box20">
						<img src="images/img6.jpg" alt="" class="img-fluid" style="-ms-transform: rotate(-90deg);
							-webkit-transform: rotate(-90deg);
							transform: rotate(-90deg);height:350px;" />
						<div class="box-content">
							<h3 class="title">Photo Still 4</h3>
							<span class="post">Sweet Memories</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
					<div class="box20">
						<img src="images/img11.jpg" alt="" class="img-fluid" style="height:350px;" />
						<div class="box-content">
							<h3 class="title">Photo Still 5</h3>
							<span class="post">Sweet Memories</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 mt-lg-0 mt-4 mx-auto">
					<div class="box20">
						<img src="images/img13.jpg" alt="" class="img-fluid" style="height:350px;" />
						<div class="box-content">
							<h3 class="title">Photo Still 6</h3>
							<span class="post">Sweet Memories</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //photo graphy  -->

	<!-- welcome -->
	<section class="what-temps-amkls">
		<div class="container py-xl-5 py-lg-3">
			<div class="offset-lg-6">
				<div class="grids-whtas">
					<h3 class="tittle text-wh mb-5 font-weight-bold">Sorry</h3>
					<p class="lead text-li">I know maine bahut galat kiya hai tmhare sath, but u should remember how much i love you.. 
				    </p>
					<hr class="my-4">
					<p class="text-li">tmne bola tha us agar ap pyar krte ho to us hdd tk jana chahiye jb tk apko apka pyar mil na jaye..
						mai wohi kar rha hu. i love you PALLAVI ABHINAV RAI.. .</p>
				</div>
			</div>
		</div>
		<div class="ab-temps-amk-img" style="margin-top:24px;">
			<img src="images/img22.jpg" alt="" class="img-fluid" style="height:828px;border-radius:40%;">
		</div>
	</section>
	<!-- //welcome -->

	<!-- events -->
	<div class="events-temps-amk py-5" id="events">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-temps-amk mb-5 font-weight-bold">Forgive me & Come back..<span>missing you very badly</span></h3>
			<div class="row">
				<div class="col-lg-6">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/xz-oedh71fg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;"></iframe>
						<p class="text-center mb-4" style="line-height:20px;">Ye tm hi thi, tmne hi mujhe pyar k mayne, pyar ke vaste jeena sikhaya..<br>aaj mai tmhare mohabbat k kabil ho gya hu, to aaj muh mordna chahti ho..</p>
					</div>
				<div class="col-lg-6">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/q6sweIoFXis" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;"></iframe>
						<p class="text-center mb-4" style="line-height:20px;">I Love You.. please come back.. I can handle your anger but not our separation..</p>
				</div>
			</div>
		</div>
	</div>

	 <div class="owl-carousel">
            <div class="item">
              <img src="images/img2.jpg" alt="Love you pallavi" style="height:400px;">
            </div>
            <div class="item">
              <img src="images/img3.jpg" alt="Love you pallavi" style="height:400px;">
            </div>
            <div class="item">
              <img src="images/img8.jpg" alt="Love you pallavi" style="height:400px;">
            </div>
            <div class="item">
              <img src="images/img9.jpg" alt="Love you pallavi" style="height:400px;">
            </div>
            <div class="item">
              <img src="images/img10.jpg" alt="Love you pallavi" style="height:400px;">
            </div>
            <div class="item">
              <img src="images/img12.jpg" alt="Love you pallavi" style="height:400px;">
            </div>
            <div class="item">
              <img src="images/img14.jpg" alt="Love you pallavi" style="height:400px;">
            </div>
            <div class="item">
              <img src="images/img15.jpg" alt="Love you pallavi" style="height:400px;">
            </div>
            <div class="item">
              <img src="images/img17.jpg" alt="Love you pallavi" style="height:400px;">
            </div>
            <div class="item">
              <img src="images/img18.jpg" alt="Love you pallavi" style="height:400px;">
            </div>
          </div>

	<footer class="position-relative">
		<div class="container">
			<!-- newsletter -->
			<div class="newsletter_right_temps-amktemps-amkpvt-lau text-center pt-3 pb-3">
			
			<h1><a href="index.html" class="text-light">Pallavi<span class="fa fa-gratipay"></span>Abhinav</a></h1>
				
			</div>

		</div>
		<!-- move top icon -->
		<a href="#home" class="move-top text-center">
			<span class="fa fa-long-arrow-up" aria-hidden="true"></span>
		</a>
		<!-- //move top icon -->
	</footer>
	<!-- //footer -->

</body>

<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:5,
            nav:true,
        }
    }
})
</script>

</html>