<!--FOOTER SECTION-->
  <footer class="footer">
    <div class="footer__box">
    <ul class="footer__nav">
            <li class="footer__nav-link--item item-head">
                <p>KONTAKT</p>
                <!-- KONTAKT -->
            </li>

            <?php 
                if( have_rows('stopka_telefony', 'option') ): 
                    while( have_rows('stopka_telefony', 'option')): the_row();
                    ?>
                        <li class="footer__nav-link--item item-phone">
                            <p class="footer__nav-link--label"><?php the_sub_field('naglowek_telefonu', 'option'); ?></p>
                            <a href="tel:<?php the_sub_field('numer_telefonu', 'option'); ?>">
                            <?php the_sub_field('numer_telefonu', 'option'); ?>
                            </a>
                        </li>
                    <?php
                    endwhile;
                endif;
            ?>
            <?php
                if( have_rows('stopka_maile', 'option') ):
                    while( have_rows('stopka_maile', 'option')): the_row();
                    ?>
                        <li class="footer__nav-link--item item-mail">
                            <p class="footer__nav-link--label"><?php the_sub_field('naglowek_maila', 'option'); ?></p>
                            <a href="mailto:<?php the_sub_field('adres_email', 'option'); ?>">
                            <?php the_sub_field('adres_email', 'option'); ?>
                            <!-- totamto@imprint.pl -->
                            </a>
                        </li>
                    <?php
                    endwhile;
                endif;
            ?>
        </ul>
        <ul class="footer__nav">
            <li class="footer__nav-link--item item-txt">
                <?php the_field('stopka_tekst', 'option'); ?>
            </li>
        </ul>
    </div>
  </footer>

   <!-- slick carousel -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"
       integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <script type="text/javascript" src="<?php echo TOTAMTO_THEME_URL ?>slick-1.8.1/slick/slick.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.min.js"></script>
   
   <!-- BUYBOX WIDGET -->
   <script src="https://buybox.click/js/widget.min.js"></script>

   <!--JS SCRIPTS-->
   <script src="<?php echo TOTAMTO_THEME_URL ?>js/slick-carousel-nav.js"></script>
   <script src="<?php echo TOTAMTO_THEME_URL ?>js/mobile_menu.js"></script>
   <script src="<?php echo TOTAMTO_THEME_URL ?>js/backToTopButton.js"></script>
   <script src="<?php echo TOTAMTO_THEME_URL ?>js/subMenu.js"></script>
   <!-- <script src="js/justify.js"></script> -->

</body>
</html>