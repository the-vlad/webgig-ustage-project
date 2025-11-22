<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();

        $project_name = get_field('project_name');
        $project_description = get_field('project_description');
        $second_image = get_field('project_second_image');
        $project_url = get_field('project_url');
        $project_video = get_field('project_video');
        $project_progress = get_field('project_progress');
        $project_technologies = get_field('project_technologies');
        $project_identity = get_field('project_identity');
        $project_function = get_field('project_function');
        $project_img2 = get_field('project_third_image');

        ?>
        <div class="single-project ">
            <div class="project-row">
                <div class="project-left">
                    <h1><?php echo esc_html($project_name); ?></h1>
                    <div class="description">
                        <?php echo wp_kses_post($project_description); ?>
                    </div>

                                        <?php
                    $terms = get_the_terms(get_the_ID(), 'project_category');

                    if (!empty($terms) && !is_wp_error($terms)) :
                        echo '<div class="project-category"><i class="fas fa-folder-open"></i><span> Category:</span> ';
                        $term_names = wp_list_pluck($terms, 'name');
                        echo esc_html(implode(', ', $term_names));
                        echo '</div>';
                    endif;
                    ?>

               

                    <div class="project-tech">
                        <i class="fas fa-gear"></i> Technologies :<span> <?php echo wp_kses_post($project_technologies); ?> </span>
                    </div>

                    <?php if ($project_url): ?>
                        <p><a href="<?php echo esc_url($project_url); ?>" target="_blank"><i class="fas fa-globe"></i> View Website</a></p>
                    <?php endif; ?>
                    <div class="project-navigation">
    <?php
    $prev_post = get_adjacent_post(false, '', true, 'project_category');
    $next_post = get_adjacent_post(false, '', false, 'project_category');
    ?>
    <div class="project-nav-row">
    <?php if ($prev_post): ?>
        <a class="prev-project" href="<?php echo get_permalink($prev_post->ID); ?>">
            <i class="fas fa-arrow-left"></i> Previous
        </a>
    <?php endif; ?>

    <?php if ($next_post): ?>
        <a class="next-project" href="<?php echo get_permalink($next_post->ID); ?>">
            Next <i class="fas fa-arrow-right"></i>
        </a>
    <?php endif; ?>
    </div>
</div>
                </div> <!-- .project-left -->

                <div class="project-right">
                    <?php if ($second_image): ?>
                        <img src="<?php echo esc_url($second_image['url']); ?>" alt="<?php echo esc_attr($second_image['alt']); ?>" />
                    <?php endif; ?>
                </div> <!-- .project-right -->
            </div> <!-- .project-row -->






            <section class="mc-reviews">
 <!-- <img src="http://mounti.local/wp-content/uploads/2025/05/create_a_anime_style_comics_vector_style__art_feat_by_mounti1_djpr0z8-removebg-preview-modified.png"/> -->
<div class="trust">TRUST IS</br> EARNED</div>
<div class="mc-container">
<div class="the-intro">
        <h2>Reviews</h2>
    </div>
<div class="mc-row">
    <div class="mc-review-content">

<!-- partial -->

<?php echo do_shortcode('[simple_reviews]');?>
</div>

</div>

</div>

</section>

        </div> <!-- .single-project -->
                    </div>
        <?php

    endwhile;
endif;

get_footer();
