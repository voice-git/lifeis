<?php get_header(); ?>

	<section class="l-section p-log__detail">

        <h2 class="c-title p-log__title u-pc-none992">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/log/log-title.svg" alt="99%LOG" decoding="async">
            <span>99%になるまでのLIFE IS記録</span>
        </h2>

        <div class="p-log__flex">

            <div class="p-log__sidebar">
                <div class="p-sidebar__inner">
                    <figure class="p-sidebar__image">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/log/log-title.svg" alt="99%LOG" decoding="async">
                    </figure>
                    <div class="p-sidebar__pickup">
                        <h3 class="p-pickup__title">
                            PICK UP
                        </h3>
                        <ul class="p-pickup__list">
                            <?php
                                $paged = (int) get_query_var('paged');
                                $args = array(
                                'posts_per_page' => -1,
                                'paged' => $paged,
                                'orderby' => 'post_date',
                                'order' => 'DESC',
                                'post_type' => 'log',
                                'post_status' => 'publish',
                                );
                                $the_query = new WP_Query($args);
                                if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) : $the_query->the_post();  $counter++;
                            ?>
                            <li class="p-pickup__item">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo esc_html( the_title() ); ?>
                                </a>
                            </li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="p-detail__body">

                <h2 class="c-title p-log__title u-sp-none992">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/log/log-title.svg" alt="99%LOG" decoding="async">
                    <span>99%になるまでのLIFE IS記録</span>
                </h2>

                <?php if(have_posts()):?>
                <?php while(have_posts()):the_post();?>
                    <h3 class="p-detail__title">
                        LOG.<?php echo esc_html( the_title() ); ?>
                    </h3>
                <?php
                    endwhile;
                    endif;
                ?>

                <?php if(have_rows('log_loop')): ?>
                <?php while(have_rows('log_loop')): the_row(); ?>
                    <div class="p-detail__box">
                        <div class="p-detail__number">
                            <?php the_sub_field('log_number'); ?>%
                        </div>
                        <div class="p-detail__content">
	                        <?php if(get_sub_field('日付を非表示にする')): else: ?>
                            <span class="p-detail__date">
                            	<?php if(get_sub_field('日付')): the_sub_field('日付'); else: ?>
                                <?php echo esc_html( get_the_date( '20y.m.d') ); ?>
                                <?php endif; ?>
                            </span>
                            <?php endif; ?>
                            <?php the_sub_field('log_contents'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>

        <div class="p-log__archive">
            <div class="l-wrapper3">
                <h3 class="p-archive__title">
                    ARCHIVE
                </h3>
                <ul class="p-archive__list">
                    <?php
                        $paged = (int) get_query_var('paged');
                        $args = array(
                        'posts_per_page' => 9999,
                        'paged' => $paged,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'log',
                        'post_status' => 'publish',
                        );
                        $the_query = new WP_Query($args);
                        if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();  $counter++;
                    ?>
                    <li class="p-archive__item">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo esc_html( the_title() ); ?>
                        </a>
                    </li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>

	</section>

<?php get_footer(); ?>