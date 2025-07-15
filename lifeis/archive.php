<?php
/*
Template Name:NEWS
*/
?>
<?php get_header(); ?>

	<section class="l-section p-news">
		<div class="p-news__bg"></div>
		<figure class="p-news__logo">
			<img src="<?php echo get_template_directory_uri();?>/assets/img/top/news1.svg" alt="" decoding="async">
		</figure>
		<div class="l-wrapper3">
			<h2 class="p-news__title">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/news/news-title.svg" alt="NEWS/EVENT" decoding="async">
				<span>LIFE IS からのお知らせ</span>
			</h2>
			<h3 class="p-news__title-sub -event">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/news/event-title-sub.svg" alt="EVENT" decoding="async">
			</h3>
			<div class="p-news__body">
				<?php
				    $paged = (int) get_query_var('paged');
				    $args = array(
				    'posts_per_page' => 6,
				    'paged' => $paged,
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'post_type' => 'post',
				    'post_status' => 'publish',
				    'category_name' => 'event',
				    );
				    $the_query = new WP_Query($args);
				    if ( $the_query->have_posts() ) :
				    while ( $the_query->have_posts() ) : $the_query->the_post();
				?>

				<a class="p-news__article" href="<?php the_permalink(); ?>">
					<div class="p-news__image">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail(); ?>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/thumbnail.jpg" alt="">
						<?php endif; ?>
					</div>
					<div class="p-news__text">
						<span class="p-news__date">
							<?php echo esc_html( get_the_date( '20y.m.d') ); ?>
						</span>
						<p class="p-news__title-main">
							<?php echo esc_html( the_title() ); ?>
						</p>
						<div class="p-news__content">
							<?php
								if(mb_strlen($post->post_content,'UTF-8')>40){
									$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 40,'UTF-8'));
									echo $content.'…';
								}else{
									echo str_replace('\n', '', strip_tags($post->post_content));
								}
							?>
						</div>
					</div>
				</a>

				<?php endwhile; endif; ?>
			</div>
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

	</section>

	<section class="l-section p-news">
		<div class="l-wrapper3">
			<h3 class="p-news__title-sub -news">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/news/news-title-sub.svg" alt="NEWS" decoding="async">
			</h3>
			<div class="p-news__body">
				<?php
				    $paged = (int) get_query_var('paged');
				    $args = array(
				    'posts_per_page' => 6,
				    'paged' => $paged,
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'post_type' => 'post',
				    'post_status' => 'publish',
				    'category_name' => 'news',
				    );
				    $the_query = new WP_Query($args);
				    if ( $the_query->have_posts() ) :
				    while ( $the_query->have_posts() ) : $the_query->the_post();
				?>

				<a class="p-news__article" href="<?php the_permalink(); ?>">
					<div class="p-news__image">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail(); ?>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/thumbnail.jpg" alt="">
						<?php endif; ?>
					</div>
					<div class="p-news__text">
						<span class="p-news__date">
							<?php echo esc_html( get_the_date( '20y.m.d') ); ?>
						</span>
						<p class="p-news__title-main">
							<?php echo esc_html( the_title() ); ?>
						</p>
						<div class="p-news__content">
							<?php
								if(mb_strlen($post->post_content,'UTF-8')>40){
									$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 40,'UTF-8'));
									echo $content.'…';
								}else{
									echo str_replace('\n', '', strip_tags($post->post_content));
								}
							?>
						</div>
					</div>
				</a>

				<?php endwhile; endif; ?>
			</div>
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

	</section>

<?php get_footer(); ?>