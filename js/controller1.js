/*  Controlle Page Slide  */
let dom = document;
let body = dom.getElementsByTagName('body')[0];

var arrayImg = makeArrayImg();
let slide = new Slide(arrayImg);

function makeArrayImg() {
  let slide; 

  if ((slide = dom.querySelectorAll(".slidePerugia")).length) {
      resizeGallery(slide[0]);
      let matches = slide[0].querySelectorAll("figure");
      let matchesArray = Array.apply(null, matches);

      return makePair(matchesArray);
  }

  if ((slide = dom.querySelectorAll(".slideValnerina")).length) {
      let matches = slide[0].querySelectorAll("figure");
      let matchesArray = Array.apply(null, matches);

      return matchesArray;
  }

  return [];

}

function makePair(arr) {
    let matchePair = arr.reduce(function(result, value, index, array) {
      if (index % 2 === 0)
          result.push(array.slice(index, index + 2));
        return result;
      }, []);

  return matchePair;
}

function resizeGallery(gallery) {
  if (body.clientWidth < 400 ) {
      gallery.classList.remove("columns-2");
      gallery.classList.add("columns-1");
  }

}


//------------

function cambiaSlide(n) {
  slide.cambiaSlide(n);
}

