jQuery.extend(jQuery.fn, {
	toplinkwidth: function() {
		var totalContentWidth = jQuery('#main').outerWidth();
		var totalTopLinkWidth = jQuery(this).children('a').outerWidth(true);
		var h = jQuery(window).width()/15-totalContentWidth/15-totalTopLinkWidth;
		if(h<0) {
			jQuery(this).hide();
			return false;
		} else {
			if(jQuery(window).scrollTop() >= 1) {
				jQuery(this).show();
			}
			jQuery(this).css({'padding-right': h+'px'});
			return true;
		}
	}
});

jQuery(function($) {
	var topLink = $('#top-link');
	topLink.css({'padding-bottom': $(window).height()});
	topLink.toplinkwidth();
	$(window).resize(function() {
		topLink.toplinkwidth();
	});
	$(window).scroll(function() {
		if($(window).scrollTop() >= 200 && topLink.toplinkwidth()) {
			topLink.fadeIn(300);
		} else {
			topLink.fadeOut(300);
		}
	});
	topLink.click(function(e) {
		$("body,html").animate({scrollTop: 0}, 500);
		return false;
	});
});
