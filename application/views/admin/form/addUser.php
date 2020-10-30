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
    <link href="<?= base_url('node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('node_modules/gentelella/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('node_modules/gentelella/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('node_modules/gentelella/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?= base_url('node_modules/gentelella/vendors/google-code-prettify/bin/prettify.min.css') ?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?= base_url('node_modules/gentelella/vendors/select2/dist/css/select2.min.css') ?>" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?= base_url('node_modules/gentelella/vendors/switchery/dist/switchery.min.css') ?>" rel="stylesheet">
    <!-- starrr -->
    <link href="<?= base_url('node_modules/gentelella/vendors/starrr/dist/starrr.css') ?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">

    <!-- PNotify -->
    <link href="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.css') ?>" rel="stylesheet">
    <link href="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.buttons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.nonblock.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('node_modules/gentelella/build/css/custom.min.css') ?>" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span><?= $brand ?></span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url('node_modules/gentelella/production/images/img.jpg') ?>" alt="..." class="img-circle profile_img">
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
                                <li><a><i class="fa fa-bar-chart-o"></i> Data <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url('dashboard/transaction') ?>">Transaction</a></li>
                                        <li><a href="<?= base_url('dashboard/product') ?>">Product</a></li>
                                        <li><a href="<?= base_url('dashboard/user') ?>">User</a></li>
                                        <li><a>Report</a></li>
                                    </ul>
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
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url('node_modules/gentelella/production/images/img.jpg') ?>" alt=""><?= $nameUser ?>
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
                                    <li><a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
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
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Add Users</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Registration Form</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <!-- start form for validation -->
                                    <form id="demo-form" method="POST" action="<?= base_url('login/register') ?>" data-parsley-validate>
                                        <label for="fullname">Full Name * :</label>
                                        <input type="text" id="fullname" class="form-control" name="fullname" required />

                                        <label for="username">Username * :</label>
                                        <input type="text" id="username" class="form-control" name="username" required />

                                        <label for="password">Password * :</label>
                                        <input type="password" id="password" class="form-control" name="password" required />

                                        <label for="email">Email * :</label>
                                        <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

                                        <label>Gender *:</label>
                                        <p>
                                            M:
                                            <input type="radio" class="flat" name="gender" id="genderM" value="1" checked="" required /> F:
                                            <input type="radio" class="flat" name="gender" id="genderF" value="2" />
                                        </p>

                                        <label for="level">Role Level *:</label>
                                        <select id="level" name="level" class="form-control" required>
                                            <option value="">Choose..</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Employees</option>
                                        </select>

                                        <br />
                                        <button type="submit" class="btn btn-primary">Save</button>

                                    </form>
                                    <!-- end form for validations -->

                                </div>
                            </div>

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

    <!-- jQuery -->
    <script src="<?= base_url('node_modules/gentelella/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('node_modules/gentelella/vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('node_modules/gentelella/vendors/nprogress/nprogress.js') ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('node_modules/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>">
    </script>
    <!-- iCheck -->
    <script src="<?= base_url('node_modules/gentelella/vendors/iCheck/icheck.min.js') ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('node_modules/gentelella/vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>">
    </script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?= base_url('node_modules/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/google-code-prettify/src/prettify.js') ?>"></script>
    <!-- jQuery Tags Input -->
    <script src="<?= base_url('node_modules/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js') ?>"></script>
    <!-- Switchery -->
    <script src="<?= base_url('node_modules/gentelella/vendors/switchery/dist/switchery.min.js') ?>"></script>
    <!-- Select2 -->
    <script src="<?= base_url('node_modules/gentelella/vendors/select2/dist/js/select2.full.min.js') ?>"></script>
    <!-- Parsley -->
    <script src="<?= base_url('node_modules/gentelella/vendors/parsleyjs/dist/parsley.min.js') ?>"></script>
    <!-- Autosize -->
    <script src="<?= base_url('node_modules/gentelella/vendors/autosize/dist/autosize.min.js') ?>"></script>
    <!-- jQuery autocomplete -->
    <script src="<?= base_url('node_modules/gentelella/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') ?>">
    </script>
    <!-- starrr -->
    <script src="<?= base_url('node_modules/gentelella/vendors/starrr/dist/starrr.js') ?>"></script>
    <!-- PNotify -->
    <script src="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.buttons.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/pnotify/dist/pnotify.nonblock.js') ?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('node_modules/gentelella/build/js/custom.js') ?>"></script>

    <script>
        <?php if ($this->session->flashdata('success')) : ?>
            new PNotify({
                title: 'Success',
                text: 'Register User Success.',
                type: 'success',
                styling: 'bootstrap3'
            });
        <?php elseif ($this->session->flashdata('failed')) : ?>
            new PNotify({
                title: 'Failed',
                text: 'Register User Failed.',
                type: 'error',
                styling: 'bootstrap3'
            });
        <?php endif; ?>
    </script>

</body>

</html>