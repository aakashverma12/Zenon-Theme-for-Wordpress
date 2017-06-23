<?php get_header();?>


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

<div class="col-md-12 container s1" style="background-image:url('<?php bloginfo( 'template_directory' );?>/images/s1.jpg')">
<div style="text-align: center;color:white;padding: 1%;border-top: 1px solid black;font-size: 3em" class="col-md-12">
	Our Source Code
</div>
<div class="col-md-12 slide container center" style="border-bottom: 1px solid black;">
		<div class="cardx">
			<div style="width: 100%;height: 70%;padding: 2%">
				<img src="<?php bloginfo( 'template_directory' );?>/images/sec1.jpg" class="people">
			</div>
			<div style="width: 100%;height: 30%;text-align: center;font-size: 2em;padding-top:1%">
				Vipin Khushu<br><span style="font-size:.8em">Secy</span>
			</div>
		</div>
		<div class="cardx">
			<div style="width: 100%;height: 70%;padding: 2%">
				<img src="<?php bloginfo( 'template_directory' );?>/images/sec2.jpg" class="people">
			</div>
			<div style="width: 100%;height: 30%;text-align: center;font-size: 2em;padding-top:1%">
				Sameer Taneja<br><span style="font-size:.8em">Secy</span>
			</div>
		</div>
		<div class="cardx">
			<div style="width: 100%;height: 70%;padding: 2%">
				<img src="<?php bloginfo( 'template_directory' );?>/images/sec3.jpg" class="people">
			</div>
			<div style="width: 100%;height: 30%;text-align: center;font-size: 2em;padding-top:1%">
				Ayushi Mittal<br><span style="font-size:.8em">Secy</span>
			</div>
		</div>
		<div class="cardx">
			<div style="width: 100%;height: 70%;padding: 2%">
				<img src="<?php bloginfo( 'template_directory' );?>/images/jsec1.jpg" class="people">
			</div>
			<div style="width: 100%;height: 30%;text-align: center;font-size: 2em;padding-top:1%">
				Naman Sachdeva<br><span style="font-size:.8em">JSec</span>
			</div>
		</div>
		<div class="cardx">
			<div style="width: 100%;height: 70%;padding: 2%">
				<img src="<?php bloginfo( 'template_directory' );?>/images/jsec2.jpg" class="people">
			</div>
			<div style="width: 100%;height: 30%;text-align: center;font-size: 2em;padding-top:1%">
				Gaurav Yadav<br><span style="font-size:.8em">JSec</span>
			</div>
		</div>
		<div class="cardx">
			<div style="width: 100%;height: 70%;padding: 2%">
				<img src="<?php bloginfo( 'template_directory' );?>/images/jsec3.jpg" class="people">
			</div>
			<div style="width: 100%;height: 30%;text-align: center;font-size: 2em;padding-top:1%">
				Hemand Bansal<br><span style="font-size:.8em">JSec</span>
			</div>
		</div>
</div>
</div>
<?php get_footer();?>
