<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package starter
 */

get_header();
?>

<main id="primary" class="site-main">
<div class="mc-container">
	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <div class="pre-enter">-Blog-</div>
			<div class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="entry-meta">
					<span class="posted-on"><?php echo get_the_date(); ?></span>
					<span class="byline"> by <?php the_author(); ?></span>
				</div>
			</div>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail">
					<?php the_post_thumbnail('large'); ?>
				</div>
			<?php endif; ?>

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starter' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>

		</article>

	

		<!-- Recommended Posts -->
		<div class="recommended-posts" style="margin-top:60px;">
			<h2 style="margin-bottom:20px; text-align:center;color:white;">Related Posts</h2>
			<div class="blog-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(350px,1fr));gap:30px;">
				<?php
				$recent_posts = new WP_Query( array(
					'post_type'      => 'post',
					'posts_per_page' => 2,
					'post__not_in'   => array( get_the_ID() ), // exclude current post
				) );

				if ( $recent_posts->have_posts() ) :
					while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
						
						<div class="blog-card" style="border-radius:12px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.1);background:#fff;transition:all 0.3s;">
							
							<?php if(has_post_thumbnail()): ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('large', ['style'=>'width:100%;height:220px;object-fit:cover;']); ?>
								</a>
							<?php endif; ?>
							
							<div class="blog-content" style="padding:20px;">
								
								<div class="cat-intro" style="font-size:0.85rem;color:#888;margin-bottom:5px;">
									<?php
									$categories = get_the_category();
									if ( ! empty( $categories ) ) {
										$cat_names = wp_list_pluck( $categories, 'name' ); // extract just the names
										echo esc_html( implode( ', ', $cat_names ) );
									}
									?>
								</div>
								
								<h2 style="font-size:1.4rem;margin:10px 0;">
									<a href="<?php the_permalink(); ?>" style="text-decoration:none;color:#222;"><?php the_title(); ?></a>
								</h2>
								
								<p style="font-size:0.95rem;color:#555;line-height:1.6;"><?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></p>
								
								<div style="font-size:0.8rem;color:#999;margin:10px 0;">
									<?php echo get_the_date(); ?>
								</div>
								
								<a href="<?php the_permalink(); ?>" class="read-more" style="display:inline-block;padding:10px 20px;background:#0073aa;color:#fff;border-radius:6px;text-decoration:none;font-size:0.9rem;transition:background 0.3s;">
									Read More
								</a>
								
							</div>
						</div>
					
					<?php endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
		</div>

	<?php endwhile; // End of the loop. ?>
</div>
</main><!-- #main -->

<?php
get_footer();
