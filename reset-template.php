<?php /* Template Name: Reset - template */ ?>

<?php get_header(); ?>

<img class="upside-part" src="https://ustage.mounti-creative.com/wp-content/uploads/2025/11/upside-part.svg"/>
<div class="us-container">

<div class="us-register">

    <div class="us-register--row">
        <div class="reg-left">
            <a href="<?php echo home_url();?>" class="go-back-btn"><img src="https://ustage.mounti-creative.com/wp-content/uploads/2025/11/backbtn.svg"/>Create Account</a>
            <div class="reg-txt">
                <?php  $title = get_field('reset_desc'); 
                echo $title;
                ?>
                </div>

            <?php echo do_shortcode('[ultimatemember_password]'); ?>
            <div class="reset-txt">Don’t already an account? <a href="<?php echo home_url('/entertainer-registration/'); ?>">Create One</a></div>
        </div>

        <div class="reg-right">
            <?php
                $image_url = get_field('reset_image');

                if ($image_url) : ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="Background Image" />
                <?php endif; ?>
        </div>
    </div>

</div>

                </div>

<?php get_footer(); ?>