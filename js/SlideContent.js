
class SlideContent {

	constructor(elementSlideL,elementSlideR) {
		this.slidePerugia = ["umbria.png","umbria2.png","ilfestival.png","ilfestival2.png","umbriabambini.png","umbriabambini2.png", "grandefesta.png", "grandefesta2.png", "diritti.png", "diritti2.png", "edizione.png", "edizione2.png", "spettacoli.png", "spettacoli2.png", "burattini.png", "burattini2.png", "ospiti.png", "ospiti2.png", "importante.png", "importante2.png", "novita.png", "novita2.png"];
		this.slideCartellaImg = 'img/programmaP/';
		this.slideN = 0;
		this.elementSlideL = elementSlideL;
		this.elementSlideR = elementSlideR;
	}	
	
	aggiungeCartella(nome){
		return this.slideCartellaImg + nome;
	}

	cambiaSlide(numero) {
		this.elementSlideL.innerHTML = '<img src="'+ this.aggiungeCartella(this.slidePerugia[numero]) +'">';
		this.elementSlideR.innerHTML =  '<img src="'+ this.aggiungeCartella(this.slidePerugia[numero+1]) +'">';
	}

	primoSlide() {
		this.cambiaSlide(0);
	}

	nextSlide() {
		this.slideN = this.slideN+2;
		if (this.slidePerugia.length <= this.slideN) { this.slideN = 0; }

		this.cambiaSlide(this.slideN);
	}

	backSlide() {
		this.slideN = this.slideN-2;
		if (this.slideN <= 0) { this.slideN = this.slidePerugia.length - 2; }

		this.cambiaSlide(this.slideN);
	}

}