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
		<title>
			<?php
			global $page, $paded;
			wp_title('|', 'true', 'right');
			bloginfo('name');
			echo " | ".get_bloginfo('description', 'display');
			?>
		</title>
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/style/slick.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" >
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.shuffleText.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/myApp.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/myCtrl.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/slick.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/flowtype.js"></script>
	</head>
<body style="background-color: rgb(20, 20, 20);transition: all 1s" >

<!-- The Loader -->
<div class="loader">
	<img src="<?php bloginfo( 'template_directory' );?>/images/loading.gif" alt="Loader" class="img-responsive img_loader">
</div>

<div class="wrapper container-fluid" style="background-color: rgb(20,20,20)">

<!-- The Carousel -->
<div class="slick-carousel col-md-13 row" style="z-index: 0;">
  <div><img class="imgc" src="<?php bloginfo( 'template_directory' );?>/images/1.jpg"></div>
  <div><img class="imgc" src="<?php bloginfo( 'template_directory' );?>/images/2.jpg"></div>
  <div><img class="imgc" src="<?php bloginfo( 'template_directory' );?>/images/3.jpg"></div>
  <div><img class="imgc" src="<?php bloginfo( 'template_directory' );?>/images/4.jpg"></div>
  <div><img class="imgc" src="<?php bloginfo( 'template_directory' );?>/images/5.jpg"></div>
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
			&nbsp;&nbsp;&nbsp;<i class="fa fa-facebook-square"></i>&nbsp;
			&nbsp;<i class="fa fa-instagram"></i>&nbsp;
			&nbsp;<i class="fa fa-youtube-play"></i>&nbsp;
		</div>
		<script>
			$('.fa-facebook-square').click(function() {
				window.location.href = "<?php echo get_the_author_meta('facebook', $post->post_author);?>";
			});
		</script>
	</div>
	</div>
</div>
