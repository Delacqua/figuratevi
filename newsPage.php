<?php /* Template Name: News */ ?>

<?php get_header(); ?>

<?php $home = get_template_directory_uri(); ?>


        <div class="main">

            <?php include_once dirname(__FILE__)."/content/headerLogo.php"?>

            <?php include_once dirname(__FILE__)."/content/menuInterno.php"?>

            <div class="content">
                <?php include_once dirname(__FILE__)."/content/news.php"?>
            </div>
            
        </div>


<script type="text/javascript">

    let slideIndex = 1;
    var arrayImg = makeArrayImg();
    mostraSlide(slideIndex);

    

    function cambiaSlide(n) {
      mostraSlide(slideIndex += n);
    }

    function mostraSlide(n) {
      let i;

      if (n > arrayImg.length) { slideIndex = 1}
      if (n < 1) {slideIndex = arrayImg.length} ;
      for (i = 0; i < arrayImg.length; i++) {
        arrayImg[i][0].style.display = "none";
        arrayImg[i][1].style.display = "none";
      }
      
      arrayImg[slideIndex-1][0].style.display = "block";
      arrayImg[slideIndex-1][1].style.display = "block";
    }

    function makeArrayImg() {
      let matches = document.querySelectorAll(".slidePerugia figure");
      let matchesArray = Array.apply(null, matches);

      let matchePair = matchesArray.reduce(function(result, value, index, array) {
        if (index % 2 === 0)
          result.push(array.slice(index, index + 2));
        return result;
      }, []);

      return matchePair;

    }

</script>


<?php get_footer(); ?>