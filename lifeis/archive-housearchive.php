<?php
/*
Template Name:施工事例一覧
*/
?>
<?php get_header(); ?>

	<section class="l-section p-archive">
		<div class="l-wrapper2">
			<h2 class="c-title p-archive__title">
				<img class="u-sp-none992" src="<?php echo get_template_directory_uri();?>/assets/img/housearchive/title1.svg" alt="99% HOUSE ARCHIVE" decoding="async">
				<img class="u-pc-none992" src="<?php echo get_template_directory_uri();?>/assets/img/housearchive/sp-title1.svg" alt="99% HOUSE ARCHIVE" decoding="async">
				<span>99%のこだわりが詰まったお家たち</span>
			</h2>
			<div class="p-archive__body">
				<?php
				    $paged = (int) get_query_var('paged');
				    $args = array(
				    'posts_per_page' => 6,
				    'paged' => $paged,
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'post_type' => 'housearchive',
				    'post_status' => 'publish',
				    );
				    $the_query = new WP_Query($args);
				    if ( $the_query->have_posts() ) :
				    while ( $the_query->have_posts() ) : $the_query->the_post();
				?>

				<a class="p-archive__article" href="<?php the_permalink(); ?>">
					<div class="p-archive__image">
						<span class="u-out">
							<?php the_post_thumbnail(); ?>
						</span>
					</div>
					<span class="p-archive__title-sub">
						99% HOUSE  NO.0<?php echo get_post_number('housearchive'); ?>
					</span>
					<p class="p-archive__title-main">
						<?php the_title_attribute(); ?>
					</p>
				</a>

				<?php endwhile; endif; ?>
			</div>
		    <div class="c-pagenation">
		        <?php
		            if ($the_query->max_num_pages > 1) {
		              echo paginate_links(array(
		                  'type' => 'list',
		                  'base' => get_pagenum_link(1) . '%_%',
		                  'format' => 'page/%#%/',
		                  'current' => max(1, $paged),
		                  'prev_text'    => '<img src="' . get_template_directory_uri() . '/assets/img/common/arrow3.svg">',
		                  'next_text'    => '<img src="' . get_template_directory_uri() . '/assets/img/common/arrow2.svg">',
		                  'mid_size'    => '2',
		                  'total' => $the_query->max_num_pages
		              ));
		            }
		        ?>
		    </div>
		</div>
	</section>

<?php get_footer(); ?>