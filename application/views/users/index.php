<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') ?>"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('node_modules/gentelella/vendors/font-awesome/css/font-awesome.min.css') ?>"
        rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('node_modules/gentelella/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('node_modules/gentelella/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link
        href="<?= base_url('node_modules/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url('node_modules/gentelella/vendors/jqvmap/dist/jqvmap.min.css"') ?> rel=" stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>"
        rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('node_modules/gentelella/build/css/custom.min.css') ?>" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a class="site_title"><i class="fa fa-paw"></i> <span><?= $brand ?></span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url('node_modules/gentelella/production/images/img.jpg') ?>" alt="..."
                                class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?= $nameUser ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?= base_url('dashboard') ?>"><i class="fa fa-home"></i>
                                        Dashboard</span></a>
                                </li>
                                <li><a href="<?=base_url('dashboard/pos')?>"><i class="fa fa-edit"></i> POS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="<?= base_url('node_modules/gentelella/production/images/img.jpg') ?>"
                                        alt=""><?= $nameUser ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li>
                                    <li><a href="<?= base_url('login/logout') ?>"><i
                                                class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row tile_count">
                    <div class="col-md-6 col-sm-6 col-xs-12 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Total Sell</span>
                        <div class="count"><?php  if($totalSell != NULL) echo $totalSell; else echo 0;?></div>
                        <span class="count_bottom"><i class="grenn"><i class="fa fa-sort-asc"></i>0% </i> This Month
                        </span>
                    </div>
                </div>
                <!-- /top tiles -->

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_graph">

                            <div class="row x_title">
                                <div class="col-md-6">
                                    <h3>Sell Activities </h3>
                                </div>
                                <div class="col-md-6">
                                    <div id="reportrange" class="pull-right"
                                        style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div id="chart_plot_01" class="demo-placeholder"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                                <div class="x_title">
                                    <h2>Top Seller</h2>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-6">
                                    <div>
                                        <p>Novel</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 0%;">
                                                <div class="progress-bar bg-green" role="progressbar"
                                                    data-transitiongoal="0"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p>Komik</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 0%;">
                                                <div class="progress-bar bg-green" role="progressbar"
                                                    data-transitiongoal="0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-6">
                                    <div>
                                        <p>Secience</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 0%;">
                                                <div class="progress-bar bg-green" role="progressbar"
                                                    data-transitiongoal="0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- compose -->
    <div class="compose col-md-6 col-xs-12">
        <div class="compose-header">
            New Message
            <button type="button" class="close compose-close">
                <span>×</span>
            </button>
        </div>

        <div class="compose-body">
            <div id="alerts"></div>

            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b
                            class="caret"></b></a>
                    <ul class="dropdown-menu">
                    </ul>
                </div>

                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i
                            class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a data-edit="fontSize 5">
                                <p style="font-size:17px">Huge</p>
                            </a>
                        </li>
                        <li>
                            <a data-edit="fontSize 3">
                                <p style="font-size:14px">Normal</p>
                            </a>
                        </li>
                        <li>
                            <a data-edit="fontSize 1">
                                <p style="font-size:11px">Small</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                    <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                    <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                            class="fa fa-strikethrough"></i></a>
                    <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i
                            class="fa fa-underline"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                    <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                    <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                            class="fa fa-dedent"></i></a>
                    <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                            class="fa fa-align-left"></i></a>
                    <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                            class="fa fa-align-center"></i></a>
                    <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                            class="fa fa-align-right"></i></a>
                    <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                            class="fa fa-align-justify"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                            class="fa fa-link"></i></a>
                    <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                        <button class="btn" type="button">Add</button>
                    </div>
                    <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i
                            class="fa fa-picture-o"></i></a>
                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                    <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                </div>
            </div>

            <div id="editor" class="editor-wrapper"></div>
        </div>

        <div class="compose-footer">
            <button id="send" class="btn btn-sm btn-success" type="button">Send</button>
        </div>
    </div>
    <!-- /compose -->

    <!-- jQuery -->
    <script src="<?= base_url('node_modules/gentelella/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('node_modules/gentelella/vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('node_modules/gentelella/vendors/nprogress/nprogress.js') ?>"></script>
    <!-- Chart.js -->
    <script src="<?= base_url('node_modules/gentelella/vendors/Chart.js/dist/Chart.min.js') ?>"></script>
    <!-- gauge.js -->
    <script src="<?= base_url('node_modules/gentelella/vendors/gauge.js/dist/gauge.min.js') ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('node_modules/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>">
    </script>
    <!-- iCheck -->
    <script src="<?= base_url('node_modules/gentelella/vendors/iCheck/icheck.min.js') ?>"></script>
    <!-- Skycons -->
    <script src="<?= base_url('node_modules/gentelella/vendors/skycons/skycons.js') ?>"></script>
    <!-- Flot -->
    <script src="<?= base_url('node_modules/gentelella/vendors/Flot/jquery.flot.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/Flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/Flot/jquery.flot.time.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/Flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/Flot/jquery.flot.resize.js') ?>"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url('node_modules/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/flot.curvedlines/curvedLines.js') ?>"></script>
    <!-- DateJS -->
    <script src="<?= base_url('node_modules/gentelella/vendors/DateJS/build/date.js') ?>"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('node_modules/gentelella/vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>">
    </script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('node_modules/gentelella/vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>">
    </script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('node_modules/gentelella/build/js/custom.min.js') ?>"></script>

</body>

</html>