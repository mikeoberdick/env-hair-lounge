jQuery(function($){

//Push down the footer on short pages
$(document).ready(function() {
	$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');
});

//Add padding to the top of the site to account for the fixed nav
var navHeight = $('#headerTop').outerHeight();

$(window).scroll(function() {    
var scroll = $(window).scrollTop();

    if (scroll >= navHeight) {
        $("#wrapper-navbar").addClass("sticky");
    } else if (scroll < navHeight) {
        $("#wrapper-navbar").removeClass("sticky");
    }
});

//Move the hero content down based on the size of the absolutely positioned header
var headerHeight = $('#wrapper-navbar').height();
$('.hero .inner-container').css('margin-top', (headerHeight/2) + 'px');

//Smooth scroll behavior for jump links
$(".scroll-down").on('click', function(event) {
  var hash = this.hash;
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 500);
    return false;
});

//Dropdown hover on desktop
if ($(window).width() >= 992) {
    $('#main-menu > li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').first().toggleClass('show');
	});
}

//Entire div clickable
$('.product-link').on('click', function(e){
  e.preventDefault();
  window.location.href=$(this).data('link');
});

//Close the mobile nav on link to a page
$('.dropdown-menu a').on('click', function() {
	$('#modalNav').modal('hide');
});

if ( $(window).width() >= 992 ) {
    
    //Set the padding within edge to edge design to simulate an inner container
    var offset = $('#page .container').offset();
    $('.offset-left').css('padding-left', ( Math.ceil(offset.left) + 15 ) + 'px');
    $('.offset-right').css('padding-right', ( Math.ceil(offset.left) + 15 ) + 'px');

    //Get the height of the image within an absolutely positioned div to force the height of the section
  	var imageOneHeight = $('#otherSpecialties #sectionTwo .image-wrapper img').height();
  	$('#otherSpecialties #sectionTwo').css('height', Math.ceil(imageOneHeight) + 'px');
  	$('#otherSpecialties #sectionTwo .image-wrapper').css('position', 'absolute')

    //Force a section to be the width of column plus the gutter (left or right)
    var pushToLeftWidth = $('.push-to-left-edge').outerWidth();
    $('.push-to-left-edge .outer-wrapper').css('width', (Math.ceil(offset.left) - 15 + pushToLeftWidth ) + 'px');

    $('.push-to-right-edge').each(function() {
        var pushToRightWidth = $(this).outerWidth();
        $(this).find('.outer-wrapper').css('width', (Math.ceil(offset.left) - 15 + pushToRightWidth ) + 'px');
    });
}

//Add a container to containerless sections on mobile
if ($(window).width() < 992) {
	$('#lifeStagesLandingPage #hero .content-wrapper').wrap('<div class = "container"><div class = "row"></div></div>');
	$('#lifeStagesLandingPage #hero .video-holder').wrap('<div class = "container"><div class = "row"></div></div>');
	$('#lifeStagesLandingPage #sectionOne .content-wrapper').wrap('<div class = "container"><div class = "row"></div></div>');
}

//Match the height of the icon wrapper on the homepage wine club section to allow for content to be bottom aligned
//$('#homepage #sectionFour .bucket .icon-wrapper').matchHeight();

//end of file
});

//Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});