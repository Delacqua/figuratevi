<?php /* Template Name: Slide */ ?>

<?php get_header(); ?>

<?php $home = get_template_directory_uri(); ?>


        <div class="main">

            <?php include_once dirname(__FILE__)."/content/headerLogo.php"?>

            <div class="menuNav">
              <?php include_once dirname(__FILE__)."/content/menuInterno.php"?>
            </div>
            
            <div class="contentSlide">
                <?php include_once dirname(__FILE__)."/content/slide.php"?>
            </div>

        </div>

        <script src="<?= $home.'/js/Slide.js'?>"></script>
        <script src="<?= $home.'/js/controller1.js'?>"></script>


<?php get_footer(); ?>