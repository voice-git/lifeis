<?php
/*
Template Name:フォーム
*/
?>
<?php get_header();?>

	<section class="l-section p-form">
		<div class="l-wrapper4">
			<h2 class="p-form__title -form">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/contact/contact-title.svg" alt="CONTACT" decoding="async">
				<span>お問い合わせ・ご相談・イベントのお申し込み・資料請求はこちらから</span>
			</h2>
			<div class="p-form__body">
				<?php if(have_posts()):?>
				<?php while(have_posts()):the_post();?>

					<?php the_content(); ?>

				<?php
				    endwhile;
				    endif;
				?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>