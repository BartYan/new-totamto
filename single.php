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
            <h5 class="blog__window-subHead">
                <?php the_field('podtytul'); ?>
            </h5>
            <div class="single__content-box">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>
<?php get_footer(); ?>