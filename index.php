<?php
/** 
* Template Name: Strona Główna
*/
?>
<?php get_header(); ?>

    <!-- MAIN SLIDER SECTION -->
    <?php if( have_rows('slider', 'option') ): ?>
        <section class="slider">
            <?php while( have_rows('slider', 'option') ): the_row(); 
                $image = get_sub_field('slajd', 'option');
                ?>
                <!-- .slick-slide -->
                <div>
                    <a href="<?php the_sub_field('link', 'option'); ?>">
                        <img class="" src="<?php echo get_sub_field('slajd') ['url'] ?>" alt="slajd">
                    </a>
                </div>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
    <!-- MAIN SLIDER SECTION THE END-->

    <!-- NEWS SECTION -->
    <?php
        $args = array(
            'post_status' => 'publish',
            'post_type' => 'books',
        );
        query_posts( $args );
        if (have_posts()) :
    ?>
    <section class="section">
        <!-- <a href="https://totamto.com.pl/ksiazki/">
            <img class="section__all" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/zobacz_wszystkie_ksiazki.svg" alt="zobacz wszystkie książki">
        </a> -->
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_nowosci', 'option'); ?>
                </h2>
                <?php if( get_field('podtytul_sekcji_nowosci', 'option') ): ?>
                    <h4 class="container__header-subHead">
                        <?php the_field('podtytul_sekcji_ksiazek', 'option'); ?>
                    </h4>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <div class="wrapper-carousel">
        <div class="carousel">
             <!--START of wordpress post loop-->
             <?php 
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'books',
                    'orderby' => 'post_date',
                    'order' => 'ASC'
                );
                query_posts( $args );
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>
            <?php

            $new = get_field('nowosc', get_the_ID());
            if( $new == 'True' ) :
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
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <!--THE END of wordpress loop-->
        </div>
    </div>
    <!-- NEWS SECTION THE END -->

    <!-- BESTSELLERS SECTION -->
    <?php 
        $bests = get_field('pokaz_karuzele_bestsellery', 'option');
        if( $bests == 'True' ) :
    ?>
        
    <?php
        $args = array(
            'post_status' => 'publish',
            'post_type' => 'books',
        );
        query_posts( $args );
        if (have_posts()) :
    ?>
    <section class="section">
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_bestsellery', 'option'); ?>
                </h2>
                <?php if( get_field('podtytul_sekcji_bestsellery', 'option') ): ?>
                    <h4 class="container__header-subHead">
                        <?php the_field('podtytul_sekcji_bestsellery', 'option'); ?>
                    </h4>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <div class="wrapper-carousel">
        <div class="carousel">
             <!--START of wordpress post loop-->
             <?php
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'books',
                    'orderby' => 'post_date',
                    'order' => 'ASC'
                );
                query_posts( $args );
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>
            <?php
            $bests = get_field('bestseller', get_the_ID());
            if( $bests == 'True' ) :
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
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <!--THE END of wordpress loop-->
        </div>
    </div>
    <?php endif; ?>
    <!-- BESTSELLERS SECTION THE END -->
    
    <!-- COMING SOON NEW SECTION -->
    <?php
        $args = array(
            'post_status' => 'publish',
            'post_type' => 'books',
        );
        query_posts( $args );
        if (have_posts()) :
    ?>
    <section class="section">
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_zapowiedzi', 'option'); ?> 
                </h2>
                <?php if( get_field('podtytul_sekcji_zapowiedzi', 'option') ): ?>
                    <h4 class="container__header-subHead">
                        <?php the_field('podtytul_sekcji_zapowiedzi', 'option'); ?> 
                    </h4>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <div class="wrapper-carousel">
        <div class="carousel">
             <!--START of wordpress post loop-->
             <?php 
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'books',
                    'orderby' => 'post_date',
                    'order' => 'ASC'
                );
                query_posts( $args );
                if (have_posts()) :
                    while (have_posts()) : the_post();
            ?>
            <?php
            $soon = get_field('zapowiedz', get_the_ID());
            if( $soon == 'True' ) :
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
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <!--THE END of wordpress loop-->
        </div>
    </div>
    <!-- COMING SOON NEW THE END -->

  <!--BACK TO TOP BUTTON-->
  <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>
<?php get_footer(); ?>