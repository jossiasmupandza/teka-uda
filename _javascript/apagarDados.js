function apagarDadosJs() {
	$(function(){
		$(".apagar").click(function(){
			var id = $(this).attr("id");
			if(confirm("Do you want to delete this item?")){
				window.location.href = id;
			}
		});
	});
}