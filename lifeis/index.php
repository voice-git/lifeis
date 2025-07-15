<?php
/*
Template Name:トップページ
*/
?>
<?php get_header();?>

	<section id="contents" class="l-section p-top__copy">
	    <div id="content01" class="contents">
	        <div id="content01_bg" class="p-copy__bg"></div>
	        <div class="p-copy__view">
				<div class="p-copy__news">
					<?php
					    $paged = (int) get_query_var('paged');
					    $args = array(
					    'posts_per_page' => 1,
					    'paged' => $paged,
					    'orderby' => 'post_date',
					    'order' => 'DESC',
					    'post_type' => 'post',
					    'post_status' => 'publish',
					    'category_name' => ''
					    );
					    $the_query = new WP_Query($args);
					    if ( $the_query->have_posts() ) :
					    while ( $the_query->have_posts() ) : $the_query->the_post();
					?>

					<a class="p-news__article" href="<?php the_permalink(); ?>">
						<div class="p-news__thumb">
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
							<p class="p-news__title u-sp-none992">
	                            <?php
		                            if(mb_strlen($post->post_title, 'UTF-8')>12){
		                            $title= mb_substr($post->post_title, 0, 12, 'UTF-8');
		                            echo $title.'…';
		                            }else{
		                            echo $post->post_title;
		                            }
	                            ?>
							</p>
							<p class="p-news__title u-pc-none992">
	                            <?php
		                            if(mb_strlen($post->post_title, 'UTF-8')>18){
		                            $title= mb_substr($post->post_title, 0, 18, 'UTF-8');
		                            echo $title.'…';
		                            }else{
		                            echo $post->post_title;
		                            }
	                            ?>
							</p>
						</div>
					</a>

					<?php endwhile; endif; ?>
				</div>
	        </div>
	        <div class="p-copy__wrap">
	        	<div class="p-copy__box2">
		            <div class="l-wrapper">
		            	<figure class="p-copy__text">
		            		<img class="u-sp-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/copy1.png" alt="家は人よりエライのか？" decoding="async">
		            		<img class="u-pc-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/sp-copy1.png" alt="家は人よりエライのか？" decoding="async">
		            	</figure>
		            </div>
	        	</div>
		        <div class="p-copy__box -box1">
		            <div class="l-wrapper">
		            	<figure class="p-copy__logo">
		            		<img src="<?php echo get_template_directory_uri();?>/assets/img/top/logo.svg" alt="99% HOUSE 1% POWERED by LIFE IS inc." decoding="async">
		            	</figure>
		            	<figure class="p-copy__text u-sp-none992">
		            		<img src="<?php echo get_template_directory_uri();?>/assets/img/top/copy2.svg" alt="" decoding="async">
		            	</figure>
		            	<div class="u-pc-none992">
		            		<p class="p-copy__text-sp">
		            			家にはカタチがある…その家のカタチに合わせて家族が暮らす…？これってちょっとおかしくないですか？人と家の主従関係が逆じゃないですか。家にはカタチがあるけれど、そのカタチを決めるのは、そこに住む人ですよね。最初にいくつかのカタチがあって、その中から気に入ったものを選ぶ？それを家づくりというのは、ちょっぴり抵抗があります。家づくりは「家を選ぶこと」じゃなくて、「まだカタチになっていないものをつくること」ですから。あなたや家族が家のカタチ（都合）に従う必要はありません。あなたが家のカタチを決めるのです。自由設計って、注文住宅って、そういうことですよね？
		            		</p>
		            	</div>
		            </div>
		        </div>
	        </div>
	    </div><!-- content01 -->

	    <div id="content02" class="contents">
	        <div id="content02_bg" class="p-copy__bg"></div>
	        <div class="p-copy__wrap -wrap2">
		        <div class="p-copy__box">
		            <div class="l-wrapper">
		            	<figure class="p-copy__text2 u-sp-none992">
		            		<img src="<?php echo get_template_directory_uri();?>/assets/img/top/copy3.svg" alt="自由設計は自由ですか？" decoding="async">
		            	</figure>
		            	<div class="u-pc-none992">
		            		<p class="p-copy__text2-sp">
		            			自由設計は、<br>自由ですか？
		            		</p>
		            	</div>
		            	<figure class="p-copy__text u-sp-none992">
		            		<img src="<?php echo get_template_directory_uri();?>/assets/img/top/copy4.svg" alt="" decoding="async">
		            	</figure>
		            	<div class="u-pc-none992">
		            		<p class="p-copy__text-sp">
		            			あなたが、あなたらしく暮らせる家は、世の中のどこにもありません。まだ、カタチになっていない。どこにあるのか？たぶんあなたの想いの奥底にあります。だから自由設計は、はじめにあなたやご家族の想いを引き出すことからスタートするんです。想うことに制約をつけたらいけないです。「家ってこういうものですよね」。そういう遠慮や固定概念もいらないです。自由に、わがままに、想うままに、空想してほしいのです。自由な想いをカタチにするのが自由設計ですから。注文住宅のメーカーは、だから押し付けちゃいけないし、押し売りしてもいけない。あくまでも、はじめにあなたの想いありきです。
		            		</p>
		            	</div>
		            </div>
		        </div>
	        </div>
	    </div><!-- content02 -->

	    <div id="content03" class="contents">
	        <div id="content03_bg" class="p-copy__bg"></div>
	        <div class="p-copy__wrap -wrap2">
		        <div class="p-copy__box">
		            <div class="l-wrapper">
		            	<figure class="p-copy__text3 u-sp-none992">
		            		<img src="<?php echo get_template_directory_uri();?>/assets/img/top/copy5.svg" alt="1棟1棟1%の100%" decoding="async">
		            	</figure>
		            	<div class="u-pc-none992">
		            		<p class="p-copy__text2-sp">
		            			1棟1棟1%の<br>100%
		            		</p>
		            	</div>
		            	<figure class="p-copy__text u-sp-none992">
		            		<img src="<?php echo get_template_directory_uri();?>/assets/img/top/copy6.svg" alt="" decoding="async">
		            	</figure>
		            	<div class="u-pc-none992">
		            		<p class="p-copy__text-sp">
		            			想いは百人百様ですから、家は百棟百様になる。「そうやって１棟１棟ちがう家をつくるのは効率もコスパも悪くてたいへんでしょ？」と心配されますが、はい、そのとおりです。家づくりって、本当に、本当に、たいへんなプロジェクトです。ときどき「打ち合わせは何回できますか？」という質問を受けますが、答えは「何度でも、何度でも」です。「最初のプランはすぐできますか？」との質問には「じっくり１ヶ月以上」とお答えします。たぶん、ふつうじゃないです。でも、やらなくちゃ。あなたの理想の住まいをつくるという一大プロジェクトをあずかるのですから、100％の全力を注がなくちゃです。
		            		</p>
		            	</div>
		            </div>
		        </div>
	        </div>
	    </div><!-- content03 -->

	</section>

	<section class="l-section p-top__cafe">
		<figure class="p-cafe__mainvisual">
			<img class="u-sp-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/cafe1.jpg" alt="99% CAFE" decoding="async">
			<img class="u-pc-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/sp-cafe1.jpg" alt="99% CAFE" decoding="async">
		</figure>
		<div class="p-cafe__body l-wrapper2">
			<div class="u-fade u-fade-up">
				<h2 class="p-cafe__title">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/top/cafe-title.svg" alt="99% CAFE" decoding="async">
					<span>1% POWERED by LIFE IS</span>
				</h2>
				<p class="p-cafe__copy">
					ショールームはいらない。<br>カフェがいる。
				</p>

				<p class="p-cafe__text">
					家の見積もりや相談って堅苦しい？<br>
					いいえ、気軽に何度でも<br class="u-pc-none992">足を運んでいただけるように<br>
					LIFE ISはカフェをオープンしちゃいました。<br>
					お客さまのわがままを聞くための<br class="u-pc-none992">Life is限定カフェです。
				</p>
			</div>
  			<figure class="p-cafe__image -image1 u-fade u-fade-up">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/top/cafe2.jpg" alt="" decoding="async">
			</figure>
			<figure class="p-cafe__image -image2 u-fade u-fade-up">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/top/cafe5.png" alt="" decoding="async">
			</figure>
			<figure class="p-cafe__image -image3 u-fade u-fade-up">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/top/cafe6.png" alt="" decoding="async">
			</figure>
 			<div class="p-cafe__flex">
				<figure class="p-cafe__image -image4 u-fade u-fade-up">
					<img class="u-sp-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/cafe3.jpg" alt="カウンターイメージ" decoding="async">
					<img class="u-pc-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/sp-cafe3.jpg" alt="カウンターイメージ" decoding="async">
				</figure>
				<figure class="p-cafe__image -image5 u-fade u-fade-up">
					<img class="u-sp-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/cafe4.jpg" alt="" decoding="async">
					<img class="u-pc-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/sp-cafe4.jpg" alt="" decoding="async">
				</figure>
			</div>
		</div>
	</section>

	<section class="l-section p-top__life">
		<div class="l-wrapper2">
			<h2 class="p-life__title">
				<img class="p-life__icon" src="<?php echo get_template_directory_uri();?>/assets/img/top/life-icon.svg" alt="99% HOUSE LIFE" decoding="async">
				<img class="u-sp-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/life-title.svg" alt="99% HOUSE LIFE" decoding="async">
				<img class="u-pc-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/sp-life-title.svg" alt="99% HOUSE LIFE" decoding="async">
				<span>99%HOUSEだから実現できたライフスタイル</span>
			</h2>
			<a class="p-life__box" href="<?php echo esc_url( home_url( '/special/' ) ); ?>">
				<figure class="p-life__image">
					<div class="u-sp-none992">
						<img class="u-out" src="<?php echo get_template_directory_uri();?>/assets/img/top/life1.jpg" alt="みんなが集まる家にしたい。" decoding="async">
					</div>
					<div class="u-pc-none992">
						<img class="u-out" src="<?php echo get_template_directory_uri();?>/assets/img/top/sp-life1.jpg" alt="みんなが集まる家にしたい。" decoding="async">
					</div>
				</figure>
				<h3 class="p-life__text">
					<span>99% OWNER’S HOUSE   ＃01</span>
					みんなが<br class="u-pc-none992">集まる家にしたい。
				</h3>
				<figure class="p-life__image-sub -sub1">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/top/life4.png" alt="" decoding="async">
				</figure>
			</a>
			<a class="p-life__box" href="<?php echo esc_url( home_url( '/special02/' ) ); ?>">
				<figure class="p-life__image">
					<div class="u-sp-none992">
						<img class="u-out" src="<?php echo get_template_directory_uri();?>/assets/img/top/life2.jpg" alt="笑顔に包まれる、あったかい家にしたい。" decoding="async">
					</div>
					<div class="u-pc-none992">
						<img class="u-out" src="<?php echo get_template_directory_uri();?>/assets/img/top/sp-life2.jpg" alt="笑顔に包まれる、あったかい家にしたい。" decoding="async">
					</div>
				</figure>
				<h3 class="p-life__text">
					<span>99% OWNER’S HOUSE   #02</span>
					笑顔に包まれる、<br class="u-pc-none992">あったかい家にしたい。
				</h3>
				<figure class="p-life__image-sub -sub2">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/top/life5.png" alt="" decoding="async">
				</figure>
			</a>
			<a class="p-life__box" href="<?php echo esc_url( home_url( '/special03/' ) ); ?>">
				<figure class="p-life__image">
					<div class="u-sp-none992">
						<img class="u-out" src="<?php echo get_template_directory_uri();?>/assets/img/top/life3.jpg" alt="家族時間も趣味も楽しめる家にしたい。" decoding="async">
					</div>
					<div class="u-pc-none992">
						<img class="u-out" src="<?php echo get_template_directory_uri();?>/assets/img/top/sp-life3.jpg" alt="家族時間も趣味も楽しめる家にしたい。" decoding="async">
					</div>
				</figure>
				<h3 class="p-life__text">
					<span>99% OWNER’S HOUSE   #03</span>
					家族時間も趣味も<br class="u-pc-none992">楽しめる家にしたい。
				</h3>
				<figure class="p-life__image-sub -sub3">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/top/life6.png" alt="" decoding="async">
				</figure>
			</a>
		</div>
	</section>

	<section class="l-section p-top__archive">
		<div class="p-archive__bg"></div>
		<div class="l-wrapper2">
			<h2 class="p-archive__title">
				<img class="u-sp-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/archive-title.svg" alt="99% HOUSE ARCHIVE" decoding="async">
				<img class="u-pc-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/sp-archive-title.svg" alt="99% HOUSE ARCHIVE" decoding="async">
				<span>99%のこだわりが詰まったお家たち</span>
			</h2>
			<div class="p-archive__body">
				<?php
				    $paged = (int) get_query_var('paged');
				    $args = array(
				    'posts_per_page' => 3,
				    'paged' => $paged,
				    'orderby' => 'post_date',
				    'post_type' => 'housearchive',
				    'post_status' => 'publish',
				    );
				    $the_query = new WP_Query($args);
				    if ( $the_query->have_posts() ) :
				    while ( $the_query->have_posts() ) : $the_query->the_post();
				?>

				<a class="p-archive__article u-fade u-fade-up" href="<?php the_permalink(); ?>">
					<div class="p-archive__image">
						<?php the_post_thumbnail(); ?>
					</div>
					<span class="p-archive__title-sub">
						99% HOUSE
					</span>
					<p class="p-archive__title-main">
						<?php echo esc_html( the_title() ); ?>
					</p>
				</a>

				<?php endwhile; endif; ?>
			</div>
			<a class="c-link" href="<?php echo esc_url( home_url( '/housearchive/' ) ); ?>">
				施工事例一覧
			</a>
		</div>
	</section>

	<section class="l-section p-top__service">
		<div class="p-service__imageBox-sp u-pc-none992">
			<figure class="p-service__image-sp -sp1">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/top/service2.jpg" alt="" decoding="async">
			</figure>
			<figure class="p-service__image-sp -sp2">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/top/service1.jpg" alt="" decoding="async">
			</figure>
		</div>
		<div class="l-wrapper2">
			<h2 class="p-service__title">
				<img class="u-sp-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/service-title.svg" alt="99% HOUSE SERVICE" decoding="async">
				<img class="u-pc-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/sp-service-title.svg" alt="99% HOUSE SERVICE" decoding="async">
				<span>わたしたちにできる家づくり</span>
			</h2>
			<div class="p-service__body">
				<p class="p-service__text">
					99%HOUSEが完成するまでの流れと<br>
					LIFE IS が提供する2つのサービス<br>
					“リフォーム・新築 ”について<br class="u-pc-none992">詳しくご紹介します。
				</p>
				<a class="c-link" href="<?php echo esc_url( home_url( '/service/' ) ); ?>">
					MORE
				</a>
				<figure class="p-service__image-sub -sub1 u-fade u-fade-up">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/top/service1.jpg" alt="" decoding="async">
				</figure>
				<figure class="p-service__image-sub -sub2">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/top/service2.jpg" alt="" decoding="async">
				</figure>
				<figure class="p-service__image-sub -sub3">
					<img class="u-out" src="<?php echo get_template_directory_uri();?>/assets/img/top/service3.jpg" alt="" decoding="async">
				</figure>
				<figure class="p-service__image-sub -sub4 u-sp-none992">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/top/service4.jpg" alt="" decoding="async">
				</figure>
				<figure class="p-service__image-sub -sub5 u-fade u-fade-up">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/top/service7.png" alt="" decoding="async">
				</figure>
				<figure class="p-service__image-sub -sub4 u-pc-none992">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/top/service5.jpg" alt="" decoding="async">
				</figure>
				<div class="p-service__flex">
					<figure class="p-service__image -image1">
						<img class="u-sp-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/service5.jpg" alt="" decoding="async">
						<img class="u-pc-none992" src="<?php echo get_template_directory_uri();?>/assets/img/top/service4.jpg" alt="" decoding="async">
					</figure>
					<figure class="p-service__image -image2">
						<img class="u-out" src="<?php echo get_template_directory_uri();?>/assets/img/top/service6.jpg" alt="" decoding="async">
					</figure>
				</div>
			</div>
		</div>
	</section>

	<section class="l-section p-top__log">
		<div class="l-wrapper8">
			<h2 class="p-log__title">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/top/log-title.svg" alt="99% LOG" decoding="async">
				<span>99%HOUSEが完成するまで</span>
			</h2>
 			<div class="p-log__body">
				<ul class="p-log__list js-slider c-slider__list">
					<?php
					    $paged = (int) get_query_var('paged');
					    $args = array(
					    'posts_per_page' => 3,
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

					<li class="p-log__item">
						<a class="p-log__article" href="<?php the_permalink(); ?>">
							<div class="p-log__image">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="p-log__text-box">
								<span class="p-log__date">
									<?php echo esc_html( get_the_date( '20y.m.d') ); ?><br>
									<?php echo esc_html( the_title() ); ?>
<!-- 									<?php echo esc_html( the_title() ); ?>　Episode.0<?php echo $counter; ?> -->
								</span>
								<p class="p-log__title-main">
									<?php the_field('log_title'); ?>
								</p>
								<div class="p-log__content">
									<?php
									    $text = mb_substr(get_field('log_excerpt'),0,60,'utf-8');
									    echo $text.'...';
									?>
								</div>
							</div>
						</a>
					</li>

					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
	</section>

	<section class="l-section p-top__news">
		<div class="p-news__bg"></div>
		<figure class="p-news__logo">
			<img src="<?php echo get_template_directory_uri();?>/assets/img/top/news1.svg" alt="" decoding="async">
		</figure>
		<div class="l-wrapper3">
			<div class="p-news__flex">
				<div class="p-news__box">
					<h2 class="p-news__title">
						NEWS
					</h2>
					<div class="p-news__body">
						<?php
						    $paged = (int) get_query_var('paged');
						    $args = array(
						    'posts_per_page' => 3,
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
									<div class="u-sp-none992">
										<?php
											if(mb_strlen($post->post_content,'UTF-8')>60){
												$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 60,'UTF-8'));
												echo $content.'…';
											}else{
												echo str_replace('\n', '', strip_tags($post->post_content));
											}
										?>
									</div>
									<div class="u-pc-none992">
										<?php
											if(mb_strlen($post->post_content,'UTF-8')>22){
												$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 22,'UTF-8'));
												echo $content.'…';
											}else{
												echo str_replace('\n', '', strip_tags($post->post_content));
											}
										?>
									</div>
								</div>
							</div>
						</a>

						<?php endwhile; endif; ?>
					</div>
				</div>
				<div class="p-news__box">
					<h2 class="p-news__title">
						EVENT
					</h2>
					<div class="p-news__body">
						<?php
						    $paged = (int) get_query_var('paged');
						    $args = array(
						    'posts_per_page' => 3,
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
									<div class="u-sp-none992">
										<?php
											if(mb_strlen($post->post_content,'UTF-8')>60){
												$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 60,'UTF-8'));
												echo $content.'…';
											}else{
												echo str_replace('\n', '', strip_tags($post->post_content));
											}
										?>
									</div>
									<div class="u-pc-none992">
										<?php
											if(mb_strlen($post->post_content,'UTF-8')>22){
												$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 22,'UTF-8'));
												echo $content.'…';
											}else{
												echo str_replace('\n', '', strip_tags($post->post_content));
											}
										?>
									</div>
								</div>
							</div>
						</a>

						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="l-section p-top__contact">
		<div class="l-wrapper7">
			<h2 class="p-contact__title">
				あなたのわがままを<br class="u-pc-none992">聞かせてください。
			</h2>
			<div class="p-contact__flex">
				<div class="p-contact__address">
					<p class="p-contact__text">
						CONTACT
					</p>
					<p class="p-contact__text2">
						土地・物件探し、資金面の不安や疑問、<br>
						夢やデザインのこだわりなど、<br>
						理想のライフスタイルを叶える為に、<br>
						まずは何なりとご相談ください。
					</p>
					<div class="u-sp-none992">
						<a class="p-contact__text3" href="tel:0776-97-5150">
							TEL.0776-97-5159
						</a>
						<address>
							〒910-0134　福井県福井市上野本町１丁目４００５
						</address>
						<figure class="p-contact__image">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/top/contact1.png" alt="" decoding="async">
						</figure>
					</div>
				</div>
				<div class="p-contact__form">
					<?php echo do_shortcode('[mwform_formkey key="58"]'); ?>
				</div>
				<div class="u-pc-none992">
					<a class="p-contact__text3" href="tel:0776-97-5150">
						TEL.0776-97-5159
					</a>
					<address>
						〒910-0134　福井県福井市上野本町１丁目４００５
					</address>
					<figure class="p-contact__image">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/top/contact1.png" alt="" decoding="async">
					</figure>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>