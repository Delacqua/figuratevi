<?php /* Template Name: Index */ ?>

<?php get_header(); ?>

<?php $home = get_stylesheet_directory_uri();?>


    <div class="container containerSfondo">
        <div class="middle">
            <div class="sinistra">

                <div class="menuIndex menuIndexS">
                    <a href="http://www.figuratevi.net/wordpress/valnerina/">
                        <img src="<?= $home ?>/img/Mvalnerina.jpg">
                    </a>
                    
                </div>
                
            </div>
            
            <div class="destra">

                <div class="menuIndex menuIndexD">
                    <!--a href="http://www.figuratevi.net/wordpress/perugia/"-->
                    <a href="<?= $home ?>/perugia/">
                        <img src="<?= $home ?>/img/Mperugia.jpg">
                    </a>
                    
                </div>
                
            </div>

            <div class="centro">
                <a href="https://youtu.be/na20hxY9pp8" class="menuVideo" target="_blank">
                    video
                </a>
            </div>

            <div class="footerMenu">
                <nav class="menuFooter" id="menuFooter"></nav>
            </div>
        
        </div>

    </div>
  

<?php get_footer(); ?>