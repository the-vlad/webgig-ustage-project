<footer class="footer">


            <div class="us-container grid-bg2"> <!-- .us-container.grid-bg2 START -->
          
                  <div class="footer-content"> <!-- .footer-content START -->
                        <a href="<?php echo home_url();?>">
                              <img alt="ustage-footer-logo" src="<?php echo get_field('footer_logo', 'option'); ?>" />
                        </a>
                        <?php echo get_field('footer_description', 'option'); ?>
                  </div> <!-- .footer-content END -->


                  <?php if ( have_rows('social', 'option') ) : ?>
                        <ul class="social-list"> <!-- .social-list START -->
                        
                              <?php while ( have_rows('social', 'option') ) : the_row(); 
                                    $icon = get_sub_field('social_icon'); 
                                    $url  = get_sub_field('social_url');
                              ?>
                                    <li>
                                          <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener">
                                                <?php if ($icon): ?>
                                                      <img src="<?php echo esc_url($icon); ?>" alt="" />
                                                <?php endif; ?>
                                          </a>
                                    </li>
                              <?php endwhile; ?>
                        
                        </ul> <!-- .social-list END -->
                  <?php endif; ?>


                  <div class="footer-copyright"> <!-- .footer-copyright START -->
                        <?php echo get_field('footer_copyright', 'option');?>
                  </div> <!-- .footer-copyright END -->


                    <div class="foot-row"> <!-- .foot-row START -->

                  <div class="foot-col foot-col1"> <!-- .foot-col1 START -->

                        <?php
                        wp_nav_menu([
                              'theme_location' => 'footer_menu_1',
                              'menu_class'     => 'footer-menu footer-menu-1',
                              'container'      => 'nav',
                              'container_class'=> 'footer-nav-1'
                        ]);
                        ?>

                  </div> <!-- .foot-col1 END -->


                  <div class="foot-col foot-col2"> <!-- .foot-col2 START -->

                        <?php
                        wp_nav_menu([
                              'theme_location' => 'footer_menu_2',
                              'menu_class'     => 'footer-menu footer-menu-2',
                              'container'      => 'nav',
                              'container_class'=> 'footer-nav-2'
                        ]);
                        ?>

                  </div> <!-- .foot-col2 END -->

            </div> <!-- .foot-row END -->

            </div> <!-- .us-container.grid-bg2 END -->


          


</footer>


<script>
jQuery(document).ready(function($) {

    const plusIcon = "http://ustage.local/wp-content/uploads/2025/11/ic_round-plus.svg";

    $('.faq-answer').hide(); // closed by default

    $('.faq-question').on('click', function () {

        let item = $(this).closest('.faq-item');
        let answer = item.find('.faq-answer');
        let icon = $(this).find('.faq-icon');

        // If already open → close it
        if (item.hasClass('open')) {
            answer.slideUp(200);
            item.removeClass('open');
            icon.html('<img class="faq-icon-img" src="'+plusIcon+'" />');
        } else {
            // Close all others
            $('.faq-item.open .faq-answer').slideUp(200);
            $('.faq-item.open .faq-icon').html('<img class="faq-icon-img" src="'+plusIcon+'" />');
            $('.faq-item.open').removeClass('open');

            // Open this one
            answer.slideDown(200);
            item.addClass('open');
            icon.html('–'); // <-- text minus
        }
    });

});



jQuery(document).ready(function($){

    // Eye icon URL
    var eyeOpen  = 'http://ustage.local/wp-content/uploads/2025/11/solar_eye-outline.svg';

    $('.um-field-password input[type="password"], .um-field-user_password input[type="password"]').each(function(){

        var $field = $(this);

        // Make wrapper relative
        $field.parent().css('position', 'relative');

        // Create toggle element (start with eye icon)
        var $toggle = $('<span class="um-eye-toggle"><img src="'+eyeOpen+'" alt="toggle"></span>');
        $field.after($toggle);

        // Click handler
        $toggle.on('click', function(){

            if ($field.attr('type') === 'password') {
                $field.attr('type', 'text');
                // switch to text "hide"
                $toggle.html('hide');
            } else {
                $field.attr('type', 'password');
                // switch back to eye icon
                $toggle.html('<img src="'+eyeOpen+'" alt="toggle">');
            }

        });

    });

});
</script>



<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
