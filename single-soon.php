<?php get_header(); ?>

<?php the_post(); ?>

    <a class="single__back" href="https://totamto.com.pl/blog/">
        powrót
    </a>
    <section class="section single">
        <div class="single__content single-blog">
            <h2 class="single__content-title text-center">
                <?php the_title(); ?>
            </h2>
            <div class="single__content-imageBox">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'articles__item-thumb--img']); ?>
                <?php $terms = wp_get_post_terms($post->ID, 'age-type');
                if ($terms) : ?>
                    <div class="articles__item-age">
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
            <?php if( get_field('podtytul') ): ?>
                <h5 class="blog__window-subHead">
                    <?php the_field('podtytul'); ?>
                </h5>
            <?php endif; ?>
            <div class="single__content-box">
                <?php if( get_field('data-premiery') ): ?>
                    <h4 class="blue-date"><?php the_field('data-premiery'); ?></h4>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>
<?php get_footer(); ?>