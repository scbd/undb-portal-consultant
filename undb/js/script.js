$(document).ready(function(){


/* MENU */

// hiding secondary menu from home
if(window.location.pathname == '/undb/'){
	$("#secondary").hide();
	$('#main ul.menu_arrow li:eq(0), #siteMenu .dropdown-menu>li:eq(0)').addClass('active');
}

// showing the right secondary menu for each page
// active state for main menu links
if(window.location.pathname.indexOf('about') > 0){
	$("#secondary .about-menu").removeClass('hide');
	$('#main ul.menu_arrow li:eq(1), #siteMenu .dropdown-menu>li:eq(1)').addClass('active');

}
if(window.location.pathname.indexOf('actions') > 0 || window.location.pathname.indexOf('profile') > 0){
	$("#secondary .actions-menu").removeClass('hide');
	$('#main ul.menu_arrow li:eq(2), #siteMenu .dropdown-menu>li:eq(2)').addClass('active');
}
if(window.location.pathname.indexOf('actors') > 0){
	$("#secondary .actors-menu").removeClass('hide');
	$('#main ul.menu_arrow li:eq(3), #siteMenu .dropdown-menu>li:eq(3)').addClass('active');
}
if(window.location.pathname.indexOf('resources') > 0){
	$("#secondary .resources-menu").removeClass('hide');
	$('#main ul.menu_arrow li:eq(4), #siteMenu .dropdown-menu>li:eq(4)').addClass('active');
}

// active state for secondary menu links
var selectedLink = $('#secondary .menu_arrow li a[href="' + window.location.pathname + '"]');
if(selectedLink.length > 0){
	$('#secondary .menu_arrow li a[href="' + window.location.pathname + '"], .dropdown-menu li a[href="' + window.location.pathname + '"]').parent('li').addClass('active');
}
else if(window.location.pathname.indexOf('profile') > 0){
	if(window.location.pathname.indexOf('country') > 0){
		$('#secondary .menu_arrow li a[href="/undb/actions-by-countries.php"], .dropdown-menu li a[href="/undb/actions-by-countries.php"]').parent('li').addClass('active');	
	}
	if(window.location.pathname.indexOf('organization') > 0){
		$('#secondary .menu_arrow li a[href="/undb/actions-by-un-organizations.php"], .dropdown-menu li a[href="/undb/actions-by-countries.php"]').parent('li').addClass('active');	
	}
	if(window.location.pathname.indexOf('event') > 0){
		$('#secondary .menu_arrow li a[href="/undb/actions-calendar.php"], .dropdown-menu li a[href="/undb/actions-by-countries.php"]').parent('li').addClass('active');	
	}	

}
else{
	$("#secondary .arrow_slider_wrapper").hide()
}


// menu arrow indicator animation
function activeArrow(elem, left, width, speed){
	$(elem).siblings('.arrow_slider_wrapper').children('.arrow_slider')
		.stop().animate({left:left, width:width}, speed);			
}
$(window).resize(function(){
	$('.menu_arrow').each(function(){
		if($(this).children('.active').length > 0){
			var left = $(this).children('.active').offset().left - $(this).offset().left;
			var width = $(this).children('.active').children('a').css('width');
			activeArrow(this, left, width, 350);
		}
	});
});


// menu arrow indicator animation
$('.menu_arrow:not(.hide)').each(function(){


		if($(this).children('.active').length > 0){

			// init
			var left = $(this).children('.active').offset().left - $(this).offset().left;
			var width = $(this).children('.active').css('width');
			activeArrow(this, left, width, 50);


			// on click
			$(this).children('li').children('a').click(function(e){
				// e.preventDefault();
				var left = $(this).parent('li').offset().left - $(this).offset().left;
				var width = $(this).css('width');
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
		}

});


// handling sub menus
$("#siteMenu .dropdown-menu>li>button").click(function(e){
	 e.stopPropagation();
	 e.preventDefault();

	if($(this).siblings('ul').length > 0){
		
		if($(this).parent('li').hasClass('open')){
			$(this).parent('li').removeClass('open');
		}
		else{
			$('#siteMenu li.open').removeClass('open');
			$(this).parent('li').addClass('open');
		}
	}
});

// close open sub menus when the dropdown is closed
$('.darkbox').click(function(){
	$('.dropdown-menu li.open').removeClass('open');
});
$('#siteMenu').click(function(){
	$('.dropdown-menu li.open').removeClass('open');
});
// close dropdown & open sub menus on window resize
$(window).resize(function(){
	$('.dropdown').removeClass('open');
	$('.dropdown-menu li.open').removeClass('open');
});



// activate darkbox
$('.dropdown').on('show.bs.dropdown', function () {
  $('.darkbox').addClass('open');
})
// deactivate darkbox
$('.dropdown').on('hide.bs.dropdown', function () {
  $('.darkbox').removeClass('open');
})

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

function accordionFollowers(){
	if($(document).height() - $(window).scrollTop() - $(window).height() > 300){
		$(".accordion a[aria-expanded=true]").parent('.panel').nextAll().addClass('stick');	
	}
	else{
		$('.panel.stick').removeClass('stick');
	}
}

// init
accordionFollowers();


$(".panel").on('click', '> a[aria-expanded=true]', function(){
	$('.panel.stick').removeClass('stick');
});
$(".panel").on('click', '> a[aria-expanded=false]', function(){
	$('.panel.stick').removeClass('stick');
	$(this).parent('.panel').nextAll().addClass('stick');
	$("html, body").animate({ scrollTop: 0 }, 200);
});
$(window).on('scroll', function(){
	accordionFollowers();
});



/* ///ACCORDION */




/* FORMS */

 $('.selectpicker').selectpicker({
 	mobile:false,
 	size:40
 });

/* ///FORMS */





/* CHECKBOX */
	
	$('.checkbox>.box:not(.radio)').click(function(){
		$(this).toggleClass('checked');
	});

	$('.checkbox>.box.radio').click(function(){
		$(this).siblings('.box').removeClass('selected');
		$(this).addClass('selected');
	});
/* ///CHECKBOX */
});