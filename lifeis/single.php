<?php get_header(); ?>

<section class="l-section p-news__detail">

    <div class="l-wrapper3">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <figure class="p-detail__image">
                    <?php the_post_thumbnail(); ?>
                </figure>
                <span class="p-detail__date">
                    <?php echo esc_html(get_the_date('20y.m.d')); ?>
                </span>
                <p class="p-detail__title">
                    <?php echo esc_html(the_title()); ?>
                </p>
                <div class="p-detail__content">
                    <?php the_content(); ?>
                </div>
                <?php if (get_field('ボタンを表示する')) : ?>
                    <a class="p-detail__link" href="<?php echo esc_url(home_url('/eventform/')); ?>">
                        お申し込み<br><span>FORM</span>
                    </a>
                <?php endif; ?>
                <?php if (get_field('相談会ボタン')) : ?>
                    <a class="p-detail__link" href="<?php echo esc_url(home_url('/talkform/')); ?>">
                        相談会お申し込み<br><span>FORM</span>
                    </a>
                <?php endif; ?>
                <a class="c-link" href="<?php echo esc_url(home_url('/news/')); ?>">
                    一覧へ戻る
                </a>

        <?php
            endwhile;
        endif;
        ?>

    </div>

</section>

<?php get_footer(); ?>