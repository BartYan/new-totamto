<?php
/** 
* Template Name: 404
*/
?>
<?php get_header(); ?>

  <!-- WELCOME SECTION -->
  <section class="section section_404">
        <div class="container welcome">
            <h2 class=" welcome__head">
                <?php the_field('tytul_404', 'option'); ?>
            </h2>
            <div class=" welcome__box">
                <p class=" welcome__box-txt">
                    <?php the_field('tekst_404', 'option'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- BOOKS SECTION -->
    <section class="section">
        <a href="https://totamto.com.pl/ksiazki/">
            <img class="section__all" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/zobacz_wszystkie_ksiazki.svg" alt="zobacz wszystkie książki">
        </a>
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_ksiazek', 'option'); ?></h2>
                <h4 class="container__header-subHead">
                    <?php the_field('podtytul_sekcji_ksiazek', 'option'); ?>
                </h4>
            </div>
        </div>
    </section>
    <div class="wrapper-carousel">
        <div class="carousel">
             <!--START of wordpress post loop-->
             <?php 
                $args = array(
                    //'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'post_type' => 'books',
                    'orderby' => 'post_date',
                );
                query_posts( $args );
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>
            <!-- .slick-slide -->
            <div class="slick__books">
                <div class="slick__books-imageBox">
                    <a class="thumb-link" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post-thumbnail'); ?>
                    </a>
                    <?php $terms = wp_get_post_terms($post->ID, 'age-type');
                    if ($terms) : ?>
                        <div class="slick__books-star">
                            <img class="section__all" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/gwiazdka.svg" alt="kategoria wiekowa">
                            <?php
                                $out = array();
                                foreach ($terms as $term) {
                                    $out[] = '<a class="'.$term->slug .'" href="' .get_term_link( $term->slug, 'age-type') .'">' .$term->name .'</a>';
                                }
                                echo join( ', ', $out );
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="slick__books-info--center">
                    <div class="slick__books-info">
                        <div>
                            <h5><?php the_title(); ?></h5>
                            <?php the_field('autor'); ?>
                        </div>
                        <div class="slick__books-info--button">
                            <a href="<?php the_permalink(); ?>" class="button">zobacz więcej</a>
                        </div>
                    </div>
                </div>

            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!--THE END of wordpress loop-->
        </div>
    </div>
    <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>
<?php get_footer(); ?>