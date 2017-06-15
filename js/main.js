

var web_name = $('#web_name').text();
var web_address = $('#web_address').text();
$(document).ready(function(){
	// For the Welcome Animations 
	$(".loader").fadeOut('slow',function(){
		$('.site_title_name').css({
			'opacity' : '1'
		});
		setTimeout(function(){
			$(".site_title_name").css({
				'transform': 'translate(0%,-50%)',
				'border-right': '2px solid white'
			});
		},2200);
		$(".site_title_des").css({
			'transform': 'translate(100%,-50%)'
		});
		setTimeout(function(){
			$(".site_title_des").css({
					'opacity': '1'
			});
		},2400);
		$(".site_title_name").text('We Develop');
		setTimeout(function(){
			$(".site_title_name").css({
				'opacity': '0'
			})
		},300);
		setTimeout(function(){
			$(".site_title_name").css({
				'opacity': '1'
			}).text("We Build")
		},600);		
		setTimeout(function(){
			$(".site_title_name").css({
				'opacity': '0'
			})
		},900);
		setTimeout(function(){
			$(".site_title_name").css({
				'opacity': '1'
			}).text("We Code")
		},1200);		
		setTimeout(function(){
			$(".site_title_name").css({
				'opacity': '0'
			})
		},1500);
		setTimeout(function(){
			$(".site_title_name").css({
				'opacity': '1'
			}).text(web_name)
		},1800);
		setTimeout(function(){
		$(".experience").css({
					'opacity': '1'
			});		
		},3300);
		setTimeout(function(){
			$(".experience").shuffleText("Lights On!",{frames : 100});
		},3600)
	});
	// Welcome Animation Ends here.

	// Images Responsive
	$("img").addClass('img-responsive')
	
	// slick Carousel
	$('.slick-carousel').slick({
		arrows:false,
		autoplay: true,
		autoplaySpeed: 4000,
		cssEase: 'ease-out',
		pauseOnFocus:false,
		pauseOnHover:false,
	});

	// The social buttons
	
})