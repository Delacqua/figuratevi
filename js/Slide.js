class Slide {

  constructor(arrayImg) {
    this.arrayImg = arrayImg;
    this.doppioArray = Array.isArray(arrayImg[0]);
    this.slideIndex = 1;
    this.mostraSlide(this.slideIndex);
  }

  cambiaSlide(n) {
    this.mostraSlide(this.slideIndex += n);
  }

  mostraSlide(n) {
    let i;

    if (n > this.arrayImg.length) { this.slideIndex = 1}
    if (n < 1) {this.slideIndex = this.arrayImg.length} ;
    for (i = 0; i < this.arrayImg.length; i++) {
      if (this.doppioArray){
        this.arrayImg[i][0].style.display = "none";
        this.arrayImg[i][1].style.display = "none";
      }
      else {
        this.arrayImg[i].style.display = "none";
      }
    }
    
    if (this.doppioArray){
        this.arrayImg[this.slideIndex-1][0].style.display = "block";
        this.arrayImg[this.slideIndex-1][1].style.display = "block";
      }
      else {
        this.arrayImg[this.slideIndex-1].style.display = "block";
      }
  }  
}