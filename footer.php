<div id = "web_name" style="visibility: hidden;">
	<?php bloginfo('name'); ?>
</div>
<div id="web_address" style="visibility: hidden;">
	<?php bloginfo( 'template_directory' );?>
</div>
<div class="footer">
Created by Aakash With <span class="fa fa-heart"></span> for <?php bloginfo('name'); ?> | Zenon Theme For Wordpress
</div>
</body>	
<script>
$(function(){
	$(".experience").click(function() {
		$(".wrapper").css({"background-color":"transparent"});
		$(".site_title_name").css('border-right', '2px solid black');
		$(".site_title_name, .site_title_des").css("color","rgb(20,20,20)");
		$(".wrapper_body").css("color","white");
		$(this).fadeOut('slow',function(){
			setTimeout(function(){
				$(".site_title_name").css({
					'top': '10%'
				});
				$(".site_title_des").css({
					'top': '10%',
					'transition': 'all .5s'
				});
				$('.menu').css('visibility', 'visible');
				if ($(window).width() > 960) {
					$('.black').css('background-color', 'transparent');
					$('.site_title').css({
						'background-color': 'rgba(255,255,255,.2)',
	                  	'border': '2px solid white'
					});
				}
				else {
					$('.black').css('background-color', 'rgba(255,255,255,.2)');
					$('.site_title').css({
						'background-color': 'transparent',
	                  	'border': '0px solid white'
					});
				}
			},1000);
			setTimeout(function(){
				$("#menu-the-navigation li").each(function(idx, li) {
					$(this).delay(500 * idx).css({
						'transform':'translateX(0px)',
						'opacity':'1'
					});
					$(".social").fadeIn('slow');
				});
			},1500)
		});
	});
})
</script>
<script src="<?php bloginfo( 'template_directory' );?>/js/main.js"></script>
</html> 