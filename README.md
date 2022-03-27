# wp-hyper-response

=== Plugin Name ===  
Contributors: natsuki1982  
Donate link: [https://stocker.jp/](https://stocker.jp/)  
Tags: performance  
Requires at least: 3.0  
Tested up to: 3.1  
Stable tag: 1.3  


このプラグインは上記、  
**wp-hyper-responseをカスタマイズしたもの**です。

This plugin improves the response of WordPress.  
WordPressサイト及び管理画面のレスポンスを向上させるプラグインです。

# Description

This plugin improves the response of WordPress using flush() function.

[Japanese Description is here]
[https://stocker.jp/diary/wp-hyper-response/](https://stocker.jp/diary/wp-hyper-response/)

# Installation

This section describes how to install the plugin and get it working.

e.g.

1. Upload `wp-hyper-response.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

# 注意事項

**このプラグインを使用したことによるいかなる損害も保証致しません**。  
**自己責任でご使用ください。**  

なお、下記の場合には高速化されない場合がありますのでご了承ください。  

- サーバ側で mod_gzip がオンになっている場合
- サーバ側でバッファリング手法が指定されている場合
- キャッシュプラグインがオンになっていて、かつ該当ページが既にキャッシュされていた場合
（管理画面のレスポンスは向上するはずです）

※ 万一ブログや管理画面が見れなくなった際は、お手数ですがプラグインを削除してください。

## 追記

flush()の効果はcssやjsを並行作業で読ませることで体感速度を向上させます。  
ただし、gzip使った時と比較して接続から切断までの時間が長くなるので、  
webサーバーがプロセスを大量につくってしまいます。  

つまり、  
**大量のPVがあるブログでこのプラグインを導入すると**  
**サーバの負荷が増えてしまいますのでご注意ください。**  
もしサーバが負荷に耐えられなくなった際は、  
このプラグインを削除するかサーバを移転する必要があります。

# 参考文献 (reference)

- [https://stocker.jp/diary/wp-hyper-response/](https://stocker.jp/diary/wp-hyper-response/)
- [https://wpdocs.osdn.jp/%E3%82%AF%E3%83%A9%E3%82%B9%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/WP_Post](https://wpdocs.osdn.jp/%E3%82%AF%E3%83%A9%E3%82%B9%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/WP_Post)
- [https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_header](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_header)
- [https://www.php.net/manual/ja/function.ob-get-level.php](https://www.php.net/manual/ja/function.ob-get-level.php)
- [https://www.php.net/manual/ja/function.ob-flush.php](https://www.php.net/manual/ja/function.ob-flush.php)
- [https://www.php.net/manual/ja/outcontrol.constants.php](https://www.php.net/manual/ja/outcontrol.constants.php)
