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
			$(".home main").bgswitcher({
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
	}).register('screen and (min-width: 1024px)', {
		match : function() {
			
		},
		unmatch : function() {
			
		}
	}).listen(50); // milliseconds


	// non viewport size dependent function calls..

	

});


// METHODS


