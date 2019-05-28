<?php /* Template Name: Page */ ?>

<?php get_header(); ?>

<?php $home = get_template_directory_uri(); ?>


        <div class="main">

            <?php include_once dirname(__FILE__)."/content/headerLogo.php"?>

            <div class="menuNav">
              <?php include_once dirname(__FILE__)."/content/menuInterno.php"?>
            </div>

            <div class="content">
                <?php include_once dirname(__FILE__)."/content/content.php"?>
            </div>

        </div>


<?php get_footer(); ?>