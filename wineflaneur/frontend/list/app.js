$("li a").click(function(event){
	event.preventDefault();
	var id = $(this).attr("href");
	var divPosition = $(id).offset().top;
	$("html, body").animate({scrollTop: divPosition});
});
//I selected all anchor elements with the li and a tags using the jquerry $ selector
//The this.attr returns the href of the id containg the name when the link is clicked so I stored it as var id
//THen I need to select my var id
//The animate method will 