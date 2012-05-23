//<script>

elgg.provide('elgg.dotorg');


elgg.dotorg.init = function() {
	//banner slider
	$('#slider').codaSlider({
		autoHeight: false,
		autoSlide: true,
		autoSlideStopWhenClicked: true,
		dynamicArrows: false,
		dynamicTabs: false
	});
}

elgg.register_hook_handler('init', 'system', elgg.dotorg.init)