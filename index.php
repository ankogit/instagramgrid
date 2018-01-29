<?

session_start();
$_SESSION['loader'] = 0;
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>Заголовок</title>
	<meta name="description" content="">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="libs/animate/animate.css">
	
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">

	<script src="libs/modernizr/modernizr.js"></script>
	<script src="libs/jquery/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="js/freewall.js"></script>
		<style type="text/css">
			.free-wall {
				margin: 15px;
			}
			.add-more {
				margin: 15px;
			}
			.brick img {
				width: 100%;
				height: 100%;
			}
	</style>

</head>

<body>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2"><div class="logo"></div></div>
				<div class="col-md-10">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Category</a></li>
						<li><a href="">Contact</a></li>
						<li><a href="">About</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<section class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Instagram</h1>
				</div>
				
		<div class="col-md-12">

			<div id="post_b">
			    
			</div>
			<div id="loadingbar"></div>
			
			<div id="post_i">
			    
			</div>
		<div id="freewall" class="free-wall">
			
			
		</div>
		<div class="brick size11 add-more">
			<div class='cover'>
				<h2>Загрузить</h2>
			</div>
		</div>
	</div>

		<script type="text/javascript">
			var token = '5618492160.d4af114.5a67f687b3f14e54a25626b9c18a8a39',
			num_photos = 300;
			var colour = [
				"rgb(142, 68, 173)",
				"rgb(243, 156, 18)",
				"rgb(211, 84, 0)",
				"rgb(0, 106, 63)",
				"rgb(41, 128, 185)",
				"rgb(192, 57, 43)",
				"rgb(135, 0, 0)",
				"rgb(39, 174, 96)"
			];

			$(".brick").each(function() {
				this.style.backgroundColor =  colour[colour.length * Math.random() << 0];
			});

			$(function() {
				var wall = new Freewall("#freewall");
				wall.reset({
					selector: '.brick',
					animate: true,
					cellW: 160,
					cellH: 160,
					delay: 50,
					onResize: function() {
						wall.fitWidth();
					}
				});
				wall.fitWidth();

				var temp = '<div class="brick {size}" style="background-color: {color}">{content}</div>';
				var size = "size33 size22 size11".split(" ");
				$(".add-more").click(function() {
					var html = "";
					//for (var i = 0; i < 3; ++i) {
						$.get('php/loader.php', function ( data ) {
					        if( data != 'end' ) {
					            //$('#freewall').append( data );
					            //temp = data;
					            html += temp.replace('{size}', size[size.length * Math.random() << 0])
									.replace('{content}', data);
									wall.prepend(html);
					        } else $(".add-more").detach();
					    })

				});
			});
		</script>
			</div>
		</div>
	</section>

	<footer></footer>
	<div class="hidden"></div>

	<div class="loader">
		<div class="loader_inner"></div>
	</div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<script src="libs/waypoints/waypoints.min.js"></script>
	<script src="libs/animate/animate-css.js"></script>
	<script src="libs/plugins-scroll/plugins-scroll.js"></script>
	
	<script src="js/common.js"></script>
	


	



</body>
</html>