<?php
/*
Plugin Name: WP Hyper Response
Plugin URI: https://stocker.jp/diary/wp-hyper-response/
Description: WordPressサイト及び管理画面のレスポンスを向上させるプラグインです。
Version: 1.3
Author: なつき(@Stocker_jp)
Author URI: https://stocker.jp/
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly;

// admin_head（管理画面のヘッダ）で wp_hyper_response()関数を実行（優先度 9999=最低）
add_action ( 'admin_head', 'wp_hyper_response', 9999 );

// wp_head（サイトのヘッダ）で wp_hyper_response()関数を実行（優先度 9999=最低）
add_action ( 'wp_head', 'wp_hyper_response', 9999 );

// get_header 現在のテーマディレクトリのヘッダーテンプレートファイルを読み込む時
add_action ( 'get_header', 'wp_hyper_response', 9999 );

// the_content (記事の内容を出力) で wp_hyper_response()関数を実行（優先度 9999=最低）
$objPost = get_post();
$accessPost = apply_filters( 'the_content', $objPost->post_content );
add_action ( $accessPost, 'wp_hyper_response', 9999 );

// wp_hyper_response関数
function wp_hyper_response() {
     // Fires just before PHP shuts down execution.
     // https://github.com/WordPress/WordPress/blob/18a62537472eb3d1185583449bc53a81761dda31/wp-includes/load.php#L604
     do_action(‘shutdown’);
     // make sure output buffering is off before we start it
     // this will ensure same effect whether or not ob is enabled already
     while( ob_get_level() ) {
            ob_end_flush();
        }
        // start output buffering
        if( !ob_get_level() || ob_get_length() === false ) {
            ob_start( PHP_OUTPUT_HANDLER_STDFLAGS );  // 出力バッファのフラグのデフォルト設定
        }
        if( ob_get_length () !== false ) {
	     // flush関数を実行（バッファを吐かせる）
            ob_flush();
	    flush();
            ob_end_flush();
        }
}
   
?>