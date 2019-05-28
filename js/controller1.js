var arrayImg = makeArrayImg();
let slide = new Slide(arrayImg);

function makeArrayImg() {

  if (document.querySelectorAll(".slidePerugia").length) {
      let matches = document.querySelectorAll(".slidePerugia figure");
      let matchesArray = Array.apply(null, matches);

      return makePair(matchesArray);
  }

  if (document.querySelectorAll(".slideValnerina").length) {
      let matches = document.querySelectorAll(".slideValnerina figure");
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


//------------

function cambiaSlide(n) {
  slide.cambiaSlide(n);
}

