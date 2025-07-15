                </article>

                <footer class="l-section l-footer">
                    <?php if ( is_home() || is_front_page() ) : ?>
                        <div class="p-footer -top">
                            <figure class="p-footer__logo">
                                <a href="<?php echo esc_url( home_url( '//' ) ); ?>">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/common/logo.svg" alt="1% ARCHITECT LIFE IS" decoding="async">
                                </a>
                            </figure>
                            <a class="p-footer__sns" href="https://www.instagram.com/lifeis.09/" target="_blank">INSTAGRAM</a>
                            <address>
                                〒910-0134　福井県福井市上野本町１丁目４００５<br>
                                TEL.0776-97-5159
                            </address>
                            <small translate="no">&copy; 2022LIFE IS Inc.</small>
                        </div>
                    <?php else : ?>
                        <div class="p-footer -other">
                            <div class="p-footer__box">
                                <p class="p-footer__text">
                                    CONTACT
                                </p>
                                <p class="p-footer__text2">
                                    あなたのわがままを聞かせてください。<br>まずはお気軽にご相談ください。
                                </p>
                                <a class="p-footer__text3" href="tel:0776-97-5159">
                                    0776-97-5159
                                </a>
                                <p class="p-footer__text4">
                                    受付時間 ： 9:00 ～ 18:00<br>
                                    定休日：年中無休（年末年始を除く）
                                </p>
                                <a class="p-footer__link" href="<?php echo esc_url( home_url( '/form/' ) ); ?>">
                                    お問い合わせ
                                </a>
                            </div>
                            <div class="p-footer__box">
                                <figure class="p-footer__logo">
                                    <a href="<?php echo esc_url( home_url( '//' ) ); ?>">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/common/logo.svg" alt="1% ARCHITECT LIFE IS" decoding="async">
                                    </a>
                                </figure>
                                <address>
                                    〒910-0134<br>福井県福井市上野本町１丁目４００５<br>
                                </address>
                                <a class="p-footer__sns" href="#" target="_blank">INSTAGRAM</a>
                                <small translate="no">&copy; 2022LIFE IS Inc.</small>
                            </div>
                        </div>
                    <?php endif; ?>
                </footer>

            </div>

        </main>

        <?php wp_footer(); ?>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- 住所自動入力 -->
        <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
        <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
        <script>
            var path = "<?php echo get_template_directory_uri();?>";
        </script>
        <?php if ( is_home() || is_front_page() ) : ?>
        <script>
            /* ----------------------------------------
                初回アクセス時のみローディング
              ---------------------------------------- */
            $(function () {
              var webStorage = function () {
                if (sessionStorage.getItem('access')) {
                  /*
                    2回目以降アクセス時の処理
                  */
                  $('#u-loading').hide();
                } else {
                  /*
                    初回アクセス時の処理
                  */
                  sessionStorage.setItem('access', 'true'); // sessionStorageにデータを保存

                    //テキストのカウントアップの設定
                    var bar = new ProgressBar.Line(loading__text, {//id名を指定
                        strokeWidth: 0,//進捗ゲージの太さ
                        duration: 3000,//時間指定(1000＝1秒)
                        trailWidth: 0,//線の太さ
                        text: {//テキストの形状を直接指定
                            style: {//天地中央に配置
                                position:'absolute',
                                left:'50%',
                                top:'50%',
                                padding:'0',
                                margin:'0',
                                transform:'translate(-50%,-50%)',
                                color:'#000',
                            },
                            autoStyleContainer: false //自動付与のスタイルを切る
                        },
                        step: function(state, bar) {
                            bar.setText(Math.round(bar.value() * 99) + '<span></span>'); //テキストの数値
                        }
                    });

                    //アニメーションスタート
                    bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
                        $("#u-loading").delay(4000).fadeOut(800);//アニメーションが終わったら#splashエリアをフェードアウト
                    });

                    setTimeout(function(){
                        $('#loading__text').addClass('is-active');
                        $('.u-loading__logo').addClass('is-active');
                    },4000);
                }
              }
              webStorage();
            });

            /* --------------------------------------------------
              スライダー
            -------------------------------------------------- */
            $(function(){
                $('.js-slider').slick({
                    autoplay: false,
                    // autoplaySpeed: 2000,
                    dots: true,
                    customPaging: function(slider, i) {
                      return $('<div class="c-slide-dots__num">').text('0' + (i+1));
                    },
                    dotsClass: 'c-slide-dots',
                    slidesToShow: 1,
                    arrows: true,
                    prevArrow: '<img class="prev-arrow" src="' + path +'/assets/img/common/arrow3.svg">',
                    nextArrow: '<img class="next-arrow" src="' + path +'/assets/img/common/arrow2.svg">',
                    slidesToScroll: 1
                });
            });
        </script>
        <?php endif; ?>
    </body>
</html>
