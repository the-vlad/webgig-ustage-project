<?php /* Template Name: Page - Privacy Page */ ?>

<?php get_header(); ?>


<section class="privacy-section container">


<?php if( have_rows('privacy') ): ?>
<?php while( have_rows('privacy') ): the_row();  ?>

    <div class="content-wrapper">
        <h2><?php echo get_sub_field('title'); ?></h2>

        <div class="privacy-row">
            <div class="privacy-col">
                <?php echo get_sub_field('col1'); ?>
            </div>

            <div class="privacy-col">
                <?php echo get_sub_field('col2'); ?>
            </div>
        </div>
        
    </div>

<?php endwhile; ?>
<?php endif; ?>

</section>


<?php get_footer(); ?>