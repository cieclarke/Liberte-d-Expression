// script loaded in all pages

var pageLozengesMeta = {
	'paintings': {
		'artExhibitions': {
			'lozFirst': '<img src="/images/exhibitions-paintings/lozenge_exhibition_barclays_00.jpg" alt="Exhibition scene - Barclays" />',
			'lozSecond': '<img src="/images/exhibitions-paintings/lozenge_exhibition_light-gallery_00.jpg" alt="Exhibition scene - Light Gallery" />'
		},
		'samples': {
			'lozFirst': '<img src="/images/exhibitions-paintings/lozenge_artist_gallery_sample_00.jpg" alt="Exhibits - artist sample gallery" />'
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
	// <<<< Viewport size dependent function calls >>>>

	// media query breakpoints should match those in the CSS
	enquire.register('screen and (max-width: 1023px)', {
		match : function() {
			// remove section links
			if ($('.page-music').length || $('.page-books').length) {
				$('main section li a:first-child').each(function() {
					$(this).parent().attr('data-path', $(this).attr('href'));
					$(this).contents().unwrap();
				});
			}
		},
		unmatch : function() {
			// reinstate section anchors
			if ($('.page-music').length || $('.page-books').length) {
				$('main section li').each(function() {
					var anchorPath = $(this).attr('data-path');
					var anchorText = $(this).clone().children().remove().end().text();
					var $anchor = $('<a />').attr('href', anchorPath).text(anchorText);

					$(this).removeAttr('data-path');
					$(this).prepend($anchor);
					$(this).html($(this).children());
				});
			}
		}
	}).register('screen and (min-width: 1024px)', {
		match : function() {
			if ($('.page-paintings').length) {
				var $page = $('.page-paintings');
				var lozPaths = pageLozengesMeta.paintings;
				
				pageMaxWidthRender.assemble($page, 'type-gallery', lozPaths);

				// add fancybox gallery groupings at full desktop viewport
				$($page.find('#exhibition-art .gallery a').attr('rel', 'exhibitions'));
				$($page.find('#exhibition-gallery-sample .gallery a').attr('rel', 'samples'));
				$($page.find('#exhibition-sharmina .gallery a').attr('rel', 'sharmina'));
			}

			if ($('.page-interior-design').length) {
				var $page = $('.page-interior-design');
				var lozPaths = pageLozengesMeta.design;
				
				pageMaxWidthRender.assemble($page, 'type-gallery', lozPaths);
				
				// add fancybox gallery groupings at full desktop viewport
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

				pageMaxWidthRender.disassemble($page, 'type-gallery');
			}

			if ($('.page-interior-design').length) {
				var $page = $('.page-interior-design');

				pageMaxWidthRender.disassemble($page, 'type-gallery');
			}

			if ($('.page-books').length) {
				var $page = $('.page-books');

				pageMaxWidthRender.disassemble($page, 'type-viewer');
			}

			if ($('.page-music').length) {
				var $page = $('.page-music');

				pageMaxWidthRender.disassemble($page, 'type-viewer');
			}
		}
	}).listen(50); // milliseconds


	// <<<< Non viewport size dependent function calls >>>>

	// general fancybox config.
	$(".fancybox").fancybox({
		nextMethod : 'resizeIn',
        nextSpeed  : 15,
        prevMethod : false,
		helpers : {
			overlay : {
				locked : false
			}
		}
    });

	$('.gallery a').addClass('fancybox');

	// add fancybox gallery groupings
	if ($('.page-paintings').length) {
		var $page = $('.page-paintings');

		$($page.find('.exhibition-art .gallery a').attr('rel', 'exhibitions'));
		$($page.find('.exhibition-gallery-sample .gallery a').attr('rel', 'samples'));
		$($page.find('.exhibition-sharmina .gallery a').attr('rel', 'sharmina'));
	}

	if ($('.page-interior-design').length) {
		var $page = $('.page-interior-design');

		$($page.find('.interior .gallery a').attr('rel', 'interior'));
		$($page.find('.product .gallery a').attr('rel', 'product'));
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

		setInterval(function() {
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
			var lozSection = Object.keys(lozPaths)[i];
			var $loz = $(lozPaths[lozSection].lozFirst);

			$sectionLoz.html($loz);
			
			if (pageType == 'type-gallery') {
				var $sectionAnchor = $('<a />').attr('href', '#' + $sectionClass).addClass('info-section-show');
				var $gallery = $section.find('.gallery');
				var $information = $('<div class="info-section off-screen">').html($sectionHeading.nextUntil($gallery));
				var $galleryContainer = $('<div class="off-screen">').attr('id', $sectionClass);
				
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
				$galleryContainer.appendTo($detail);
			}

			if (pageType == 'type-viewer') {
				var $songList = $section.find('ul');

				$sectionLoz.insertAfter($songList);
				$songList.find('.deliverable').addClass('off-screen').attr('tabindex', -1);

				if ($('.media-play').length) {
					$('.media-play').appendTo($detail);
					$detail.addClass('active');
				}
			}

			$section.appendTo($choiceHead);
		});

		$choice.appendTo($content);
		$detail.appendTo($content);
	},
	disassemble : function($page, pageType) {
		var $content = $($page.find('main'));;
		var $choice = $('.choice');
		var $choiceHead = $('.header-sub');
		var $detail = $('.detail');
		
		// need to return to the parent page if in a music/book specific view. Otherwise if the viewport width is
		// reduced the URL is a view path that is not available at lesser viewport widths when scripting is 
		// available and the play/view control will also still be in the DOM. Established behaviour is use of 
		// alternative player/anchor at lesser viewport widths
		if (pageType == 'type-viewer') {
			var pathName = window.location.pathname;
			var pathView = pathName.substring(pathName.lastIndexOf('/') + 1);

			if (pathView.length > 0) {
				window.location.href = './';
			}
		}

		if (pageType == 'type-gallery') {
			var arrSectionContent = [];

			$content.find('.detail > div').each(function() {
				var $div = $(this).attr('id');
				var $divContent = $(this).find('h2').nextAll();

				arrSectionContent.push({'id': $div, 'content': $divContent});
			});
		}

		$content.find('.header-sub > section').each(function() {
			var $section = $(this).removeClass('selected').attr('class');
			var $sectionHeading = $(this).find('h2');
			var $sectionHeadingText = $sectionHeading.text();
			var $sectionFig = $(this).find('figure');
			var $sectionInfo = $(this).find('.info-section > *');

			$sectionHeading.empty().text($sectionHeadingText);
			$sectionFig.remove();

			if (pageType == 'type-gallery') {
				for (var i = 0; i < arrSectionContent.length; i++) {
					var obj = arrSectionContent[i];
					
					if ($section == obj.id) {
						$(obj.content).insertAfter($sectionHeading);
					}
				}
			}

			if (pageType == 'type-viewer') {
				$(this).find('.deliverable').removeClass('off-screen').attr('tabindex', 0);
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