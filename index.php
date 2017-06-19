<?php get_header();?>
<!-- For Testing
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" >
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.shuffleText.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/myApp.js"></script>
		<script src="<?php bloginfo( 'template_directory' );?>/js/myCtrl.js"></script>
	</head>
<body style="background-color: white;transition: all 1s;color:black">  -->
<div class="wrapper_body container-fluid" ng-app="myApp" ng-controller="myCtrl" style="border-top:2px solid white">

	<!-- The Spectrum New -->
	<div class="col-md-2 side_post_wrapper">
		<h1>Latest Posts</h1>
		<?php $i = 0;
			  $latest = 0;?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ($i == 0)
				{
					$GLOBALS['latest'] = get_the_ID();
				}
			?>
			<div class="title_post_side" ng-click="check('<?php echo get_the_ID();?>')" ng-style="{transform: layout == '<?php echo get_the_ID();?>' ? 'translate3d(5px,-5px,0px)': 'translate3d(0px,0px,0px)'}">
					<?php the_title()?>
			</div>
			<div id="post_latest" style="visibility: hidden;display: none">
				<?php echo $latest;?>
			</div>
		<?php $i++;?>
		<?php endwhile; ?>
		<em style="font-size: 1.2em">Clicking These will switch Posts</em><br><br>
		<p class="next_post" style="width: 100%"><?php next_posts_link( $link = "Previous Posts ->"); ?></p>
		<p class="next_post" style="width: 100%"><?php previous_posts_link($link = "Go Back ->"); ?></p>
	</div>

	<!-- Posts -->
	<div class="col-md-8 row post_wrapper container-fluid row">
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="col-md-12 single_post trans" 
			ng-show="layout == <?php echo get_the_ID();?> && layoutx == <?php echo get_the_ID();?>"
				>
			<div class="row col-md-12 post_ava">
				<div class="col-md-6">
					<?php echo get_avatar(get_the_author_meta( 'ID' ),40)."<div class='p_date'>".get_the_date()."</div>";?>
				</div>
				<div class="col-md-6" style="font-size: 2em">
					<?php echo get_the_author();?>
				</div>
			</div>	
			<div class="row col-md-12 post_title">
				<a href="<?php echo get_permalink();?>" class="link_post"><?php the_title()?></a>
			</div>
			<div class="row col-md-12 post_content">
				<?php the_content("<br><span class='readmore'>Dig More</span>"); ?>
			</div>
		</div>

	<?php endwhile; ?>
	</div>

	<!-- The Sidebar / Search Area -->
	<div class="col-md-2 sidebar_wrapper">
			<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>
