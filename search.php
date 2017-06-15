<?php get_header('single'); ?>
<div class="post_wrapper_single container-fluid" style="color:white">

	<div class="col-md-2 menu_single">
			<span style="font-size:2em">Menu</span><hr style="width: 100%;color:white">
			<?php wp_nav_menu( array( 'primary-menu' => __( 'Primary Menu' ) ) ); ?>
	</div>

	<div class="col-md-8 post_single">
		<?php printf( __( '<span class="search_result">Search Results for: %s', 'zenon' ), '' . esc_html( get_search_query() ) . '</span>' ); ?>

		<!-- Posts -->
		<div class="col-md-12 row col-xs-12 post_wrapper container-fluid row">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-md-12 single_post trans">
				<div class="row col-md-12 post_ava">
					<div class="col-md-6">
						<?php echo get_avatar(get_the_author_meta( 'ID' ),40)."<div class='p_date'>".get_the_date()."</div>";?>
					</div>
					<div class="col-md-6" style="font-size: 2em">
						<?php echo get_the_author();?>
					</div>
				</div>	
				<div class="row col-md-12 post_title">
					<?php the_title()?>
					<script>
						$('.post_title').click(function() {
							window.location.href = "<?php echo get_permalink();?>";
						});
					</script>		
				</div>
				<div class="row col-md-12 post_content">
					<?php the_content("<br><span class='readmore'>Dig More</span>"); ?>
				</div>
			</div>
		<?php endwhile; ?>
		</div>

	</div>

	<!-- The Sidebar / Search Area -->
	<div class="col-md-2 sidebar_wrapper">
			<?php get_sidebar();?>
	</div>
</div>
<?php get_footer(); ?>