/*
General fixes for older supported IE limitations.

Note: this IE script is loaded via IE 'conditional comments', for versions up to IE9
------------------------------------------------------------------------------------ 
*/

// General usage: add/remove CSS classes (preferable) or properties where CSS expressions used in the main CSS are not understood,
//              : emulate HTML5 element characteristics,
//              : Etc.

// on DOM-ready..
$(function () {
	// IE9 and below..
    if (!document.atob) {
		//alert('IE9 or lower');
		emulatePlaceholder();
	}
	// IE8 and below..
    if (!document.addEventListener) {
		//alert('IE8 or lower');
	}
	// IE7 and below..
	if (!document.querySelector) {
		//alert('IE7 or lower');
	}
});


// emulate HTML5 form input 'placeholder' behaviour..
var emulatePlaceholder = function() {
	$('[placeholder]').focus(function(){
			var input = $(this);
			if (input.val() == input.attr('placeholder')){
				input.val('');
			}
		}).blur(function() {
			var input = $(this);
			if (input.val() == '' || input.val() == input.attr('placeholder')){
				input.val(input.attr('placeholder'));
			}
		}).blur().parents('form').submit(function(){
			$(this).find('[placeholder]').each(function(){
				var input = $(this);
				if (input.val() == input.attr('placeholder')){
				  input.val('');
			}
		})
	});
};
