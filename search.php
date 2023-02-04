<?php get_header(); ?>

<section class="">
  <!-- Title loop -->
  <?php
      $query_params = getQueryParams();
      if(isset($query_params['search'])) {
      $query_params['post_title_like'] = $query_params['search'];
      unset($query_params['search']);
      }

      $loop = new WP_Query($query_params);
	?>

  <div class="section m-b-4">
    <div class="container">
      <div class="container__header">
        <!-- with posts -->
        <?php if($loop->have_posts()) :?>
        <h2 class="container__header-head">
          Znalezione Wyniki
            <!-- <php the_field('tytul_sekcji_ksiazek', 'option'); ?> -->
        </h2>
        <h4 class="container__header-subHead">
            <!-- <php the_field('podtytul_sekcji_ksiazek', 'option'); ?> -->
            Wyniki wyszukiwania dla:&nbsp;
            </br><span><?php echo get_search_query() ?></span>
        </h4>
        <!-- without posts -->
        <?php else:  ?>
        <h2 class="container__header-head">
          Brak Wyników
          <!-- <php the_field('tytul_sekcji_ksiazek', 'option'); ?> -->
        </h2>
        <h4 class="container__header-subHead">
            <!-- <php the_field('podtytul_sekcji_ksiazek', 'option'); ?> -->
          Spróbuj wpisać inną frazę
        </h4>
        <?php endif; ?>
        <!-- Title loop the end-->
      </div>
    </div>
  </div>

  <!--search php-->
  <?php
      $query_params = getQueryParams();
      if(isset($query_params['search'])) {
      $query_params['post_title_like'] = $query_params['search'];
      unset($query_params['search']);
      }

      $loop = new WP_Query($query_params);
	?>

  <!--posts_row-->
  <article class="articles">

    <?php if($loop->have_posts()) :?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

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

    <!--THE END of wordpress loop-->
    <?php endwhile; ?>
    <?php else:  ?>
    <h4>Niestety nie znaleźliśmy postów<h4>
        <?php endif; ?>
    </article>
  <!--posts_row THE END-->

</section>

<?php get_footer(); ?>