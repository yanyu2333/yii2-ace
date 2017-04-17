<?php
use home\assets\AppAsset;
AppAsset::register($this);
$this->beginPage();
?>
<!doctype html>
<html lang="zh-cn">
<head>
    <?php $this->head(); ?>
    <meta charset="UTF-8">
    <title>使用资源</title>
</head>
<body>
<?php $this->beginBody(); ?>
<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    管理后台
                </small>
            </a>
        </div>
        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="main/modify-password" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/advanced/web/avatars/user.jpg" alt="Jason's Photo"/>
                        <span class="user-info">
									<small>欢迎光临</small>
								</span>
                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="/index/logout">
                                <i class="icon-off"></i>退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="main-container-inner">
        <div class="sidebar" id="sidebar">
            <ul class="nav nav-list">
                <li class="active">
                    <a href="/main/index">
                        <i class="icon-home"></i>
                        <span class="menu-text"> 控制台 </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-th-large"></i>
                        <span class="menu-text"> 活动管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="/shopping-acts/self-acts-index">
                                <i class="icon-double-angle-right"></i>
                                自发活动管理
                            </a>
                        </li>
                        <li>
                            <a href="/shopping-acts/topic-acts-index">
                                <i class="icon-double-angle-right"></i>
                                主题活动管理
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left"
                   data-icon2="icon-double-angle-right"></i>
            </div>
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {
                }
            </script>
        </div>
        <div class="col-sm-9 col-md-9 col-lg-10 gclass-content">
            <?php echo $content;?>
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div>

<div class="footer gclass-footer navbar-fixed-bottom">
    <div class="container text-center">
        <p class="text-muted">
            <a href="" target="_blank">
                <span>麦广互娱科技有限公司</span>
            </a>
            <span> 版权所有 Copyright © 2014-2017</span>
        </p>
    </div>
</div>

<script>
    $(document).ready(function(){
        var cookie_href =  $.cookie('shop.nav-top');
        if (typeof cookie_href != 'undefined') {
            $('ul.submenu li').children('a').each(function(){
                if (cookie_href == $(this).prop('href')) {
                    $(this).css('color', 'red').css('text-decoration', 'underline');
                    $(this).parent().parent().siblings().attr('display', 'none');
                    $(this).parent().parent().attr('display', 'block').show();
                }
            });
        }
    });

    $('ul.submenu li').find('a').on('click', function(){
        var href = $(this).prop('href');
        $.cookie('shop.nav-top', href, {expires : 1, path : '/'});
    });
</script>
</body>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage();?>
<?php
namespace home\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/web';
    public $baseUrl = '@web/web';
    public $css = [
        'css/site.css',
        'bootstrap/css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/font-awesome-ie7.min.css',
        'css/ace.min.css',
        'css/ace-rtl.min.css',
        'css/ace-skins.min.css',
        'css/ace-ie.min.css',
    ];
    public $js = [
        // 'jquery/jquery.min.js',
        'js/ace-extra.min.js',
        'js/html5shiv.js',
        'js/respond.min.js',
        'js/jquery.mobile.custom.min.js',
        'js/bootstrap.min.js',
        'js/typeahead-bs2.min.js',
        'js/ace-elements.min.js',
        'js/ace.min.js',
        'jquery.cookie/jquery.cookie.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}