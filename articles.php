<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Karateka - Insight  karate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.png">
	<link rel="stylesheet" href="animate.min.css">
	<link rel="stylesheet" href="css/design.css">

	<link rel="stylesheet" href="css/foot.css">
	<link rel="stylesheet" href="css/event.css">
    
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<!-- =======================================================
    Theme Name: Maxim
    Theme URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
    ======================================================= -->
    <style>
    @import url('https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700');

:root {
  --color: #3c3163;
  --transition-time: 0.5s;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  font-family: 'Open Sans';
  background: #fafafa;
}

a {
  color: inherit;
}

.cards-wrapper {
  display: grid;
  justify-content: center;
  align-items: center;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 4rem;
  padding: 4rem;
  margin: 0 auto;
  width: max-content;
}

.card {
  font-family: 'Heebo';
  --bg-filter-opacity: 0.5;
  background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
  height: 20em;
  width: 15em;
  font-size: 1.5em;
  color: white;
  border-radius: 1em;
  padding: 1em;
  /*margin: 2em;*/
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  box-shadow: 0 0 5em -1em black;
  transition: all, var(--transition-time);
  position: relative;
  overflow: hidden;
  border: 10px solid #ccc;
  text-decoration: none;
}

.card:hover {
  transform: rotate(0);
}

.card h1 {
  margin: 0;
  font-size: 1.5em;
  line-height: 1.2em;
}

.card p {
  font-size: 0.75em;
  font-family: 'Open Sans';
  margin-top: 0.5em;
  line-height: 2em;
}

.card .tags {
  display: flex;
}

.card .tags .tag {
  font-size: 0.75em;
  background: rgba(255,255,255,0.5);
  border-radius: 0.3rem;
  padding: 0 0.5em;
  margin-right: 0.5em;
  line-height: 1.5em;
  transition: all, var(--transition-time);
}

.card:hover .tags .tag {
  background: var(--color);
  color: white;
}

.card .date {
  position: absolute;
  float:left;
  right: 0;
  font-size: 0.75em;
  padding: 1em;
  line-height: 1em;
  opacity: .8;
}

.card:before, .card:after {
  content: '';
  transform: scale(0);
  transform-origin: top left;
  border-radius: 50%;
  position: absolute;
  left: -50%;
  top: -50%;
  z-index: -5;
  transition: all, var(--transition-time);
  transition-timing-function: ease-in-out;
}

.card:before {
  background: #ddd;
  width: 250%;
  height: 250%;
}

.card:after {
  background: white;
  width: 200%;
  height: 200%;
}

.card:hover {
  color: var(--color);
}

.card:hover:before, .card:hover:after {
  transform: scale(1);
}

.card-grid-space .num {
  font-size: 3em;
  margin-bottom: 1.2rem;
  margin-left: 1rem;
}

.info {
  font-size: 1.2em;
  display: flex;
  padding: 1em 3em;
  height: 3em;
}

.info img {
  height: 3em;
  margin-right: 0.5em;
}

.info h1 {
  font-size: 1em;
  font-weight: normal;
}

/* MEDIA QUERIES */
@media screen and (max-width: 1285px) {
  .cards-wrapper {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 900px) {
  .cards-wrapper {
    grid-template-columns: 1fr;
  }
  .info {
    justify-content: center;
  }
  .card-grid-space .num {
    margin-left: 0;
    text-align: center;
  }
}

@media screen and (max-width: 500px) {
  .cards-wrapper {
    padding: 4rem 2rem;
  }
  .card {
    max-width: calc(100vw - 4rem);
  }
}

@media screen and (max-width: 450px) {
  .info {
    display: block;
    text-align: center;
  }
  .info h1 {
    margin: 0;
  }
}

/*
P.S: if you like my content maybe you will become a donator and donate some money? That helps me to create new awesome materials. https://www.paypal.me/melnik909
*/

/* popup */

.popup{
  width: 100%;
  height: 100vh;
  display: none;

  position: fixed;
  top: 0;
  right: 0;
}

#popup-article:target{
  display: flex;
}

.popup:before{
  content: "";
  box-sizing: border-box;
  width: 100%;
  background-color: #fff;

  position: fixed;
  left: 0;
  top: 50%;
  will-change: height, top;
  animation: open-animation .6s cubic-bezier(0.83, 0.04, 0, 1.16) .65s both;
}

