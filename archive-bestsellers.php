<?php
/** 
* Template Name: Bestsellery
*/
?>
<?php get_header(); ?>

     <!-- BESTSELLERS SECTION -->
     <section class="section m-b-4">
        <img class="section__star" src="<?php echo get_stylesheet_directory_uri() ?>/img/5.png" alt="">
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
    <article class="articles">
        <!--START of wordpress post loop-->
        <?php
            $args = array(
                //'posts_per_page' => 1,
                'post_status' => 'publish',
                'post_type' => 'bestsellers',
                'orderby' => 'post_date',
                'order' => 'ASC'
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
                <a href="<?php the_permalink(); ?>" class="button">zobacz więcej</a>
            </div>    
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <!--THE END of wordpress loop-->
    </article>
    <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>

<?php get_footer(); ?>