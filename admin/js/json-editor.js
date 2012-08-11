
$(".nav").delegate("a", "click", function(e){
	e.preventDefault();

	var jsonURL = $(this).attr("href");
	$.getJSON(jsonURL, function(data) {
		var parent = $('<div class="parent"></div>');
		console.log( _loopThrough(parent, data) );
	});
});

function _loopThrough ( parent, value ) {
	$.each(value, function(key, val) {
		if ( typeof val === "object" ) {
			_loopThrough(parent, val);
		} else {
			var div = $('<div>' + val + '</div>');
			parent.append(div);
			parent = div;
		}
	});
	return parent;
}