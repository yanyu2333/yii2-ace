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
    <title>测试</title>
</head>
<body>
<?php $this->beginBody(); ?>
<body>
<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header pull-left">
            <a href="index.html" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    Ace Admin
                </small>
            </a>
        </div>
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="web/ace/images/avatars/user.jpg" alt="Jason's Photo" />
                        <span class="user-info">
									<small>Welcome,</small>
									Lily
								</span>
                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>
                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>
<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>
        <ul class="nav nav-list">
            <li class="active open">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Tables </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="active">
                        <a href="/index.php?r=site">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Simple &amp; Dynamic
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="menu-icon fa fa-caret-right"></i>
                            jqGrid plugin
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-file-o"></i>
                    <span class="menu-text">
								Other Pages
								<span class="badge badge-primary">5</span>
							</span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="faq.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            FAQ
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="error-404.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Error 404
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="error-500.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Error 500
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="grid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Grid
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="blank.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Blank Page
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
        </ul><!-- /.nav-list -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>
    <div class="main-content">
        <div class="main-content-inner">
          <!--  <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Other Pages</a>
                    </li>
                    <li class="active">Blank Page</li>
                </ul>
            </div>-->
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <?php echo $content; ?>
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->
    <div class="footer">
        <div class="footer-inner">
            <div class="footer-content">
				<span class="bigger-120">
                    <span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
                </span>
            </div>
        </div>
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
    </div>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage();?>