.popup:after{
  content: "";
  width: 0;
  height: 2px;
  background-color: #f0f0f0;

  will-change: width, opacity;
  animation: line-animation .6s cubic-bezier(0.83, 0.04, 0, 1.16) both;

  position: absolute;
  top: 50%;
  left: 0;
  margin-top: -1px;
}

@keyframes line-animation{

  0%{
    width: 0;
    opacity: 1;
  }

  99%{
    width: 100%;
    opacity: 1;
  }

  100%{
    width: 100%;
    opacity: 0;
  }  
}

@keyframes open-animation{

  0%{
    height: 0;
    top: 50%;
  }

  100%{
    height: 100vh;
    top: 0;
  }
}

.popup__block{
  height: calc(100vh - 40px);
  padding: 5% 15%;
  box-sizing: border-box;
  position: relative;

  margin: auto;
  overflow: auto;
  animation: fade .5s ease-out 1.3s both;
}

@keyframes fade{

  0%{
    opacity: 0;
  }

  100%{
    opacity: 1;
  }
}

.popup__title{
  font-size: 2.5rem;
  margin: 0 0 1em;
}

.popup__close{
  width: 3.2rem;
  height: 3.2rem;
  text-indent: -9999px;
  
  position: fixed;
  top: 20px;
  right: 20px;
padding-top: 160px;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: contain;
  background-image: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMDAwMDAwIiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4gICAgPHBhdGggZD0iTTE5IDYuNDFMMTcuNTkgNSAxMiAxMC41OSA2LjQxIDUgNSA2LjQxIDEwLjU5IDEyIDUgMTcuNTkgNi40MSAxOSAxMiAxMy40MSAxNy41OSAxOSAxOSAxNy41OSAxMy40MSAxMnoiLz4gICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg==);
}

/* /--popup */
    </style>

</head>

<body>	
	<!-- navbar -->
	<div class="navbar-wrapper">

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<!-- Responsive navbar -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</a>
			<h1 class="brand"><a href="index.html">KARATEKA</a></h1>
			<!-- navigation -->
			<nav class="pull-right nav-collapse collapse">
				<ul id="menu-main" class="nav">
						<li><a title="team" href="#about">HOME</a></li>
					<li><a title="team" href="#about">About us</a></li>
					<li><a title="services" href="#services">EVENTS</a></li>
					<li><a title="works" href="#works">KARATE NEWS</a></li>
					<li><a title="blog" href="#blog">ARTICLES</a></li>
					<li><a title="team" href="#about">clubs</a></li>
					<li><a title="contact" href="#contact">Contact us</a></li>
					<li><a href="page.html">Page</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
