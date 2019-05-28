let dom = document;
let menu = new Menu();
let slideContent = new SlideContent(dom.getElementById("pagL"),dom.getElementById("pagR"));

function openIndex() {	
	menu.insertMenu(dom.getElementById("menuFooter"));
}

function openContent() {	
	menu.insertMenu(dom.getElementById("menuFooter"));
	slideContent.primoSlide();
}

function nextSlide() {
	slideContent.nextSlide();
}

function backSlide() {
	slideContent.backSlide();
}


// ------------------