// fills the screen with cosbys before any scrolling. based on height of window and the .container element.

var originalHeight = $(window).height();

// calls /row with ajaxs and prints html result

function getRow() {
	$.ajax({
	url: 'row',
	success: function(html) {
		$('.row:last-child').after(html);
		// checkHeight();
	}
	})
}

// checks height of 

function checkHeight() {
	if($('.container').height() < originalHeight) {
		getRow();
	};
}

// runs checkHeight after document load

$(document).ready(function() {
	checkHeight();
})

// detects scrolling and if it's at the bottom.

$(window).scroll(function() {
	if((window.innerHeight + window.scrollY) == $(document).height()) {
			getRow();
	};
});