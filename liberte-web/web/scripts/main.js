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
		        // restructure standard exhibitions HTML to a menu and revealed/hidden exhibition information
		        exhibitionsRender.compress();
	        } 
		},
		unmatch : function() {
			
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
		
		$pageTitle.appendTo($choice);
		$preamble.appendTo($choice);
		$choiceHead.appendTo($choice);

		$content.find('section').each(function() {
			var $section = $(this).attr('class');
			var $sectionHeading = $(this).find('h2');
			var $information = $(this).find('.container-lozenge.image').nextAll();
			var $infoContainer = $('<div>').attr('id', $section);
			
			$sectionHeading.clone().appendTo($infoContainer);

			$(this).find('span').replaceWith(function(){
				return $('<a class="container-lozenge image" />').attr('href', '#' + $section).append($(this).contents());
			});

			$information.appendTo($infoContainer);

			$(this).appendTo($choiceHead);
			$infoContainer.appendTo($detail);
		});

		$choice.appendTo($content);
		$detail.appendTo($content);
	},
	uncompress : function() {

	}
};
