<?php
/** 
* Template Name: Blog
*/
?>
<?php get_header(); ?>

    <!-- BLOG SECTION-->
    <section class="section">
        <div class="container">
            <div class="container__header">
                <h2 class="container__header-head">
                    <?php the_field('tytul_sekcji_blog', 'option'); ?> 
                </h2>
                <h4 class="container__header-subHead">
                    <?php the_field('podtytul_sekcji_blog', 'option'); ?>
                </h4>
            </div>

            <!-- show every second post with different styles -->
            <?php query_posts('showposts=0'); ?>        
            <?php 
                $i = 1;
            ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php
                $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                list($url, $width, $height, $is_intermediate) = $thumbnail;
            ?>
            <?php if(($i % 2) == 0) { ?>
            <article class="blog">
                <div class="blog__window blog__right">
                    <div class="blog__window-border blog__right">
                        <div class="blog__window-content">
                            <h3 class="blog__window-head">
                                <?php the_title(); ?>
                            </h3>
                            <h5 class="blog__window-subHead">
                                <?php the_field('podtytul'); ?>
                            </h5>
                            <p class="blog__window-txt">
                                <?php the_excerpt_max_charlength(500); ?>
                            </p>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="blog__button-right button">czytaj dalej...</a>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <div class="blog__img" 
                        style="
                        background-image:url(<?php echo $url; ?>);
                        background-repeat:no-repeat;
                        background-position: center;
                        background-size: cover;">
                    </div>

                    <!-- <php the_post_thumbnail('post-thumbnail', ['class' => 'blog__img']); ?> -->
                </a>
            </article>

            <?php } elseif (($i % 2) !== 0) { ?>

            <article class="blog">
                <div class="blog__window blog__left">
                    <div class="blog__window-border blog__left">
                        <div class="blog__window-content">
                            <h3 class="blog__window-head">
                                <?php the_title(); ?>
                            </h3>
                            <h5 class="blog__window-subHead">
                                <?php the_field('podtytul'); ?>
                            </h5>
                            <p class="blog__window-txt">
                                <?php the_excerpt_max_charlength(500); ?>
                            </p>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="blog__button-left button">czytaj dalej...</a>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <div class="blog__img blog__img-left" 
                        style="
                        background-image:url(<?php echo $url; ?>);
                        background-repeat:no-repeat;
                        background-position: center;
                        background-size: cover;">
                    </div>
                    <!-- <php the_post_thumbnail('post-thumbnail', ['class' => 'blog__img blog__img-left']); ?> -->
                </a>
            </article>
            <?php } ?>
                <?php $i++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>
<?php get_footer(); ?>