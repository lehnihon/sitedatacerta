<?php
get_header('blog'); ?>

<section id="blog">
	<div class="container">
		<div class="row posts">
			<div class="col-md-8">
				<?php putRevSlider( "banner-blog" ) ?>

				<?php 
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

				$args = array(

					'posts_per_page' => 4,
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'paged' => $paged);
				$query = new WP_Query( $args ); 
				?>	

				<?php if ( $query->have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>

						<?php
							get_template_part( 'template-parts/content', get_post_format() );
						?>

					<?php endwhile; ?>
					<div class="paginacao">
					<?php
					$big = 999999999; // need an unlikely integer
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $query->max_num_pages
					) );
					?>
					</div>
				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- .container -->
</section>

<?php get_footer(); ?>