</div>



		<section id="hero1" class="hero" style="background: url(img/newsbg.jpeg);background-size:cover;
		background-position:center center;
		background-attachment:fixed;">
			<div class="inner">
				<div class="copy">
				<h1 class="para1" data-aos="fade-up-right">Karate Articles</h1>
				<div class="logo">
						<div class="hover13 column" data-aos="zoom-in"> 
						<figure>
							<img src="img/logo-image.png" alt="" />
						</figure>	
			</div>
			</div>
				</div>
		</section>

       <section>
            <body>
    <section class="cards-wrapper">
        <div class="card-grid-space">
            <a class="card open-popup" href="#popup-article"
                style="--bg-img: url(article-images/cardimg1.jpg)">
                <div>
                    <h1>4 MAIN STYLES OF KARATE</h1>
                    <p>Karate dates back hundreds of years, but is still going strong, and for good reason. First
                        beginning on…</p>
                    <div class="date">6 Oct 2017</div>
                    <div class="tags">
                        <div class="tag">Read More</div>
                    </div>
                </div>
            </a>
        </div>
     
        <div id="popup-article" class="popup">
            <div class="popup__block">
                <h1 class="popup__title">THE 4 MAIN STYLES OF KARATE, AND WHO INVENTED THEM!</h1>
                <p>Karate dates back hundreds of years, but is still going strong, and for good reason. First beginning
                    on the trading island of Okinawa, the word Karate was used to describe a weaponless self-defense
                    style that at the time was very important to know – thanks to all the pirates, thieves, and dodgy
                    locals.</p>
                <img src="article-images/shito2.jpeg" style="width:900px; height:400px;">
                <h3>1. Wado-ryu</h3>
                <p>Created by Hienori Otsuka in 1939, this type is relatively new. It is heavily influenced by Gichin
                    Funakoshi Jiu-jitsu and traditional Okinawan karate techniques. The name translates to “way of
                    harmony”, describing the basic movements associated with Jiu-jitsu and focuses on being able to
                    avoid attacks rather than fighting back. The evading fluid and mobile techniques focus on using as
                    little force as possible, avoiding hard contact sparring, leaving many to describe Wado-ryu as more
                    of a spiritual discipline rather than a fighting discipline.

                    The use of Taisabaki (body shifting, or body management) helps minimize an opponent’s attack, and
                    Wado-ryu also uses a shorter stance that what is seen in other styles.<br>
                    <img src="article-images/wado-ryu.jpg" alt=""></p>
                <h3>1. Goju-ryu</h3>
                <p>Founded in 1930 by Chojun Miyagi, this has now become one of the major schools today. Miyagi decided
                    it was necessary to open a new school and focus on more hard-hitting techniques. As a result, he
                    decided to name his new art Goju-ryu Karate, meaning “hard and soft”, as the tradition took
                    inspiration from the precepts of traditional Chinese Kempo. The style implements soft circular
                    blocking techniques that combo perfectly with powerful counter-strike attacks.

                    Miyagi was the student of the legendary Sensei, Kanryo Higaonna, well known for introducing eight
                    specific forms he learnt from Chinese martial arts into the Karate that he taught to his Japanese
                    students.<br>
                </p><img src="article-images/goju-ryu.jpg" alt="">
                <h3>1. Shito-ryu</h3>
                <p>The name of the style “Shito-ryu” is derived from Kenwa Mabuni Sensei’s two teachers: Ankō Itosu, a
                    famous teacher of Shuri-te karate, and Kanryō Higaonna, a prominent teacher of Naha-te karate. This
                    tradition was introduced in 1928 and utilizes an estimated 50 katas! Technique is the key to this
                    style, and focuses even more on power and heavy strikes – one of the more aggressive schools of
                    thought in Karate. It explores both internal and external martial arts, combining powerful stances
                    we see in things like Shotokan, as well as bringing the ki inside and focusing on breathing power,
                    similar to that of Goju-ryu.</p><br>
                <img src="article-images/shito-ryu.jpg" alt="">
                <h3>1. Shotokan</h3>
                <p>Shotokan is probably one of the main sub-styles of the Karate we see today. Founded by Gichin
                    Funakoshi, it is considered to be the foundation of modern Karate, and Funakoshi is often credited
                    as one of modern-day karate’s founding masters. Born in the birthplace of Karate, Okinawa, in 1868,
                    he studied with one of the most well-respected karate masters of the time – Yasutsune Azato. After
                    moving to Tokyo in 1921, he brought all his knowledge with him and infected the mainland with his
                    style of fighting.

                    The name “Shotokan” was created by Funakoshi himself, mimicking the pen-name he used to use to sign
                    poems in his younger days. The style makes use of linear techniques and wide stances, bringing more
                    balance and power to the fighter. It is designed to deliver quick, powerful strikes while also being
                    perfectly adapted to strong defense.</p><br>
                    <img src="article-images/shotokan.jpg" alt="">
                <a href="#" class="popup__close">close</a>
            </div>
        </div>
   
        <?php

$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "karateka";

$con = new mysqli($servername,$username,$password,$dbname);



$sql = "select id,topic,date,short,description,image from article ORDER BY id desc";
$result = $con->query($sql);
  
while( $row = mysqli_fetch_array($result)){

echo  '<div class="card-grid-space">'.
'<a class="card open-popup" href="#popup-article"
    style="--bg-img: url(article-images/cardimg4.jpg)">'.
    '<div>'
        .'<h1>'.$row['topic'].'</h1>'
        .'<p>'.$row['short'].'</p>'
        .'<div class="date">'.$row['date'].'</div>'
        .'<div class="tags">'
            .'<div class="tag">Read More</div>'
        .'</div>'
    .'</div>'
.'</a>'
.'</div>';


}


$con->close();
?>

</section>


		
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>

	</section>

    <footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
					</ul>
					<div class="foot">
					<p class="copyright">
						&copy; Maxim Theme. All rights reserved.
						<div class="credits">
							<!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maxim
              -->
							Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
						</div>
					</p>
				</div>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
	<script src="js/design.js"></script>
	

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>







    