var resizePlayer = function() {
	$("#video").css("right", $("#chatr").width() + "px")

	var vWidth = $("#video").width();

	var vHeight = 9.0/16.0 * vWidth;
	console.log(vHeight);

	if (vHeight > $("#video").height()) {
		vHeight = $("#video").height()
		vWidth = 16.0/9.0 * vHeight;
	}
	$("#video iframe").css("width", vWidth + "px");
	$("#video iframe").css("height", vHeight + "px");

	var padding = ($(document).height() - vHeight)/2;

	$("#video").css("padding-top", padding + "px");

	$("#chat iframe").css("height", $("#chat").height() + "px");
}

$(document).ready(function() {
	$(".starthidden").hide();
    $( "#chatr" ).resizable({
    	handles: "w",
    	minWidth: 200,
    	resize: resizePlayer,
    	start: function() {
    		$(".overlay").show();
    	},
    	stop: function() {
    		$(".overlay").hide();
    		resizePlayer()
    	}
    });
	resizePlayer();
});

$(window).on('resize', resizePlayer);