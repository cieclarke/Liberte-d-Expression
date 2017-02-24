// script loaded in all pages

var pageLozengesMeta = {
	'paintings': {
		'artExhibitions': {
			'lozFirst': '<img src="/images/exhibitions-paintings/lozenge_exhibition_barclays_00.jpg" alt="Exhibition scene - Barclays" />',
			'lozSecond': '<img src="/images/exhibitions-paintings/lozenge_exhibition_light-gallery_00.jpg" alt="Exhibition scene - Light Gallery" />'
		},
		'sharminas': {
			'lozFirst': '<img src="/images/exhibitions-paintings/lozenge_exhibition_sharmina_00.jpg" alt="Exhibition scene - Sharmina" />',
			'lozSecond': '<img src="/images/exhibitions-paintings/lozenge_exhibition_torbay_00.jpg" alt="Exhibition scene - Torbay" />'
		}
	},
	'design': {
		'interior': {
			'lozFirst': '<img src="/images/interior-design/lozenge_design_interior_00.jpg" alt="Interior design - example" />',
			'lozSecond': '<img src="/images/interior-design/lozenge_design_interior_01.jpg" alt="Interior design - example" />'
		},
		'product': {
			'lozFirst': '<img src="/images/interior-design/lozenge_design_product_00.jpg" alt="Product design - example" />'
		}
	},
	'music': {
		'english': {
			'lozFirst': '<img src="/images/music/lozenge_music_00.jpg" alt="Music - studio example" />'
		},
		'spanish': {
			'lozFirst': '<img src="/images/music/lozenge_music_01.jpg" alt="Music - studio example" />'
		}
		,
		'french': {
			'lozFirst': '<img src="/images/music/lozenge_music_02.jpg" alt="Music - studio example" />'
		}
	},
	'books': {
		'happyLaneSeries': {
			'lozFirst': '<img src="/images/books/lozenge_books_00.jpg" alt="Books - Happy Lane series example" />',
			'lozSecond': '<img src="/images/books/lozenge_books_01.jpg" alt="Books - Happy Lane series example" />'
		},
		'otherBooks': {
			'lozFirst': '<img src="/images/books/lozenge_books_02.jpg" alt="Books - other books example" />'
		}
	}
};

//console.log(pageLozengesMeta.design.interior.lozFirst);
//console.log(Object.keys(pageLozengesMeta.paintings).length);
//console.log(Object.keys(pageLozengesMeta.paintings)[0]);

$('html').addClass('js');

