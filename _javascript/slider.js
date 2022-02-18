var index = 1;
showImage(1);
autoSlide();

//metodo que recebe a posicao
function plusIndex(n) {
	index = index + n;
	showImage(index);
}

//metodo que visualisa imagem da possicao actual
function showImage(n) {
	var x = document.getElementsByClassName("slides");
	
	if(n > x.length) {
		index = 1;
	}
	if(n < 1) {
		index = x.length;
	}
	for(i=0; i<x.length; i++) {
		x[i].style.display = "none";
	}
	x[index-1].style.display = "block";
}

//metodo que faz o autoslide
function autoSlide(){
	var x = document.getElementsByClassName("slides");
	for(i=0; i<x.length; i++) {
		x[i].style.display = "none";
	}
	if(index > x.length) {
		index = 1;
	}
	x[index-1].style.display = "block";
	index++;
	setTimeout(autoSlide, 4000);
}