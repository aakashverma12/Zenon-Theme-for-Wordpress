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
		$(".site_title_name").css('border-right', '2px solid white');
		$(".site_title_name, .site_title_des").css("color","white");
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
					$('.black').css('background-color', 'rgba(0,0,0,.2)');
					$('.site_title').css({
						'background-color': 'transparent',
	                  	'border': '2px solid white'
					});
				}
				else {
					$('.black').css('background-color', 'rgba(0,0,0,.2)');
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
<script>
app.controller('myCtrl', function($scope,$timeout){
	$scope.id = $("#post_latest").text();
	$scope.layout = $scope.id;
	$scope.layoutx = $scope.id;
	$scope.check = function(x) {
		$scope.layout = x;
		$timeout(function() {
			$scope.layoutx = $scope.layout;
		},250)
	};
});
</script>
</html> 