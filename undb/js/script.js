$(document).ready(function(){


/* MENU */

// hiding secondary menu from 
if(window.location.pathname == '/undb/'){
	$("#secondary").hide();
}

// showing the right secondary menu for each page
if(window.location.pathname.indexOf('about')){
	$("#secondary .about-menu").removeClass('hide');
}





function activeArrow(elem, left, width, speed){
	$(elem).siblings('.arrow_slider_wrapper').children('.arrow_slider')
		.stop().animate({left:left, width:width}, speed);			
}
$(window).resize(function(){
	$('.menu_arrow').each(function(){
		var left = $(this).children('.active').offset().left - $(this).offset().left;
		var width = $(this).children('.active').children('a').css('width');
		activeArrow(this, left, width, 350);
	});
});




$('.menu_arrow').each(function(){
		// init

		var left = $(this).children('.active').offset().left - $(this).offset().left;
		var width = $(this).children('.active').css('width');
		activeArrow(this, left, width, 50);

		// on click
		$(this).click(function(e){
			// e.preventDefault();
			var left = $(e.target).parent('li').offset().left - $(this).offset().left;
			var width = $(e.target).css('width');
			activeArrow(this, left, width, 350);
		});

		// on hover
		$(this).children('li').hover(function(){
			var left =  $(this).offset().left - $(this).parent().offset().left;
			var width = $(this).css('width');
			activeArrow($(this).parent('ul'), left, width, 350);
		});

		$(this).mouseleave(function(){
			var left = $(this).children('.active').offset().left - $(this).offset().left;
			var width = $(this).children('.active').css('width');
			activeArrow(this, left, width, 350);			
		});

});


/* ////MENU */


/* SLIDER */


  $('#slider').slick({
    
  });


/* ///SLIDER */


/* MAP */

// closing the green popup
$('#map .mapPopup button.closeButton').click(function(){
	$(this).parent('.mapPopup').hide();
});

// selecting a UNDB Network
$('#map .sideSelection ul li').click(function(){
	$('#map .sideSelection ul li.active').removeClass('active');
	$(this).addClass('active');

	var text = $(this).data('text');
	$('.mapPopup').children('p').html(text)
	$('.mapPopup').show();
});

/* ////MAP */


/* ACCORDION */

var s = $(".accordion a[aria-expanded=false]");
s.each(function(){
	var pos = $(this).offset().top+$(this).height(); //offset that you need is actually the div's top offset + it's height
	$(window).scroll(function() {
	    var windowpos = $(window).scrollTop(); //current scroll position of the window
	    var windowheight = $(window).height(); //window height
	    if (windowpos+windowheight>pos) $(this).addClass('stick'); //Currently visible part of the window > greater than div offset + div height, add class
	    else $(this).removeClass('stick');
	});

})


/* ///ACCORDION */


});