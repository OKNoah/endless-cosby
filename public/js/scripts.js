// detects scrolling and if it's the bottom

$(window).scroll(function() {
	if((window.innerHeight + window.scrollY) == $(document).height() + 10) {
			getRow();
	};
});

// calls /row with ajaxs and prints html result

function getRow() {
		$.ajax({
		url: 'row',
		success: function(html) {
			$('.row:last-child').after(html);
			console.log('row added');
		}
	})
}