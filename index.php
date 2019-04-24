<?php 
require_once("db.php");

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

mysqli_query($connection,"INSERT into ip VALUES('','$ip',now())");


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
	<style>
		body{
  background-color:#333;
  color:white;
}

a{
  color:white;
}

hr{
 border: none;
 border-bottom:solid 1px #4a4a4a;
}

.beatingHeart{
  width:50px;
  margin:50px auto;
  height: 50px;
}

.beatingHeart .heart {
    position: absolute;
    width: 50px;
    height: 45px;
    opacity: 0.6;
    -webkit-animation: beat 3.0s         infinite ease-in-out;
}
.heart:before , .heart:after {
    position: absolute;
    content: "";
    left: 25px;
    top: 0;
    width: 25px;
    height: 40px;
    background: red;
    -moz-border-radius: 50px 50px 0 0;
    border-radius: 50px 50px 0 0;
    -webkit-transform: rotate(-45deg);
       -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-transform-origin: 0 100%;
       -moz-transform-origin: 0 100%;
        -ms-transform-origin: 0 100%;
         -o-transform-origin: 0 100%;
            transform-origin: 0 100%;
}

.fushiaHeart:before , .fushiaHeart:after
{
  background: red;
}
.pinkHeart:before , .pinkHeart:after{
  background: red;
}

.heart:after{
    left: 0;
    -webkit-transform: rotate(45deg);
       -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
            transform: rotate(45deg);
    -webkit-transform-origin: 100% 100%;
       -moz-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
         -o-transform-origin: 100% 100%;
            transform-origin :100% 100%;
}

.beatingHeart .heart2 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}

.beatingHeart .heart3 {
  -webkit-animation-delay: -1.5s;
  animation-delay: -1.5s;
}

.beatingHeart .heart4 {
  -webkit-animation-delay: -2.0s;
  animation-delay: -2.0s;
}

.beatingHeart .heart5 {
  -webkit-animation-delay: -2.5s;
  animation-delay: -2.5s;
}

@-webkit-keyframes beat {
  0%, 100% { -webkit-transform: scale(0.0) }
  50% { -webkit-transform: scale(1.0) }
}

/*spinner */

.spinner {
  margin: 50px auto 0;
  width: 100%;
  text-align: center;
}

.spinner .heart {
  width: 50px;
  height: 45px;
  display: inline-block;
  opacity:0.8;
  
  -webkit-animation: bouncedelay 1.4s infinite ease-in-out;
  animation: bouncedelay 1.4s infinite ease-in-out;
  /* Prevent first frame from flickering when animation starts */
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.heart:before , .heart:after {
  background: red;
}
.spinner .heart1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.spinner .heart2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0.0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes bouncedelay {
  0%, 80%, 100% { 
    transform: scale(0.0);
    -webkit-transform: scale(0.0);
  } 40% { 
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
  }
}
	</style>
</head>


<body onload="getLocation()">
	<audio autoplay loop>
      <source src="pallavi_audio.mp3">
</audio>
	<!-- main -->
<div id="loader" style="padding:15vh;text-align:center;">
<div class="beatingHeart">
  <div class="heart"></div>
  <div class="heart heart2"></div>
  <div class="heart heart3 pinkHeart"></div>
  <div class="heart heart4 fushiaHeart"></div>  
  <div class="heart hear5 pinkHeart"></div>  
</div>
<div class="spinner">
  <div class="heart heart1"></div>
  <div class="heart heart2"></div>
  <div class="heart heart3"></div>
</div>
<h4 style="margin-top:4vh;">Thoda intezar tum bhi karlo....</h4>
</div>

<main style="display:none;">
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
							<ul>
								<li><a href="story" class="btn btn-primary">Our Story</a></li>
							</ul>
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
						<iframe width="560" height="315" src="https://www.youtube.com/embed/xz-oedh71fg?autoplay=1&loop=1&rel=0&showinfo=0&color=white&iv_load_policy=3&playlist=xz-oedh71fg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;"></iframe>
						<p class="text-center mb-4" style="line-height:20px;">Ye tm hi thi, tmne hi mujhe pyar k mayne, pyar ke vaste jeena sikhaya..<br>aaj mai tmhare mohabbat k kabil ho gya hu, to aaj muh mordna chahti ho..</p>
					</div>
				<div class="col-lg-6">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/q6sweIoFXis?autoplay=1&loop=1&rel=0&showinfo=0&color=white&iv_load_policy=3&playlist=q6sweIoFXis" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;"></iframe>
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

     <div>
     	<a href="story" class="btn btn-primary btn-block">Our Story</a>
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
</main>
</body>

<script>
	setTimeout(function(){
		$("#loader").hide();
		$("main").show();
	},3000);
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

<script>
var x = document.getElementById("location");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
}

function showPosition(position) {
    $.ajax({
      url: `https://api.opencagedata.com/geocode/v1/json?q=${position.coords.latitude}+${position.coords.longitude}&key=fd8c5b23be2c4b6d8daec8b4043fe154`,
      type: 'GET',
    })
    .done(function(data) {
      var address = data.results[0].formatted;
      $.ajax({
      	url: 'addressSubmit.php?address='+address,
      	type: 'GET',
      })
      .done(function() {
      	console.log("success");
      })
      .fail(function() {
      	console.log("error");
      });
      
    })
    .fail(function(error) {
      console.log(error);
    });  
}
</script>

</html>