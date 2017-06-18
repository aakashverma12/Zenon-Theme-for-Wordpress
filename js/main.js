

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

	// Responsive Jquery
	if ($(window).width() < 960 && $(window).width() > 500) {
   			$(".side_post_wrapper").css('transform', 'translateX(0px)');
   			$(".post_wrapper").css({
   				"padding-left": "3%",
   				"padding-right": "3%"
   			});
   			$(".site_title_name").css('font-size', '3em');
   			$(".site_title_des").css('font-size', '1.6em');
   			$(".single_header_name").css('font-size', '3em');
   			$(".single_header_des").css('font-size', '.7em');
   			$(".experience").css('font-size', '1.6em');
   			$('.title_post_side').css('margin-bottom', '5%');
   			$(".menu").css('font-size', '1.4em');
		}
	else if ($(window).width() < 500) {
			$(".side_post_wrapper").css('transform', 'translateX(0px)');
   			$(".post_wrapper").css({
   				"padding-left": "2%",
   				"padding-right": "2%"
   			});
   			$(".site_title_name").css('font-size', '2em');
   			$(".site_title_des").css('font-size', '1.3em');
   			$(".single_header_name").css('font-size', '2em');
   			$(".single_header_des").css('font-size', '.5em');
   			$(".experience").css('font-size', '1.3em');
   			$(".menu").css('font-size', '1.4em');
   			$(".ani_post").css('height', '20%');
   			$(".member_title").css('font-size', '1.2em');
   			$(".member_icon").css('width', '50%');
   			$(".member_text_box").css('width', '50%');
   			$(".member_contents").css('font-size', '.8em');
   			$(".traingle_two").css('background-position', '90% 51%');
   			$(".single_post").css({
   				'border': '2px solid white',
   				'border-radius': '1px'
   			});
	}
	// Resonsive Font, FlowType.js
	$('.post_content').flowtype({
		minimum : 500,
		maximum : 1920,
		minFont : 6,
 		maxFont : 14,
 		fontRatio : 40
	});
	$('.p_date').flowtype({
		minimum : 500,
		maximum : 1920,
		minFont : 12,
 		maxFont : 24,
 		fontRatio : 26
	});
})