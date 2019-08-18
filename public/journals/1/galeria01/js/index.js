$(document).ready(function(){
	$('.items, .closeX').click(function(e){
		e.preventDefault();
		$('.lightbox').toggleClass('show');
	});
});
$('.carousel').carousel({
    interval: 600000
}); 