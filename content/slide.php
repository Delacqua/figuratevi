<?php if( have_posts() ) {
            while( have_posts() ) {
                the_post();
?>

    <div class="slideContainer">

        <?php
            the_content();
        ?>

        <div class="buttonL noselect">
            <div class="seta" onclick="cambiaSlide(-1)"><</div>
        </div>

        <div class="buttonR noselect">
            <div class="seta" onclick="cambiaSlide(+1)">></div>
        </div>        

    </div>


<?php
    }
}
?>