<?php
/** 
* Template Name: Katalog
*/
?>
<?php get_header(); ?>
    <!-- ABOUT SECTION-->
    <section class="section">
        <div class="container">
            <div class="catalog">
                <?php $img = get_field('katalog_obrazek', 'option'); ?>
                <img src="<?php echo $img['url']; ?>" alt="">
                <div class="catalog__button-box">
                    <a href="<?php the_field('katalog_link_przycisku', 'option'); ?>" target="_blank" class="button">
                        <?php the_field('katalog_tekst_przycisku', 'option'); ?>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>
<?php get_footer(); ?>