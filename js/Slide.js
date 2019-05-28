class Slide {

  constructor(arrayImg) {
    this.arrayImg = arrayImg;
    this.doppioArray = Array.isArray(arrayImg[0]);
    this.slideIndex = 0;
    this.mostraSlide(this.slideIndex);
  }

  cambiaSlide(n) {
    let direction = "slide-left";
    if (n>0) { direction = "slide-left"; }
    if (n<0) { direction = "slide-right"; }
    this.nextSlide(n, direction);
    this.lastDirection = direction;
  }

  nextSlide(n, direction) {

    this.hiddenSlide( this.slideIndex, this.lastDirection);

    this.slideIndex += n;

    if (this.slideIndex > (this.arrayImg.length-1)) { this.slideIndex = 0}
    if (this.slideIndex < 0) {this.slideIndex = (this.arrayImg.length-1)} ;

    this.showSlide( this.slideIndex, direction);
        
  }


  mostraSlide(n) {
    let i;
    
    for (i = 0; i < this.arrayImg.length; i++) {
        this.hiddenSlide( i, "slide-left");
    }

    this.showSlide(n, "slide-left");

  }

  hiddenSlide(index, direction) {
      if (this.doppioArray){
        this.arrayImg[index][0].style.display = "none";
        this.arrayImg[index][0].classList.remove(direction);
        this.arrayImg[index][1].style.display = "none";
        this.arrayImg[index][1].classList.remove(direction);
      }

      else {
        this.arrayImg[index].style.display = "none";
        this.arrayImg[index].classList.remove(direction);
      }

  }

  showSlide(index, direction) {
      if (this.doppioArray){
        this.arrayImg[index][0].style.display = "block";
        this.arrayImg[index][0].classList.add(direction);
        this.arrayImg[index][1].style.display = "block";
        this.arrayImg[index][1].classList.add(direction);
      }

      else {
        this.arrayImg[index].style.display = "block";
        this.arrayImg[this.slideIndex].classList.add(direction);
      }

  }


}