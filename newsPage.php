<?php /* Template Name: News */ ?>

<?php get_header(); ?>

<?php $home = get_template_directory_uri(); ?>


        <div class="main">

            <?php include_once dirname(__FILE__)."/content/headerLogo.php"?>

            <div class="menuNav">
              <?php include_once dirname(__FILE__)."/content/menuInterno.php"?>
            </div>

            <div class="content">
                <?php include_once dirname(__FILE__)."/content/news.php"?>
            </div>
            
        </div>


<?php get_footer(); ?>