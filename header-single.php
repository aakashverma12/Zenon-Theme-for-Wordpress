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
	<style>
	#menu-the-navigation {
		opacity: 1;
		visibility: visible;
		padding: 0px;
	}

	.menu-item {
		padding: 2%;
	}

	.menu-item > a {
		padding: 1%;
		padding-right: 3%;
		padding-left: 3%;
		color:black;
		text-decoration: inherit;
		transition: all .4s;
		background-color: rgba(255,255,255,.6);
		border: 2px solid white;
		display: inline-block;
	}

	#menu-the-navigation > li {
		opacity: 1;
		transition: all .5s;
		transform: none;
	}

	.menu-item > a:hover {
		border: 2px solid black;
		color:white	;
		background-color: rgba(20,20,20,.6);
		transform: perspective(500px) translate3d(5px,-5px,5px);
	}

	.menu {
		text-align: center;
		list-style-type: none;
		position: inherit;
		width: 100%;
		font-size: 1.5em;
		visibility: visible;
		transition: all 1s;
		opacity: 1;
		transform: none
	}

	.menu_single {
		margin-top: 5%;
		border: 1px solid #ad0f0f;
		text-align: center;
		padding-top: 2%;
	}
	input {
		background-color: transparent;
		transition: all .2s;
		border:1px solid #a9a9a9;
		margin-left: 10px
	}

	input:focus {
		background-color: rgb(20,20,20);
	}

	label {
		font-weight: inherit;
	}

	.post_single {
		padding-top: 1%;
	}

	.search_result {
		font-size: 1.4em;
		border:1px solid #21f1de;
		padding: 1%;
		transition: all .2s;
		display: block;
		text-align: center;
	}

	.search_result:hover {
		border:1px solid #2195f1;
	}
	</style>
	</head>
<body style="background-color: rgb(20, 20, 20);transition: all 1s" >

<div class="container-fluid" style="background-color: rgb(20,20,20);height: 25%;border-bottom: 2px solid white">

<!-- The Entry -->
	<div class="col-md-12 container-fluid row" style="margin-top: 2%;">
		<div style="
									color:white;opacity: 1;
									text-align: right;
									border-right: 2px solid white;
									font-size: 4em;
									display: inline-block;
									width: 50%;
									padding-right: 10px;" class="url_home">
			<?php bloginfo('name'); ?>
			<script>
				$('.url_home').click(function() {
					window.location.href = "<?php echo get_home_url();?>";
			});
		</script>
		</div>
		<div  style="
					color:white;
					opacity: 1;
					font-size: 2.2em;
					display: inline-block;
					float: right;
					width: 50%;
					padding-left: 10px;">
			<div style="position: absolute;
						transform: translate(0%,50%);" class="url_home">
							<?php bloginfo('description');?>
						</div>
		</div>
		<div style="position: absolute;
					bottom: -60%;
					font-size: 2em;
					width: 100%;
					text-align: center;
					transform: all .4s;
					text-decoration: none;">
			<i class="fa fa-facebook-square"></i>&nbsp;
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
