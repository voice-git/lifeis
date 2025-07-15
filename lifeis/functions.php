<?php
/* --------------------------------------------------
  初期設定
-------------------------------------------------- */
function my_setup() {
    // add_theme_support('menus'); // カスタムメニュー
    // add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support( 'post-thumbnails' ); // アイキャッチ
    add_theme_support(
        'html5',
        array( //HTML5でマークアップ
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}

add_action('after_setup_theme', 'my_setup');

// 絵文字を使うためのスクリプトとスタイルを出力しない
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// 絵文字の DNS プリフェッチ用リンクを出力しない（この場合はフィルターフックを利用）
add_filter( 'emoji_svg_url', '__return_false' );

// REST API URL を出力しない
remove_action('wp_head','rest_output_link_wp_head');

// EditURI を出力しない
remove_action( 'wp_head', 'rsd_link' );

// wlwmanifest を出力しない
remove_action( 'wp_head', 'wlwmanifest_link' );

// WordPress のバージョン情報の出力をしない（機能に影響なし）
remove_action( 'wp_head', 'wp_generator' );

// 短縮形 URL を出力をしない
remove_action('wp_head', 'wp_shortlink_wp_head');

// oEmbed 機能に必要なリンクを出力をしない
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');

// feed 出力をしない.
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );

/* --------------------------------------------------
  デフォルト投稿のアーカイブ用スラッグを設定
-------------------------------------------------- */
//例）デフォルト投稿に任意のスラッグ名（news）を設定
function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news';// スラッグ名
    }
    return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/* --------------------------------------------------
  「投稿」の表記変更
-------------------------------------------------- */
function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = 'お知らせ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

/* --------------------------------------------------
  記事の詳細ページで、投稿のいくつ目かを出力
-------------------------------------------------- */
function get_post_number( $post_type = 'post', $op = '<=' ) {
    global $wpdb, $post;
    $post_type = is_array($post_type) ? implode("','", $post_type) : $post_type;
    $number = $wpdb->get_var("
        SELECT COUNT( * )
        FROM $wpdb->posts
        WHERE post_date {$op} '{$post->post_date}'
        AND post_status = 'publish'
        AND post_type = ('{$post_type}')
    ");
    return $number;
}

// srcset無効化
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );

//本体の更新通知を非表示
add_filter("pre_site_transient_update_core", "__return_null");
//プラグインの更新通知を非表示
//add_filter("pre_site_transient_update_plugins", "__return_null");
//テーマの更新通知を非表示
add_filter("pre_site_transient_update_themes", "__return_null");