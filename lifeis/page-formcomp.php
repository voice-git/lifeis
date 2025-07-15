<?php
/*
Template Name:フォーム完了
*/
?>
<?php get_header();?>

	<section class="l-section p-comp">
		<div class="l-wrapper4">
			<h2 class="p-comp__title">
				Thanks!
			</h2>
			<p class="p-comp__text">
				お問い合わせありがとうございます。<br>
				確認のため自動送信完了メールを<br class="u-pc-none992">お送りしております。<br>
				お送りいただきました内容を確認の上、<br>
				折り返しご連絡させていただきます。
			</p>
			<a class="c-link" href="<?php echo esc_url( home_url( '//' ) ); ?>">
				TOPへ戻る
			</a>
		</div>
	</section>

<?php get_footer(); ?>