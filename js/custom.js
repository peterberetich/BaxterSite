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