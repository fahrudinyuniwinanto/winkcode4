<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title><?= wfApp('APP_NAME') ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="<?= wfApp('META_DESC') ?>" name="description" />
    <meta content="<?= wfApp('META_AUTHOR') ?>" name="author" />
    <meta content="<?= wfApp('META_KEYWORDS') ?>" name="keywords" />
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- <link href="<?= base_url() ?>/assets/select2/select2.min.css" rel="stylesheet" /> -->
    <link href="<?= base_url() ?>/assets/seantheme/css/animate.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/css/style.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/css/style-responsive.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/css/theme/default.css" rel="stylesheet" id="theme" />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" media='print' />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" />

    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="<?= base_url() ?>/assets/seantheme/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?= base_url() ?>/assets/seantheme/plugins/jquery/jquery-1.9.1.min.js"></script>
    <!-- <script src="<?= base_url() ?>/assets/select2/select2.min.js"></script> -->
    <!-- jquery 3.6.0 kebutuhan select2js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <link href="<?= base_url() ?>/assets/select2/4.1.0/select2.min.css" rel="stylesheet" />
    <script src="<?= base_url() ?>/assets/select2/4.1.0/select2.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    <!-- <link href="<?= base_url() ?>/assets/sweetalert/css/sweetalert.css" rel="stylesheet"> -->
    <style>
        tr.terhapus td {
            text-decoration: line-through !important;
            color: #ed5565 !important;
        }

        .no-border-text {
            border: 0px;
        }
    </style>
    <script src="<?= base_url() ?>/assets/js/wf.js"></script>

</head>

<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-default navbar-fixed-top">
            <!-- begin container-fluid -->
            <div class="container-fluid">
                <!-- begin mobile sidebar expand / collapse button -->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a>
                    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- end mobile sidebar expand / collapse button -->

                <!-- begin header navigation right -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form full-width">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter keyword" />
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                            <i class="fa fa-bell-o"></i>
                            <span class="label">5</span>
                        </a>
                        <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="<?= base_url() ?>/assets/seantheme/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="<?= base_url() ?>/assets/seantheme/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown navbar-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= base_url() ?>/assets/seantheme/img/user-13.jpg" alt="" />
                            <span class="hidden-xs"><?= session()->get('fullname') ?></span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft">
                            <li class="arrow"></li>
                            <li><a href="javascript:;">Edit Profile</a></li>
                            <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                            <li><a href="javascript:;">Calendar</a></li>
                            <li><a href="javascript:;">Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= base_url() ?>/wf/logout">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- end header navigation right -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end #header -->

        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <div class="image">
                            <a href="javascript:;"><img src="<?= base_url() ?>/assets/seantheme/img/user-13.jpg" alt="" /></a>
                        </div>
                        <div class="info">
                            <?= session()->get('username') ?>
                            <small><?= session()->get('group') ?? '-' ?></small>
                        </div>
                    </li>
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">LPPD</li>
                    <li><a href="<?= base_url() ?>/admin"><i class="fa fa-laptop"></i> <span>Dashboard</span></a></li>
                    <li class="has-sub active">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-database"></i>
                            <span>Data Master</span>
                        </a>
                        <ul class="sub-menu">
                            <li class=""><a href="<?= base_url() ?>/urusan">Urusan</a></li>
                            <li><a href="<?= base_url() ?>/suburusan">Sub Urusan</a></li>
                            <li><a href="<?= base_url() ?>/ikk">IKK</a></li>
                            <li><a href="<?= base_url() ?>/rumus">Rumus</a></li>
                            <li><a href="<?= base_url() ?>/makro">Makro Bappeda</a></li>
                        </ul>
                    </li>
                    <li class="has-sub active">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-database"></i>
                            <span>Alat Import</span>
                        </a>
                        <ul class="sub-menu">
                            <li class=""><a href="<?= base_url() ?>/readexcel">Import Output & Outcome</a></li>
                            <li class=""><a href="<?= base_url() ?>/readexcel/indexmakro">Import Makro Bappeda</a></li>
                        </ul>
                    </li>
                    <li class="has-sub active">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-pie-chart"></i>
                            <span>Laporan</span>
                        </a>
                        <ul class="sub-menu">
                            <li class=""><a href="<?= base_url() ?>/laporan/outputKeluaran" target="_blank">Output - Keluaran</a></li>
                            <li class=""><a href="<?= base_url() ?>/laporan/outcomeHasil" target="_blank">Outcome - Hasil</a></li>
                            <li class=""><a href="<?= base_url() ?>/laporan/penunjang" target="_blank">Penunjang</a></li>
                            <li class=""><a href="<?= base_url() ?>/laporan/srcMakroBappeda">Makro Bappeda</a></li>
                        </ul>
                    </li>
                    <li class="has-sub active <?= session()->get('id_group') != 1 ? 'hide' : '' ?>">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-gears"></i>
                            <span>Sistem</span>
                        </a>
                        <ul class="sub-menu">
                            <li class=""><a href="<?= base_url() ?>/syuser">Users</a></li>
                            <li><a href="<?= base_url() ?>/syparsys">Parsys</a></li>
                            <li><a href="<?= base_url() ?>/symenu">Menu</a></li>
                            <li><a href="<?= base_url() ?>/sycategory">Category</a></li>
                            <li><a href="<?= base_url() ?>/ligatcode">CRUD Generator</a></li>
                        </ul>
                    </li>
                    <!-- begin sidebar minify button -->
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li class="active"><?= @$content ?></li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header"><?= @$content ?> <small> Master Data of <?= current_url(true)->getSegment(2); ?></small></h1>
            <!-- end page-header -->

            <!-- end #content -->
            <div class="row">
                <?= $this->renderSection('content') ?>
            </div>
        </div>


        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <script src="<?= base_url() ?>/assets/seantheme/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/fullcalendar/lib/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/js/calendar.demo.min.js"></script>
    <!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
    <script src="<?= base_url() ?>/assets/seantheme/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/jquery-cookie/jquery.cookie.js"></script>
    <!-- ================== END BASE JS ================== -->
    <script src="<?= base_url() ?>/assets/seantheme/plugins/DataTables/media/js/jquery.dataTables.js"></script>

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <!-- <script src="<?= base_url() ?>/assets/seantheme/plugins/gritter/js/jquery.gritter.js"></script> -->
    <script src="<?= base_url() ?>/assets/seantheme/plugins/flot/jquery.flot.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/sparkline/jquery.sparkline.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js">
    </script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js">
    </script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js">
    </script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/moment/moment.min.js">
    </script>
    <script src="<?= base_url() ?>/assets/seantheme/js/dashboard.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/js/apps.min.js"></script>
    <script src="<?= base_url() ?>/assets/sweetalert/js/sweetalert.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/bootstrap-wizard/js/bwizard.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/js/form-wizards.demo.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/wf.js"></script>

    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>
</body>

</html>