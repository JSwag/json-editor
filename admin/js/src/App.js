
var JSONEditor = window.JSONEditor || {};

JSONEditor.init = function(){

	this.initNav();

};

JSONEditor.initNav = function() {

	$(".nav a").click(function(e){
		e.preventDefault();
		var $this = $(this);
		$(".nav .active").removeClass("active");
		$this.parent().addClass("active");

		JSONEditor.buildAdmin( $this.data("id") );
	});

};

JSONEditor.buildAdmin = function( index ) {
	$.post( "scripts/form.php", { "id" : index }, function(html){
		$("#content").html(html);
		JSONEditor.prepareForm();
		JSONEditor.initAccordion();
	});
};

JSONEditor.prepareForm = function() {
	console.log("prepareForm");
};

JSONEditor.initAccordion = function(){
	$(".form-container h3").click(function(e){
		e.preventDefault();
		console.log( $(this).parent().children(".form-item") );
		$(this).parent().children(".form-item").toggleClass("closed");
	});
};

$(document).ready(function(){
	JSONEditor.init();
});