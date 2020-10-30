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
    <!-- Datatables -->
    <link href="<?= base_url('node_modules/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('node_modules/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('node_modules/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('node_modules/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('node_modules/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">

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
                        <a class="site_title"><i class="fa fa-paw"></i> <span><?= $brand ?></span></a>
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
                            <h3>User</h3>
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
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <div class="btn-group">
                                        <a href="<?=base_url('dashboard/formuser')?>" class="btn btn-primary border">Add Users</a>
                                    </div>
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
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID User</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php if ($dataUser != false) foreach ($dataUser as $key) : ?>
                                                <tr>
                                                    <td><?= $key->id_user ?></td>
                                                    <td><?= $key->name ?></td>
                                                    <td><?php if ($key->role == 1) echo "Admin";
                                                            else echo "Employees" ?></td>
                                                    <td>
                                                        <a href="<?=base_url("dashboard/deleteUser/".$key->id_user."")?>" class="btnDeleteUser" data-id="<?= $key->id_user ?>">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
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
    <!-- iCheck -->
    <script src="<?= base_url('node_modules/gentelella/vendors/iCheck/icheck.min.js') ?>"></script>
    <!-- Datatables -->
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') ?>">
    </script>
    <script src="<?= base_url('node_modules/gentelella/vendors/jszip/dist/jszip.min.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/pdfmake/build/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('node_modules/gentelella/vendors/pdfmake/build/vfs_fonts.js') ?>"></script>

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
                text: 'Delete Success.',
                type: 'success',
                styling: 'bootstrap3'
            });
        <?php elseif ($this->session->flashdata('failed')) : ?>
            new PNotify({
                title: 'Failed',
                text: 'Delete Failed.',
                type: 'error',
                styling: 'bootstrap3'
            });
        <?php endif; ?>
        $('.btnDeleteUser').click(function(e) {
            const id  = e.target.dataset.id;
        });
    </script>

</body>

</html>