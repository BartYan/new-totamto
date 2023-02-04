<?php
/** 
* Template Name: Kategorie
*/
?>
<?php get_header(); ?>

<section class="section m-b-4">
    <div class="container">
        <div class="container__header">
            <h2 class="container__header-head">
                kategoria wiekowa <?php echo single_cat_title('', false); ?>
            </h2>
        </div>
    </div>
</section>

<article class="articles">
        <!--START of wordpress post loop-->
        <?php
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










    <!-- <?php
        $cat_args = array(
          'exclude' => array(1),
          'taxonomy' => 'age-type',
          'option_all' => 'All'
        );
        $categories = get_categories($cat_args);
        foreach($categories as $cat) : ?>
        <li class="filter_item">
          <button class="filter_item-link" 
            data-category="<?= $cat->term_id; ?>">
            <?= $cat->name; ?>
          </button>
        </li>
      <?php endforeach; ?> -->
 
<?php get_footer(); ?>