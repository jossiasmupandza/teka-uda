//fixa menu de cardapio
$(window).scroll(function(){
	if($(this).scrollTop() > 740) {
		$(".categoria").css({
			background: "#fff",
			position: "fixed",
			top: "90px",
			height: "140px",
			width: "88%"
		});	
	} else {
		$(".categoria").css({
			position: "static",
			height: "120px",
			width: "100%"
		});	
	}
});