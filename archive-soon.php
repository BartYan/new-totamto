<?php
/** 
* Template Name: Zapowiedzi
*/
?>
<?php get_header(); ?>

    <!-- COMING SOON SECTION-->
    <section class="section">
        <img class="section__star" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/gwiazdka_juz_wkrotce.svg" alt="">
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

        <article class="articles">
        <!--START of wordpress post loop-->
        <?php 
            $args = array(
                // 'posts_per_page' => 1,
                'post_status' => 'publish',
                'post_type' => 'soon',
                'orderby' => 'post_date',
            );
            query_posts( $args );
            if (have_posts()) :
                while (have_posts()) : the_post();
        ?>
        <div class="articles__item">
            <div class="articles__item-imageBox">
                <a class="articles__item-thumb" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'articles__item-thumb--img']); ?>
                </a>
                <?php $terms = wp_get_post_terms($post->ID, 'age-type');
                if ($terms) : ?>
                    <div class="articles__item-star">
                        <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/gwiazdka.svg" alt="kategoria wiekowa">
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

            <h5 class="articles__item-head"><?php the_title(); ?></h5>
            <p class="articles__item-author"><?php the_field('autor'); ?></p>

            <div class="articles__item-button">
                <a href="<?php the_permalink(); ?>" class="button">zobacz wi??cej</a>
            </div>    
        </div>
        
        <?php endwhile; ?>
        <?php endif; ?>
        <!--THE END of wordpress post loop-->
        </article>
    </section>
    <button id="topBtn" class="topBtn" title="Do g??ry!">&#9650;</button>
<?php get_footer(); ?>