// main control block, on DOM-ready..
$(function () {
	// media query breakpoints should match those in the CSS
	enquire.register('screen and (max-width: 480px)', {
		match : function() {
			
		}
	}).register('screen and (min-width: 1280px)', {
		match : function() {
			if ($('.page-paintings').length) {
				var $page = $('.page-paintings');
				var lozPaths = pageLozengesMeta.paintings;
				
				pageMaxWidthRender.assemble($page, 'type-gallery', lozPaths);

				$($page.find('#barclays .gallery a').attr('rel', 'exhibitions'));
				$($page.find('#sharmina .gallery a').attr('rel', 'sharmina'));
			}

			if ($('.page-interior-design').length) {
				var $page = $('.page-interior-design');
				var lozPaths = pageLozengesMeta.design;
				
				pageMaxWidthRender.assemble($page, 'type-gallery', lozPaths);
				
				$('.page-interior-design #interior .gallery a').attr('rel', 'interior');
				$('.page-interior-design #product .gallery a').attr('rel', 'product');
			}

			if ($('.page-books').length) {
				var $page = $('.page-books');
				var lozPaths = pageLozengesMeta.books;

				pageMaxWidthRender.assemble($page, 'type-viewer', lozPaths);
			}

			if ($('.page-music').length) {
				var $page = $('.page-music');
				var lozPaths = pageLozengesMeta.music;

				pageMaxWidthRender.assemble($page, 'type-viewer', lozPaths);
			}
		},
		unmatch : function() {
			if ($('.page-paintings').length) {
				var $page = $('.page-paintings');

				pageMaxWidthRender.disassemble($page);
			}

			if ($('.page-interior-design').length) {
				var $page = $('.page-interior-design');

				pageMaxWidthRender.disassemble($page);
			}

			if ($('.page-books').length) {
				var $page = $('.page-books');

				pageMaxWidthRender.disassemble($page);
			}

			if ($('.page-music').length) {
				var $page = $('.page-music');

				pageMaxWidthRender.disassemble($page);
			}
		}
	}).listen(50); // milliseconds

	// non viewport size dependent function calls..
	// fancybox
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

	$('.gallery a').addClass('fancybox');
	
	if ($('.page-paintings').length) {
		var $page = $('.page-paintings');

		// fancybox gallery groupings
		$($page.find('.barclays .gallery a').attr('rel', 'exhibitions'));
		$($page.find('.sharmina .gallery a').attr('rel', 'sharmina'));
	}
	
	// set home page background and text colour transitions
	if ($('.page-home').length) {
		var arrPalette = [
			'palette-00',
			'palette-00', 
			'palette-01', 
			'palette-01', 
			'palette-02', 
			'palette-02', 
			'palette-03',
			'palette-03'
			];
		var arrLength = arrPalette.length;
		var i = 0; 

		$('.page-home .introduction').attr('data-palette', 'palette-00');

		setInterval(function(){
			$('.page-home .introduction').attr('data-palette', '').attr('data-palette', arrPalette[i + 1]);
			i = (i + 1) % arrLength;
		}, 4060);

		$(".page-home main").bgswitcher({
			images: [
				"../images/backgrounds-home/background_interior-design_bw_00.jpg",
				"../images/backgrounds-home/background_interior-design_bw_01.jpg",
				"../images/backgrounds-home/background_paintings_bw_00.jpg",
				"../images/backgrounds-home/background_paintings_bw_01.jpg",
				"../images/backgrounds-home/background_music_bw_00.jpg",
				"../images/backgrounds-home/background_music_bw_01.jpg",
				"../images/backgrounds-home/background_books_bw_00.jpg",
				"../images/backgrounds-home/background_books_bw_01.jpg"
			],
			interval: 4000,
			duration: 1200
		});
	}
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
var pageMaxWidthRender = {
	assemble : function($page, pageType, lozPaths) {
		var $content = $($page.find('main'));
		var $sections = $content.find('section').length;
		var $pageTitle = $content.find('h1');
		var $preamble = $pageTitle.nextUntil('section');
		var $choice = $('<div class="choice">');
		var $choiceHead = $('<div class="header-sub col-' + $sections + '">');
		var $detail = $('<div class="detail container-lozenge">');
		
		$pageTitle.appendTo($choice);
		$preamble.appendTo($choice);
		$choiceHead.appendTo($choice);

		// gallery: heading link / section text / 1 lozenge
		// player: plain heading / section list of links / 1 lozenge
		$content.find('section').each(function(i) {
			var $section = $(this);
			var $sectionClass = $section.attr('class');
			var $sectionHeading = $section.find('h2');
			var $sectionLoz = $('<figure class="container-lozenge image">');
			
			if (pageType == 'type-gallery') {
				var $sectionAnchor = $('<a />').attr('href', '#' + $sectionClass).addClass('info-section-show');
				var $gallery = $section.find('.gallery');
				var $information = $('<div class="info-section off-screen">').html($sectionHeading.nextUntil($gallery));
				var $galleryContainer = $('<div class="off-screen">').attr('id', $sectionClass);
				var lozSection = Object.keys(lozPaths)[i];
				var $loz = $(lozPaths[lozSection].lozFirst);

				$sectionLoz.html($loz);
				$information.find('a').attr('tabindex', -1);
				$gallery.find('a').attr('tabindex', -1);
				$information.appendTo($section);
				$sectionLoz.insertAfter($information);
				$sectionHeading.clone().appendTo($galleryContainer);

				$sectionHeading.replaceWith(function() {
					return $(this).append($sectionAnchor.append($(this).contents()));
				});

				$sectionAnchor.click(function() {
					$('.detail.container-lozenge').addClass('blink'); // add once, never remove so single animation per page load
					$detail.addClass('active');
					$('.detail > div').each(function() {
						if ($(this).attr('id') == $sectionClass) {
							$(this).removeClass('off-screen');
							$(this).find('a').attr('tabindex', 0);
						} else {
							$(this).addClass('off-screen'); 
							$(this).find('a').attr('tabindex', -1);
						}
					});

					$choiceHead.find('section').each(function() {
						$(this).removeClass('selected');
					});

					$section.addClass('selected');
					$choiceHead.find('figure').removeClass('focus-lozenge');
					$sectionLoz.addClass('focus-lozenge');

					return false;
				});

				$sectionAnchor.hover(function() {
					$information.addClass('visible');
					$(this).addClass('info-section-drop');
				}, function() {
					$information.removeClass('visible');
					$(this).removeClass('info-section-drop');
				});

				$sectionAnchor.focus(function() {
					$information.addClass('visible');
					$(this).addClass('info-section-drop');

					$choiceHead.find('.info-section').each(function() {
						$(this).find('a').attr('tabindex', -1);
					});

					$information.find('a').attr('tabindex', 0);
				});

				$sectionAnchor.blur(function() {
					$information.removeClass('visible');
					$(this).removeClass('info-section-drop');
				});

				$information.hover(function() {
					$(this).addClass('visible');
					$sectionAnchor.addClass('info-section-drop');
				}, function() {
					$(this).removeClass('visible');
					$sectionAnchor.removeClass('info-section-drop');
				});

				$information.focusin(function(){
					$(this).addClass('visible');
					$sectionAnchor.addClass('info-section-drop');
				});

				$information.focusout(function(){
					$(this).removeClass('visible');
					$sectionAnchor.removeClass('info-section-drop');
				});

				$gallery.appendTo($galleryContainer);
			}

			if (pageType == 'type-viewer') {
				

			}

			$section.appendTo($choiceHead);
			$galleryContainer.appendTo($detail);
		});

		$choice.appendTo($content);
		$detail.appendTo($content);
	},
	disassemble : function($page) {
		var $content = $($page.find('main'));;
		var $choice = $('.choice');
		var $choiceHead = $('.header-sub');
		var $detail = $('.detail');
		var arrSectionContent = [];

		$content.find('.detail > div').each(function() {
			var $div = $(this).attr('id');
			var $divContent = $(this).find('h2').nextAll();

			arrSectionContent.push({'id': $div, 'content': $divContent});
		});

		$content.find('.header-sub > section').each(function() {
			var $section = $(this).removeClass('selected').attr('class');
			var $sectionHeading = $(this).find('h2');
			var $sectionHeadingText = $sectionHeading.text();
			var $sectionFig = $(this).find('figure');
			var $sectionInfo = $(this).find('.info-section > *');

			$sectionHeading.empty().text($sectionHeadingText);
			$sectionFig.remove();

			for (var i = 0; i < arrSectionContent.length; i++) {
				var obj = arrSectionContent[i];
				
				if ($section == obj.id) {
					$(obj.content).insertAfter($sectionHeading);
				}
			}

			$sectionInfo.unwrap().insertAfter($sectionHeading);
		});

		$choiceHead.unwrap();

		$choiceHead.replaceWith(function() {
			return $('section', this);
		});
		
		$detail.remove();
	}
};