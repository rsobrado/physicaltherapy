// Shorthand for $( document ).ready()
$(function() {


	function initMap() {
	  
	  var map;
	  var uluru = {lat: 28.5578531, lng: -81.5870601};
	  var customIcon = 'http://icons.iconarchive.com/icons/dapino/medical/256/hospital-icon.png';
	  
	  map = new google.maps.Map(document.getElementById('map'), {
	    zoom: 16,
	    center: new google.maps.LatLng(uluru),
	    mapTypeId: 'roadmap'
	  });


	  function addMarker() {
	    var marker = new google.maps.Marker({
	      position: uluru,
	      icon: customIcon,
	      map: map
	    });
	  }

	  addMarker();
	  
	}


	// *****************
	// custom menu *****
	// *****************
    $('.menu-mobile-icon').click(function(){
    	$('.menu-options').toggleClass('closed');
    	$('.mobile-menu').toggleClass('close');
    });

    $( window ).scroll(function() {
    	var scrollTop = $( window ).scrollTop();
    	if(scrollTop >100 ){
    		$('.header').addClass('small');
    	}
    	else{
    		$('.header').removeClass('small');	
    	}
    });

    //******** navigation
    $('.nav-item > home').click(function(){
    	window.scrollTo('#home');
    })
    //******** scroll to
    $('a.home').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#home').offset().top
    	});
    });
    $('a.techniques').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#techniques').offset().top
    	});
    });
    $('a.location').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#location').offset().top
    	});
    });
    $('a.contact-us').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#contact-us').offset().top
    	});
    });

    initMap() ;
});