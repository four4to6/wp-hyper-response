# wp-hyper-response

=== Plugin Name ===  
Contributors: natsuki1982  
Donate link: [https://stocker.jp/](https://stocker.jp/)  
Tags: performance  
Requires at least: 3.0  
Tested up to: 3.1  
Stable tag: 1.3  


���̃v���O�C���͏�L�A  
**wp-hyper-response���J�X�^�}�C�Y��������**�ł��B

This plugin improves the response of WordPress.  
WordPress�T�C�g�y�ъǗ���ʂ̃��X�|���X�����コ����v���O�C���ł��B

# Description

This plugin improves the response of WordPress using flush() function.

[Japanese Description is here]
[https://stocker.jp/diary/wp-hyper-response/](https://stocker.jp/diary/wp-hyper-response/)

# Installation

This section describes how to install the plugin and get it working.

e.g.

1. Upload `wp-hyper-response.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

# ���ӎ���

**���̃v���O�C�����g�p�������Ƃɂ�邢���Ȃ鑹�Q���ۏؒv���܂���**�B  
**���ȐӔC�ł��g�p���������B**  

�Ȃ��A���L�̏ꍇ�ɂ͍���������Ȃ��ꍇ������܂��̂ł��������������B  

- �T�[�o���� mod_gzip ���I���ɂȂ��Ă���ꍇ
- �T�[�o���Ńo�b�t�@�����O��@���w�肳��Ă���ꍇ
- �L���b�V���v���O�C�����I���ɂȂ��Ă��āA���Y���y�[�W�����ɃL���b�V������Ă����ꍇ
�i�Ǘ���ʂ̃��X�|���X�͌��シ��͂��ł��j

�� ����u���O��Ǘ���ʂ�����Ȃ��Ȃ����ۂ́A���萔�ł����v���O�C�����폜���Ă��������B

## �ǋL

flush()�̌��ʂ�css��js����s��Ƃœǂ܂��邱�Ƃő̊����x�����コ���܂��B  
�������Agzip�g�������Ɣ�r���Đڑ�����ؒf�܂ł̎��Ԃ������Ȃ�̂ŁA  
web�T�[�o�[���v���Z�X���ʂɂ����Ă��܂��܂��B  

�܂�A  
**��ʂ�PV������u���O�ł��̃v���O�C���𓱓������**  
**�T�[�o�̕��ׂ������Ă��܂��܂��̂ł����ӂ��������B**  
�����T�[�o�����ׂɑς����Ȃ��Ȃ����ۂ́A  
���̃v���O�C�����폜���邩�T�[�o���ړ]����K�v������܂��B

# �Q�l���� (reference)

- [https://stocker.jp/diary/wp-hyper-response/](https://stocker.jp/diary/wp-hyper-response/)
- [https://wpdocs.osdn.jp/%E3%82%AF%E3%83%A9%E3%82%B9%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/WP_Post](https://wpdocs.osdn.jp/%E3%82%AF%E3%83%A9%E3%82%B9%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/WP_Post)
- [https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_header](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_header)
- [https://www.php.net/manual/ja/function.ob-get-level.php](https://www.php.net/manual/ja/function.ob-get-level.php)
- [https://www.php.net/manual/ja/function.ob-flush.php](https://www.php.net/manual/ja/function.ob-flush.php)
- [https://www.php.net/manual/ja/outcontrol.constants.php](https://www.php.net/manual/ja/outcontrol.constants.php)
