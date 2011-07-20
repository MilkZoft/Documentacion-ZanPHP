$(document).ready(function() {
	/*$('#Sidebar').css('opacity',0.75);
	*/	
	$('.TableContent').toggle(function() {
		$('#Menu').show();
		$('#Sidebar, .TableContent').animate({
			//opacity: 0.25,
			left: '+=230',
		}, 'slow', 'easeOutBounce', function() {
			
		});
	}, function() {
		$('#Menu').hide();
		$('#Sidebar, .TableContent').animate({
			//	opacity: 0.25,
			left: '-=230',
		}, 'slow', 'easeOutBounce', function() {
			
		});
		
	});
});
