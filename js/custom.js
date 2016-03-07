$(document).ready(function() {
 
	$('#popoverData').popover();
	$('#popoverData2').popover();
	$('#popoverData3').popover();
	$('#popoverData4').popover();
	$('#popoverData5').popover();
	$('#popoverData6').popover();
	$('#popoverData7').popover();
	$('#popoverData8').popover();
	$('#popoverData9').popover();
	$('#popoverData10').popover();
	$('#popoverData11').popover();
	$('#popoverData12').popover();
	$('#popoverData13').popover();
	$('#popoverData14').popover();
	$('#popoverData15').popover();
	$('#popoverData16').popover();
	$('#popoverData17').popover();
	$('#popoverData18').popover();
	$('#popoverData19').popover();
	$('#popoverData20').popover();
	$('#popoverData21').popover();
	$('#popoverData22').popover();
	$('#popoverData23').popover();
	$('#popoverData24').popover();
	$('#popoverData25').popover();
	$('#popoverData26').popover();
    $('#popoverData27').popover();
    $('#popoverData28').popover();
    $('#popoverData29').popover();
$('#popoverOption').popover({ trigger: "hover" });

$("img.a").hover(
	function() {
		$(this).stop().animate({"opacity": "0"}, "slow");
		},
	function() {
		$(this).stop().animate({"opacity": "1"}, "slow");
	});
	
var video = document.getElementById('video');

    
});

$(".js-include").each(function(){
    var inc=$(this);
    $.get(inc.attr("title"), function(data){
        inc.replaceWith(data);
    });
});

function startSlides(start, end, delay) {
        setTimeout(slideshow(start,start,end, delay), delay);
    }
    function slideshow(frame, start, end, delay) {
        return (function() {
        $('#slideshow' + frame).fadeOut();
        if (frame == end) { frame = start; } else { frame += 1; }
        setTimeout(function(){$('#slideshow' + frame ).fadeIn();}, 850);
        setTimeout(slideshow(frame, start, end, delay), delay + 850);
    })
    }
    // usage: startSlides(first frame, end frame, delay time);
    startSlides(1, 4, 5000);

$('#box').keyup(function(){
   var valThis = $(this).val().toLowerCase();
    if(valThis == ""){
        $('.navList > li').show();
    } else {
        $('.navList > li').each(function(){
            var text = $(this).text().toLowerCase();
            (text.indexOf(valThis) >= 0) ? $(this).show() : $(this).hide();
        });
   };
});

 $(".scroll").click(function(event){
         event.preventDefault();
         //calculate destination place
         var dest=0;
         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 1000,'swing');
     });
     
     /* Open */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

/* Close */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
});

var min_w = 0; // minimum video width allowed
var vid_w_orig;  // original video dimensions
var vid_h_orig;

jQuery(function() { // runs after DOM has loaded
    
    vid_w_orig = parseInt(jQuery('video').attr('width'));
    vid_h_orig = parseInt(jQuery('video').attr('height'));
    
    jQuery(window).resize(function () { resizeToCover(); });
    jQuery(window).trigger('resize');
});

function resizeToCover() {
    
    // set the video viewport to the window size
    jQuery('#video-viewport').width(jQuery(window).width());
    jQuery('#video-viewport').height(jQuery(window).height());

    // use largest scale factor of horizontal/vertical
    var scale_h = jQuery(window).width() / vid_w_orig;
    var scale_v = jQuery(window).height() / vid_h_orig;
    var scale = scale_h > scale_v ? scale_h : scale_v;

    // don't allow scaled width < minimum video width
    if (scale * vid_w_orig < min_w) {scale = min_w / vid_w_orig;};

    // now scale the video
    jQuery('video').width(scale * vid_w_orig);
    jQuery('video').height(scale * vid_h_orig);
    // and center it by scrolling the video viewport
    jQuery('#video-viewport').scrollLeft((jQuery('video').width() - jQuery(window).width()) / 2);
    jQuery('#video-viewport').scrollTop((jQuery('video').height() - jQuery(window).height()) / 2);
};