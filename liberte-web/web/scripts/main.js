// script loaded in all pages

// enable CSS selectors dependent on scripting
$('html').addClass('js');

// main control block, on DOM-ready..
$(function () {
	
	// viewport size dependent function calls: ranges should match those in the CSS media queries..
	enquire.register('screen and (max-width: 767px)', {
		match : function() {
			
		}
	}).register('screen and (min-width: 768px)', {
		match : function() {
			$('.site-home').attr('src', '../images/LiberteLogo_White_450x144.png')
		}
	}).register('screen and (min-width: 899px)', {
		match : function() {
           
		}
	}).register('screen and (min-width: 900px)', {
		match : function() {
			$(".page-home main").bgswitcher({
				images: ["../images/background_books_01.jpg",
				"../images/background_books_02.jpg",
				"../images/background_books_03.jpg", 
				"../images/background_interior-design_01.jpg",
				"../images/background_interior-design_02.jpg",
				"../images/background_interior-design_03.jpg",
				"../images/background_paintings_01.jpg",
				"../images/background_paintings_02.jpg",
				"../images/background_paintings_03.jpg",
				"../images/background_music_01.jpg",
				"../images/background_music_02.jpg",
				"../images/background_music_03.jpg"]
			});
		}
	}).register('screen and (min-width: 1280px)', {
		match : function() {
			if ($('.page-paintings .main').length) {
		        exhibitionsRender.compress();
	        } 
		},
		unmatch : function() {
			if ($('.page-paintings .main').length) {
		        exhibitionsRender.uncompress();
	        } 
		}
	}).listen(50); // milliseconds

	// non viewport size dependent function calls..


});

// METHODS

var exhibitionsRender = {
	compress : function() {
		var $content = $('.page-paintings .main');
		var $pageTitle = $('.page-paintings .main h1');
		var $preamble = $pageTitle.nextUntil('section');
		var $choice = $('<div class="choice">');
		var $choiceHead = $('<div class="header-sub">');
		var $detail = $('<div class="detail container-lozenge">');
		
		if ($('.detail').length) {
			return;
		}

		$pageTitle.appendTo($choice);
		$preamble.appendTo($choice);
		$choiceHead.appendTo($choice);

		$content.find('section').each(function(i) {
			var $section = $(this);
			var $sectionClass = $(this).attr('class');
			var $sectionHeading = $(this).find('h2');
			var $sectionFig = $(this).find('figure');
			var $imageAnchor = $('<a title="View exhibition..." />').attr('href', '#' + $sectionClass);
			var $gallery = $(this).find('.gallery');
			var $information = $('<div class="info-section off-screen">').html($sectionFig.nextUntil($gallery));
			//var $information = $('<div class="info-section visible">').html($sectionFig.nextUntil($gallery));
			var $infoContainer = $('<div>').attr('id', $sectionClass);

			if (i == 0) {
				$(this).addClass('selected');
			}

			if (i > 0) {
				//$information.addClass('off-screen');
				//$information.removeClass('visible');
				$infoContainer.addClass('off-screen');
			}

			$($sectionFig).before($information);

			$information.hover(function() {
					$(this).prev().addClass('heading-tall');
				}, function() {
					$(this).prev().removeClass('heading-tall');
				}
			);

			$sectionHeading.clone().appendTo($infoContainer);
			$sectionHeading.attr('tabindex', '0');

			$sectionFig.replaceWith(function() {
				if (i == 0) {
					$(this).addClass('focus-lozenge');
				}

				return $(this).append($imageAnchor.append($(this).contents()));
			});
			
			$imageAnchor.click(function() {
				$('.detail > div').each(function() {
					if ($(this).attr('id') == $sectionClass) {
						$(this).removeClass('off-screen');
					} else {
						$(this).addClass('off-screen'); // need tabindex setting on invisible links
					}
				});

				$('.detail.container-lozenge').addClass('blink');

				$content.find('section').each(function() {
					$(this).removeClass('selected');
				});

				$section.addClass('selected');

				$($content.find('figure').removeClass('focus-lozenge'));
				$(this).parent().addClass('focus-lozenge');

				return false;
			});
			
			$imageAnchor.focus(function() {
				$(this).parent().addClass('focus-lozenge');
			});

			$imageAnchor.blur(function() {
				$(this).parent().removeClass('focus-lozenge');
			});

			$gallery.appendTo($infoContainer);
			$(this).appendTo($choiceHead);
			$infoContainer.appendTo($detail);
		});

		$choice.appendTo($content);
		$detail.appendTo($content);
	},
	uncompress : function() {
		var $content = $('.page-paintings .main');
		var $choice = $('.choice');
		var $choiceHead = $('.header-sub');
		var $detail = $('.detail');
		var arrExhibContent = [];

		$content.find('.detail > div').each(function() {
			var $div = $(this).attr('id');
			var $divContent = $(this).find('h2').nextAll();

			arrExhibContent.push({'id': $div, 'content': $divContent});
		});

		$content.find('.header-sub > section').each(function() {
			var $section = $(this).attr('class');
			var $sectionFig = $(this).find('figure');
			var $sectionFigImg = $sectionFig.find('img');

			for (var i = 0; i < arrExhibContent.length; i++) {
				var obj = arrExhibContent[i];
				
				if ($section == obj.id) {
					$(obj.content).insertAfter($sectionFig);
				}
			}

			$sectionFigImg.unwrap();
		});

		$choiceHead.unwrap();

		$choiceHead.replaceWith(function() {
			return $('section', this);
		});
		
		$detail.remove();
	}
};
