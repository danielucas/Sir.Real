<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Crocodile Tears</title>
<style>

.background,
canvas {
	width: 100vw;
	min-height: 100vh;
	height: 300vh;
}
.background {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1;
	background-size: cover;
}

h1 {
	position: absolute;
	top: 10%;
	left: 50%;
	transform: translate(-50%, 0%);
	z-index: 3;
	font-size: 15vh;
	color: red;
	width: 90vw;
}

video {
	z-index: 2;
	position: absolute;
	top: 100vh;
	left: 40vw;
}

a:hover,
a:visited {
	color: white;
}

</style>
<?php 

// create curl resource 
$ch = curl_init(); 

// set url 
curl_setopt($ch, CURLOPT_URL, "api.tronalddump.io/random/quote"); 

//return the transfer as a string 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

// $output contains the output string 
if($output = json_decode(curl_exec($ch))) {
	$links = [
		'dizzy.html',
		'DAgLitch.html',
		'dada.html',
		'huddle.html',
		'ray.html',
		'ceci.html',
		'ticktock.html',
		'lie-ions.html',
		'ember.html',
		'four.html',
		'swirly.html',
		'suuur.html',
		'satice.html',
		'death.html',
		'dizzy.html',
		'DAgLitch.html',
		'dada.html',
		'huddle.html',
		'ray.html',
		'ceci.html',
		'ticktock.html',
		'lie-ions.html',
		'dada.html',
		'four.html',
		'renovate.html',
		'swirly.html'
	];
	shuffle($links);

	$sentence	= $output->value;
	$search = 'bad low weak jeb failing failed crooked sad dumb less clinton jobs dangerous ted e-mails emails hypocrite easy cruz US hillary america lying job';//search words
	$srch_words = explode(' ',$search);//explode every search word
	$replace_words=array();

	$l = 0;
	foreach ($srch_words as $key=>$val) {
	    $replace_words[$key]='<a href="'.$links[$l].'">' . $val . '</a>';
	    $l++;
	}
	$sentence	=	str_ireplace($srch_words, $replace_words, $sentence);

}

// close curl resource to free up system resources 
curl_close($ch);      
 ?>
</head>
	<body>
		<div class="background" style="background-image: url('sirs/tumblr_lxx18zlDMq1rnrr8lo1_500.png');"></div>

		<h1><?= $sentence; ?></h1>

		<a href="ticktock.html">
			<video autoplay nocontrols loop muted poster="">
				<source src="videos/IMG_3592.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
			</video>
		</a>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="scripts/ripples.js"></script>
		<script>

			$(document).ready(function() {

				$('.background').ripples({
					resolution: 300,
					dropRadius: 100, //px
					perturbance: 0.5,
					interactive: true
				});

				// Automatic drops
				setInterval(function() {
					var $el = $('.background');
					var x = Math.random() * $el.outerWidth();
					var y = Math.random() * $el.outerHeight();
					var dropRadius = 100;
					var strength = 0.04 + Math.random() * 0.04;

					$el.ripples('drop', x, y, dropRadius, strength);
				}, 1000);
			});

		</script>
	</body>
</html>