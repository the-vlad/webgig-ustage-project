<?php /* Template Name: Entertainer registration - template */ ?>

<?php get_header(); ?>

<img class="upside-part" src="http://ustage.local/wp-content/uploads/2025/11/upside-part.svg"/>
<div class="us-container">

<div class="us-register">

    <div class="us-register--row">
        <div class="reg-left">
            <a href="<?php echo home_url();?>" class="go-back-btn"><img src="http://ustage.local/wp-content/uploads/2025/11/backbtn.svg"/>Create Account</a>
            <div class="reg-txt">
                <?php  $title = get_field('ereg_desc'); 
                echo $title;
                ?>
                </div>

            <?php echo do_shortcode('[ultimatemember form_id="70"]'); ?>
            <div class="login-txt">Already have an account? <a href="#">Log In</a></div>
        </div>

        <div class="reg-right">
            <?php
                $image_url = get_field('ereg_image');

                if ($image_url) : ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="Background Image" />
                <?php endif; ?>
        </div>
    </div>

</div>

                </div>

<?php get_footer(); ?>