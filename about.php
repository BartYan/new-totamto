<?php
/** 
* Template Name: O nas
*/
?>
<?php get_header(); ?>
    <!-- ABOUT SECTION-->
    <section class="section">
        <div class="container about">
            <h1 class="about__head">
                <img class="about__head-logo" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/logo_totamto_black.svg" alt="logo totamto">
            </h1>
            <h4 class="about__subHead">
                <?php the_field('naglowek_o_nas', 'option'); ?> 
            </h4>
            <div class="about__opening">
                <?php the_field('akapit_pierwszy_o_nas', 'option'); ?>
            </div>
            <div class="about__txt">
                <?php the_field('tekst_o_nas', 'option'); ?>
            </div>
        </div>
        <img class="about__imgRight" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/czytam_to.svg" alt="">
        <img class="about__imgLeft" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/kolko.svg" alt="">
    </section>
    <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>
    <?php get_footer(); ?>