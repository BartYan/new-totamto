<?php
/** 
* Template Name: Materiały Edukacyjne
*/
?>
<?php get_header(); ?>

<!-- EDU SECTION-->
 <section class="section m-b-4">
    <img class="section__star" src="<?php echo get_stylesheet_directory_uri() ?>/img/5.png" alt="">
    <div class="container">
        <div class="container__header">
            <h2 class="container__header-head">
                <?php the_field('tytul_sekcji_edukacyjne'); ?>
            </h2>
            <h4 class="container__header-subHead">
                <?php the_field('podtytul_sekcji_edukacyjne'); ?>
            </h4>
        </div>
    </div>
    <div class="container edu__text">
        <?php the_field('opis_sekcji_edukacyjne'); ?>
    </div>
</section>
<article>
    <?php if( have_rows('materialy_edukacyjne') ): ?>
        <?php while( have_rows('materialy_edukacyjne') ): the_row();  ?>
        <?php $imgEdu = get_sub_field('obrazek_edu'); ?>
        <div class="items">
            <?php if( $imgEdu ): ?>
            <div class="items__edu">
                <img src="<?php echo $imgEdu['url']; ?>" alt="">
            </div>
            <?php endif; ?>
            <div class="items-info items-info-m">
                <div>
                    <?php if( the_sub_field('tekst_edu') ): ?>
                        <?php the_sub_field('tekst_edu'); ?>    
                    <?php endif; ?>
                </div>
                <div>
                    <a href="<?php the_sub_field('link_edu'); ?>" class="button" target="_blank">
                        pobierz materiały
                    </a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</article>
<button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>

<?php get_footer(); ?>