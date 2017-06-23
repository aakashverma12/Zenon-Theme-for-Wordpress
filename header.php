<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?> style="background-color:#e8e8e8">
<!--<![endif]-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <meta title="<?php echo bloginfo('name');?>" />
        <meta description="<?php echo get_bloginfo('description', 'display');?>" />
        <meta keywords="Manan, Technology, Coding, YMCA university, Club, IT" />
        <meta author="Aakash Verma"/>
		<title>
			<?php
			global $page, $paded;
			wp_title('|', 'true', 'right');
			?>
		</title>
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/style/slick.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.shuffleText.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular-animate.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/myApp.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/slick.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/flowtype.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/parallax.min.js"></script>
	</head>

<body style="background-color: rgb(20, 20, 20);transition: all 1s" >

<!-- The Loader -->
<div class="loader">
	<img src="<?php bloginfo( 'template_directory' );?>/images/loading.gif" alt="Loader" class="img-responsive img_loader">
</div>

<div class="wrapper container-fluid" style="background-color: rgb(20,20,20)">

<!-- The Carousel -->
<div class="slick-carousel col-md-13 row" style="z-index: 0;">
  <div><img class="imgc" id="im1" src="<?php bloginfo( 'template_directory' );?>/images/12.jpg"></div>
  <div><img class="imgc" id="im2" src="<?php bloginfo( 'template_directory' );?>/images/13.jpg"></div>
  <div><img class="imgc" id="im3" src="<?php bloginfo( 'template_directory' );?>/images/15.jpg"></div>
  <div><img class="imgc" id="im4" src="<?php bloginfo( 'template_directory' );?>/images/14.jpg"></div>
  <div><img class="imgc" id="im5" src="<?php bloginfo( 'template_directory' );?>/images/16.jpg"></div>
</div>
<!-- The Entry -->
	<div class="black container-fluid" style="position: absolute;top:0%;height: 100%;background-color: rgb(20,20,20);width: 100%;transition: all 1s;">
	<div class="col-md-8 col-xs-12 site_title row ">
		<script>
			$('.url_home').click(function() {
				window.location.href = "<?php echo get_home_url();?>";
			});
		</script>
		<div class="site_title_name url_home">
			<?php bloginfo('name'); ?>
		</div>
		<div class="site_title_des url_home">
			<?php bloginfo('description');?>
		</div>
		<div class="experience">
			&nbsp;	
		</div>
		<div class="menu">
		<?php wp_nav_menu( array( 'primary-menu' => __( 'Primary Menu' ) ) ); ?>
		</div>
		<div class="social" style="text-decoration: none">
			<i class="fa fa-facebook-square"></i>&nbsp;
			&nbsp;<i class="fa fa-instagram"></i>&nbsp;
			&nbsp;<i class="fa fa-youtube-play"></i>&nbsp;
		</div>
		<script>
			$('.fa-facebook-square').click(function() {
				window.location.href = "<?php echo get_the_author_meta('facebook', $post->post_author);?>";
			});
			if ($(window).width() < 500) {
				$("#im1").attr("src","<?php bloginfo( 'template_directory' );?>/images/12m.jpg");
				$("#im2").attr("src","<?php bloginfo( 'template_directory' );?>/images/13m.jpg");
				$("#im3").attr("src","<?php bloginfo( 'template_directory' );?>/images/14m.jpg");
				$("#im4").attr("src","<?php bloginfo( 'template_directory' );?>/images/15m.jpg");
				$("#im5").attr("src","<?php bloginfo( 'template_directory' );?>/images/16m.jpg");
			}
		</script>
	</div>
	</div>
</div>
