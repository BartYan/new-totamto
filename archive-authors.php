<?php
/** 
* Template Name: Autorzy
*/
?>
<?php get_header(); ?>

     <!-- Authors SECTION -->
     <section class="section m-b-4">
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_autorzy', 'option'); ?>
                </h2>
                <h4 class="container__header-subHead">
                    <?php the_field('podtytul_sekcji_autorzy', 'option'); ?>
                </h4>
            </div>
        </div>
    </section>
    <article class="articles articles-authors">
        <!--START of wordpress post loop-->
        <?php
            $args = array(
                //'posts_per_page' => 1,
                'post_status' => 'publish',
                'post_type' => 'authors',
                'orderby' => 'title',
                'order'   => 'ASC',
            );
            query_posts( $args );
            if (have_posts()) :
                while (have_posts()) : the_post();
        ?>
        <div class="items items-authors">
                <div class="items__author">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'author__photo')); ?>
                        <p class="copyrights"><?php the_field('copyrights'); ?></p>
                    </a>
                </div>
                <div class="items-info">
                    <div>
                        <a href="<?php the_permalink(); ?>">
                            <h5><?php the_title(); ?></h5>
                        </a>
                        <p><?php the_field('ksiazki'); ?></p>
                        <!-- <p class="items-authors-desc"><php the_excerpt_max_charlength(250); ?></p> -->
                        <a href="<?php the_permalink(); ?>" class="button">zobacz więcej</a>
                    </div>
                </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>
    </article>
    <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>
<?php get_footer(); ?>