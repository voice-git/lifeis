/* --------------------------------------------------
  ハンバーガーメニュー
-------------------------------------------------- */
const buttonHamburger = document.getElementById("js-buttonHamburger");
const globalMenuSp = document.getElementById("p-globalMenuSp");
const body = document.body;

buttonHamburger.addEventListener('click',function() {
    globalMenuSp.classList.toggle('is-active');
    body.classList.toggle('is-drawerActive');
    $('.js-buttonHamburger__text').toggleClass('is-active');
    if(buttonHamburger.getAttribute('aria-expanded') == 'false') {
        buttonHamburger.setAttribute('aria-expanded', 'true');
    } else {
        buttonHamburger.setAttribute('aria-expanded', 'false');
    }
});
/* --------------------------------------------------
  スムーススクロール
-------------------------------------------------- */
$('a[href^="#"]').click(function() {
    // スクロールの速度
    var speed = 400; // ミリ秒で記述
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').stop().animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
});

/* --------------------------------------------------
  375px未満はviewportを固定
-------------------------------------------------- */
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 375
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})();

/* --------------------------------------------------
  フェードインアニメーション
-------------------------------------------------- */
var scrollAnimationElm = document.querySelectorAll('.u-fade');
var scrollAnimationFunc = function() {
  for(var i = 0; i < scrollAnimationElm.length; i++) {
    var triggerMargin = 300;
    var elm = scrollAnimationElm[i];
    var showPos = 0;
    if(elm.dataset.sa_trigger) {
      showPos = document.querySelector(elm.dataset.sa_trigger).getBoundingClientRect().top + triggerMargin;
    } else {
      showPos = elm.getBoundingClientRect().top + triggerMargin;
    }
    if (window.innerHeight > showPos) {
      elm.classList.add('is-active');
    }
  }
}
window.addEventListener('load', scrollAnimationFunc);
window.addEventListener('scroll', scrollAnimationFunc);

var scrollAnimationElm2 = document.querySelectorAll('.u-out');
var scrollAnimationFunc2 = function() {
  for(var i = 0; i < scrollAnimationElm2.length; i++) {
    var triggerMargin = 300;
    var elm = scrollAnimationElm2[i];
    var showPos = 0;
    if(elm.dataset.sa_trigger) {
      showPos = document.querySelector(elm.dataset.sa_trigger).getBoundingClientRect().top + triggerMargin;
    } else {
      showPos = elm.getBoundingClientRect().top + triggerMargin;
    }
    if (window.innerHeight > showPos) {
      elm.classList.add('is-active');
    }
  }
}
window.addEventListener('load', scrollAnimationFunc2);
window.addEventListener('scroll', scrollAnimationFunc2);

$(function(){
    $(window).scroll(function (){
        $('.u-fade2').each(function(){
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > position - windowHeight + 400){
                $(function(){
                    $('.u-fade2').each(function(i){
                      $(this).addClass('is-active');
                    });
                });
            }
        });
    });
});

/* --------------------------------------------------
  スクロールに連動して背景画像が切り替え
-------------------------------------------------- */
$(function(){
    $('.contents').each(function(i, elem){
        var contentsPOS = $(elem).offset().top;
        $(window).on('load scroll resize', function(){
            var winHeight = $(window).height();
            var scrollTop = $(window).scrollTop();
            var showClass = 'show';
            var timing = 500; // 100pxコンテンツが見えたら次のif文がtrue
            if (scrollTop >= contentsPOS - winHeight + timing){
              $(elem).addClass(showClass);
            } else {
              $(elem).removeClass(showClass);
            }
        });
    });
});

/* --------------------------------------------------
  スクロールに連動して背景色が切り替え
-------------------------------------------------- */
$(function(){
  var secArr = new Array();
  var current = -1;
  /* ここに背景色を順に記述する*/
  var secColor = new Array('#fff','#fff','#E8E6E5','#e2dfcf','#fff','#E8E6E5','#e2dfcf','#fff','#E8E6E5','#e2dfcf','#fff','#fff');
  $('.changeContents').each(function (i) {
      secArr[i] = $(this).offset().top;
  });
  function chengeBG(secNum) {
      if (secNum != current) {
          current = secNum;
          $('body').css({backgroundColor: secColor[current]});
      }
  }
  $(window).on('load scroll resize',function(){
      for (var i = secArr.length-1; i>=0; i--) {
          if ($(window).scrollTop() > secArr[i]){
              chengeBG(i);
              break;
          }
      }
  });
});

/* --------------------------------------------------
  郵便番号で住所自動入力
-------------------------------------------------- */
$(function () {
  $(".zip-button").click(function () {
    AjaxZip3.zip2addr("zip", "", "", "address");
  });
});


/* --------------------------------------------------
  MW WP Form 確認画面 選択した項目だけを表示
-------------------------------------------------- */
jQuery(function ($) {
  const area = $(".mw_wp_form_confirm").html();
  const settings = {
    day1: 'input[name="your_radio"]',
    day2: 'input[name="your_radio2"]',
  };
  checkbox_change = function () {
    if (area) {
      $.each(settings, function (key, value) {
        if ($(value).length === 0) {
          $("#" + key).hide();
        }
      });
    }
  };
  checkbox_change();
});

/* --------------------------------------------------
  タブ切り替え
-------------------------------------------------- */
jQuery(function($){
    $('.js-tab').click(function(){
        // クリックした要素の先祖要素の中で、classの値がgroupの要素を取得
        const group = $(this).parents('.js-tab-menu');
        group.find('.is-active').removeClass('is-active');
        $(this).addClass('is-active');
        group.find('.is-show').removeClass('is-show');
        // クリックしたタブからインデックス番号を取得
        const index = $(this).index();
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        group.find(".js-panel").eq(index).addClass('is-show');
    });
});

/* --------------------------------------------------
  アコーディオン
-------------------------------------------------- */
$(function(){
    $('.js-toggle-menu').click(function(){
        $(this).toggleClass('selected');
        $(this).next().slideToggle();
    });
});

/* --------------------------------------------------
  アドレスバーの高さを考慮
-------------------------------------------------- */
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);


