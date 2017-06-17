<?php get_header('members'); ?>
<div class="post_wrapper_single container-fluid" style="color:white">
	<div class="col-md-10 post_single">

		<!-- Posts -->
		<div class="col-md-12 row post_wrapper container-fluid row">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-md-12 single_post trans container-fluid ani_post" style="height: 35%;padding: 0px;border-radius: 0px;
																					background-color: rgb(20,20,20);">
				<div class="member_icon" style="padding: 0px;
												width: 40%;
												position: absolute;
												left: 0px">
					<?php echo get_the_post_thumbnail( $post_id);?>
					<div id="traingle-bottom-right" class="traingle_two" style="background-image: url('<?php bloginfo( 'template_directory' );?>/images/trainglet.png');background-position: 98% 51%">
					</div>
				</div>
					<div style="padding-top: 5%;
								position: absolute;
								right: 0px;
								top:0px;
								width: 60%" class="member_text_box">
					<div class="post_title member_title" style="width: 100%;border:0px">
						<a href="<?php echo get_permalink();?>" class="link_post"><?php the_title()?></a>		
					</div>
					<div class="col-md-12 member_contents" style="width: 100%;text-align: center;"> 
						<?php the_content("<br><span class='readmore'>Dig More</span>"); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>

	</div>

	<!-- The Sidebar / Search Area -->
	<div class="col-md-2 sidebar_wrapper" style="margin-top: 12%">
			<?php get_sidebar();?>
	</div>
</div>
<?php get_footer(); ?>