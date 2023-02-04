<?php get_header(); ?>

<?php the_post(); ?>

    <a class="single__back" href="https://totamto.com.pl/ksiazki/">
        powrót
    </a>

    <section class="section single">
        <div class="single__top">
            <!-- SLICK GALLERY carousel & lightbox -->
            <div class="wrapper-carousel">
                <div class="carousel" id="caro">
                    <!-- ACF gallery - reapet every slick__books box for every image added -->
                    <?php 
                        if( have_rows('galeria') ):
                            while( have_rows('galeria')): the_row();
                            ?>

                                <div class="slick__books">
                                    <img src="<?php echo get_sub_field('obrazek') ['url'] ?>" alt="">
                                </div>

                            <?php
                            endwhile;
                        endif;
                    ?>
                    
                </div>
                <div class="carousel-nav">
                    <!-- ACF gallery - reapet every slick__books box for every image added -->
                    <?php 
                        if( have_rows('galeria') ):
                            while( have_rows('galeria')): the_row();
                            ?>

                                <div class="slick__books">
                                    <img src="<?php echo get_sub_field('obrazek') ['url'] ?>" alt="">
                                </div>

                            <?php
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>
            
            <div class="single__info">
                <h5><?php the_title(); ?></h5>

                <?php the_field('informacje_o_ksiazce'); ?>
                <?php if( get_field('data_premiery') ):?>
                    <h4>Premiera: <?php the_field('data_premiery'); ?></h4>
                <?php endif; ?>
                <div class="items__stars">
                    <!-- <php if( get_field('bestseller') ): ?>
                    <img class="bestseller" src="<php echo get_field('bestseller') ['url'] ?>" alt="bestseller">
                    <php endif; ?>
                    <php if( get_field('nowosc') ): ?>
                        <img class="new" src="<php echo get_field('nowosc') ['url'] ?>" alt="nowość">
                    <php endif; ?> -->

                    <?php $terms = wp_get_post_terms($post->ID, 'age-type');
                    if ($terms) : ?>
                        <div class="age-item-star">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/gwiazdka.svg" alt="kategoria wiekowa">
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
                
            </div>
        </div>
        <!-- BUYBOX WIDGET -->
        <?php if( get_field('buybox-id') ): ?>
            <div class="single__buy">
                <div class="single__buy-button">
                    <span href="/" class="button">kup książkę</span>
                </div>
                
                <div class="single__buy-box">
                    <!-- <div class="bb-widget" id="buybox-2srg" data-bb-id="15996" data-bb-oid="14895589"></div> -->
                    <div 
                        class="bb-widget" 
                        id="<?php the_field('buybox-id'); ?>" 
                        data-bb-id="<?php the_field('data-bb-id'); ?>" 
                        data-bb-oid="<?php the_field('data-bb-oid'); ?>">
                    </div>
                </div>
                
            </div>
        <?php endif; ?>

        <div class="single__content single__content-padd">
            <?php the_content(); ?>
        </div>

    </section>
    <button id="topBtn" class="topBtn" title="Do góry!">&#9650;</button>
<?php get_footer('book'); ?>