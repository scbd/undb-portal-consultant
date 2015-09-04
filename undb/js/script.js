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

/* ////MENU */


/* SLIDER */


  $('#slider').slick({
    
  });


/* ///SLIDER */


/* MAP */

// closing the green popup
$('#map .mapPopup button.closeButton').click(function(){
	$(this).parent('.mapPopup').remove();
});

// selecting a UNDB Network
$('#map .sideSelection ul li').click(function(){
	$('#map .sideSelection ul li.active').removeClass('active');
	$(this).addClass('active');
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