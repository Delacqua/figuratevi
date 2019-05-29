<?php if( have_posts() ) {
            while( have_posts() ) {
                the_post();
?>

    <div class="contentBase">

        <?php
            the_content(); 
        ?>

    </div>

<?php
    }
}
?>
