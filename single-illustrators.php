<?php get_header(); ?>

<?php the_post(); ?>
        <a class="single__back" href="https://totamto.com.pl/ilustratorzy/">
            powrót
        </a>
        <article class="single__authors">
            <div class="items items-start">
                <div class="items__author">
                    <span>
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'author__photo illustrator__photo')); ?>
                    <p class="copyrights"><?php the_field('copyrights'); ?></p>
                    </span>
                </div>
                <div class="items-info">
                    <div>
                        <h5><?php the_title(); ?></h5>
                        <p><?php the_field('ksiazki'); ?></p>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </article>      
    <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>

<?php get_footer(); ?>