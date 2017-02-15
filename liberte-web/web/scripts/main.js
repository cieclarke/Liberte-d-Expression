// script loaded in all pages

$('html').addClass('js');

// main control block, on DOM-ready..
$(function () {
	
	// viewport size dependent function calls: ranges should match those in the CSS media queries..
	enquire.register('screen and (max-width: 767px)', {
		match : function() {
			
		}
	}).register('screen and (min-width: 768px)', {
		match : function() {
			
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

				$('.page-paintings #barclays .gallery a').attr('rel', 'barclays');
				$('.page-paintings #light .gallery a').attr('rel', 'light');
				$('.page-paintings #torbay .gallery a').attr('rel', 'torbay');
				$('.page-paintings #sharmina .gallery a').attr('rel', 'sharmina');
	        } 
		},
		unmatch : function() {
			if ($('.page-paintings .main').length) {
		        exhibitionsRender.uncompress();
	        } 
		}
	}).listen(50); // milliseconds

	// non viewport size dependent function calls..
	$(".fancybox").fancybox({
        nextMethod : 'resizeIn',
        nextSpeed  : 15,
        prevMethod : false,
        helpers : {
            title : {
                type : 'outside'
            }
        }
    });

	$('.gallery a'). addClass('fancybox');

	$('.page-paintings .barclays .gallery a').attr('rel', 'barclays');
	$('.page-paintings .light .gallery a').attr('rel', 'light');
	$('.page-paintings .torbay .gallery a').attr('rel', 'torbay');
	$('.page-paintings .sharmina .gallery a').attr('rel', 'sharmina');
});

// fancybox transition
(function ($, F) {
    F.transitions.resizeIn = function() {
        var previous = F.previous,
            current  = F.current,
            startPos = previous.wrap.stop(true).position(),
            endPos   = $.extend({opacity : 1}, current.pos);

        startPos.width  = previous.wrap.width();
        startPos.height = previous.wrap.height();

        previous.wrap.stop(true).trigger('onReset').remove();

        delete endPos.position;

        current.inner.hide();

        current.wrap.css(startPos).animate(endPos, {
            duration : current.nextSpeed,
            easing   : current.nextEasing,
            step     : F.transitions.step,
            complete : function() {
                F._afterZoomIn();

                current.inner.fadeIn("slow");
            }
        });
    };
}(jQuery, jQuery.fancybox));


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
			var $sectionClass = $section.attr('class');
			var $sectionHeading = $section.find('h2');
			var $sectionFig = $section.find('figure');
			var $imageAnchor = $('<a title="View exhibition..." />').attr('href', '#' + $sectionClass);
			var $gallery = $section.find('.gallery');
			var $information = $('<div class="info-section">').html($sectionFig.nextUntil($gallery));
			var $infoContainer = $('<div>').attr('id', $sectionClass);

			if (i == 0) {
				$section.addClass('selected');
				$information.addClass('visible');
			}

			if (i > 0) {
				$information.addClass('off-screen');
				$infoContainer.addClass('off-screen');
				$section.find('a').attr('tabindex', -1);
			}

			$($sectionFig).before($information);
			$sectionHeading.clone().appendTo($infoContainer);

			$sectionFig.replaceWith(function() {
				if (i == 0) {
					$(this).addClass('focus-lozenge');
				}

				return $(this).append($imageAnchor.append($(this).contents()));
			});

			$imageAnchor.click(function() {
				var $anchor = $(this);
				
				$('.detail.container-lozenge').addClass('blink'); // add once, never remove so single animation per page load
				
				$('.detail > div').each(function() {
					if ($(this).attr('id') == $sectionClass) {
						$(this).removeClass('off-screen');
						$(this).find('a').attr('tabindex', 0);
						//$(this).attr('tabindex', 0).focus();
					} else {
						$(this).addClass('off-screen'); 
						$(this).find('a').attr('tabindex', -1);
					}
				});

				$content.find('section').each(function() {
					var $section = $(this);
					var $info = $(this).find('.info-section');

					$section.removeClass('selected');
					$info.removeClass('visible').addClass('off-screen');
				});

				$section.addClass('selected');
				$information.addClass('visible');

				$($content.find('figure').removeClass('focus-lozenge'));
				$(this).parent().addClass('focus-lozenge');

				return false;
			});
			
			$imageAnchor.focus(function() {
				$(this).parent().addClass('focus-lozenge');
			});

			$imageAnchor.blur(function() {
				if (!$section.hasClass('selected')) {
					$(this).parent().removeClass('focus-lozenge');
				}
			});

			$gallery.appendTo($infoContainer);
			$section.appendTo($choiceHead);
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
			var $section = $(this).attr('class').split(' ')[0];
			var $sectionFig = $(this).find('figure');
			var $sectionFigImg = $sectionFig.find('img').unwrap();
			var $sectionInfo = $(this).find('.info-section > *');

			for (var i = 0; i < arrExhibContent.length; i++) {
				var obj = arrExhibContent[i];
				
				if ($section == obj.id) {
					$(obj.content).insertAfter($sectionFig);
				}
			}

			$sectionInfo.unwrap().insertAfter($sectionFig);
		});

		$choiceHead.unwrap();

		$choiceHead.replaceWith(function() {
			return $('section', this);
		});
		
		$detail.remove();
	}
};
