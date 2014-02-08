/*
 * CSS UI Lightbox v1 (Aug 29 2011)
 * http://css-ui.com
 *
 * Copyright 2011, http://codeeverywhere.ca
 * Licensed under the MIT license.
 *
 */
<<<<<<< HEAD
(function($)
{ 	
	$.uilightbox = function(options)
	{
	    var settings = {
	      'title'	: 'CSS UI Lightbox',
	      'body'	: '<p>This is the CSS UI Lightbox, for help visit <a href="http://css-ui.com">css-ui.com</a></p>',
	      'footer'	: '<a href="#">Close</a>',
	      'triggerClose' : 'a',
	    };
	    	    
	    if(options){ $.extend(settings, options); }
	     
	     $('body').append('<div id="ui-lightbox"><div> \
=======
(function ($) {
    $.uilightbox = function (options) {
        var settings = {
            'title':'CSS UI Lightbox',
            'body':'<p>This is the CSS UI Lightbox, for help visit <a href="http://css-ui.com">css-ui.com</a></p>',
            'footer':'<a href="#">Close</a>',
            'triggerClose':'a',
        };

        if (options) {
            $.extend(settings, options);
        }

        $('body').append('<div id="ui-lightbox"><div> \
>>>>>>> GithubRMS/master
	     <div class="ui-lightbox-head">' + settings.title + '</div> \
	     <div class="ui-lightbox-mid">' + settings.body + '</div> \
	     <div class="ui-lightbox-foot"> ' + settings.footer + '</div> \
	     </div></div>');
<<<<<<< HEAD
				
		$('#ui-lightbox').fadeIn(300, function()
		{
			$('div', this).fadeIn(200);
				return false;
		});
	
		$(settings.triggerClose).click(function()
		{
			$('#ui-lightbox div').fadeOut(250, function()
			{
				$(this).parent().fadeOut(1000, function()
				{
					$(this).remove();
						return false;
				});
			});
		});
	};
=======

        $('#ui-lightbox').fadeIn(300, function () {
            $('div', this).fadeIn(200);
            return false;
        });

        $(settings.triggerClose).click(function () {
            $('#ui-lightbox div').fadeOut(250, function () {
                $(this).parent().fadeOut(1000, function () {
                    $(this).remove();
                    return false;
                });
            });
        });
    };
>>>>>>> GithubRMS/master
})(jQuery);