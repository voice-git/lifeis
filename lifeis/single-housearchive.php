<?php get_header(); ?>

	<section class="l-section p-archive__detail">

        <?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>

            <figure class="p-detail__thumbnail">
                <img src="<?php the_field('archive_mainvisual'); ?>" alt="" decoding="async">
                <img class="logo" src="<?php the_field('archive_logo'); ?>" alt="" decoding="async">
            </figure>
            <div class="l-wrapper2">
                <div class="p-detail__flex">
                    <div class="p-detail__title-box">
                        <span class="p-detail__title-sub">
                            99% HOUSE  NO.0<?php echo get_post_number('housearchive'); ?>
                        </span>
                        <p class="p-detail__title">
                            <?php echo esc_html( the_title() ); ?>
                        </p>
                    </div>
                    <div class="p-detail__text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php if( get_field('archive_image') ):?>
                <div class="p-detail__flex2">
                    <div class="p-detail__table">
                        <?php if(have_rows('table_loop')): ?>
                        <?php while(have_rows('table_loop')): the_row(); ?>
                            <dl>
                                <dt><?php the_sub_field('table_th'); ?></dt>
                                <dd><?php the_sub_field('table_td'); ?></dd>
                            </dl>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <figure class="p-detail__image">
                        <img src="<?php the_field('archive_image'); ?>" alt="" decoding="async">
                    </figure>
                </div>
                <?php endif; ?>
            </div>
            <div class="p-detail__gallery">
                <?php  $images = get_field('gallery');
                  if( $images ):
                ?>
                  <ul>
                <?php foreach( $images as $image ): ?>
                    <li>
                        <img src="<?php echo $image; ?>" alt="" />
                    </li>
                <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <a class="c-link" href="<?php echo esc_url( home_url( '/housearchive/' ) ); ?>">
                施工事例一覧へ戻る

            </a>

        <?php
            endwhile;
            endif;
        ?>

	</section>

<?php get_footer(); ?>