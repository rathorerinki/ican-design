jQuery(document).ready(function($) {
	"use strict";
    // Sticky Hedaer
    $(window).scroll(function() {
    	if ($(this).scrollTop() > 1) {
    		$('header').addClass("sticky");
    	} else {
    		$('header').removeClass("sticky");
    	}
    });

    // matchHeight
    $('.widget').matchHeight();

    // validate
    $("#contact-form").validate();

    $('#contact-form input[type="text"]').blur(function() {
    	if (!$(this).val()) {
    		$(this).addClass("errorr");
    	} else {
    		$(this).removeClass("errorr");
    	}
    });


    $('.inputValue').on('focus mouseover ', function() {

    	$(this).parent('.ct-field').find('.textUp').addClass('hoveronfield');
    });

    $('.inputValue').on('focusout mouseout ', function() {

    	if (!$(this).is(":focus") || !$(this).is(":mouseover")) {
    		if ($(this).val().trim().length === 0) {
    			$(this).parent('.ct-field').find('.textUp').removeClass('hoveronfield');
    		}
    	}
    });

    $('.inputValue').keyup(function() {

    	if ($(this).val().trim().length === 0) {
    		$(this).parent('.ct-field').find('.textUp').show();
    	} else {
    		$(this).parent('.ct-field').find('.textUp').hide();

    	}
    });
});