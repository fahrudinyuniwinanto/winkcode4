<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title><?= wfApp() ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/seantheme/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/css/animate.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/css/style.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/css/style-responsive.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/seantheme/css/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?= base_url() ?>/assets/seantheme/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->

</head>

<body class="pace-top bg-white">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="<?= base_url() ?>/assets/images/login.jpg" data-id="login-cover-image" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title"><i class="fa fa-diamond text-success"></i> <?= wfApp() ?></h4>
                    <p>
                        <?= wfApp('APP_DESC') ?>
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span class="logo"></span> Form Login
                        <small><?= wfApp() ?></small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form action="<?= base_url() ?>/wf/login_action" method="POST" class="margin-bottom-0">
                        <?php if (session()->getFlashdata('msg') != "") : ?>
                            <div class="alert alert-warning"><i class="fa fa-warning"></i> <?= session()->getFlashdata('msg') ?></div>
                        <?php endif ?>
                        <div class="form-group m-b-15">
                            <input type="text" name="user" class="form-control input-lg" placeholder="Username" />
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" name="pass" class="form-control input-lg" placeholder="Password" />
                        </div>
                        <div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" /> Remember Me
                            </label>
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40">
                            <span onclick="alert('Silakan hubungi Administrator')">Belum terdaftar?</span>
                        </div>
                        <hr />
                        <p class="text-center text-inverse">
                            <?= wfApp('RIGHT_FOOTER') ?>
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->

        <!-- begin theme-panel -->

        <!-- end theme-panel -->
    </div>
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?= base_url() ?>/assets/seantheme/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
		<script src="<?= base_url() ?>/assets/seantheme/crossbrowserjs/html5shiv.js"></script>
		<script src="<?= base_url() ?>/assets/seantheme/crossbrowserjs/respond.min.js"></script>
		<script src="<?= base_url() ?>/assets/seantheme/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
    <script src="<?= base_url() ?>/assets/seantheme/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>/assets/seantheme/plugins/jquery-cookie/jquery.cookie.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?= base_url() ?>/assets/seantheme/js/apps.min.js"></script>
    <script src="<?= base_url() ?>/assets/sweetalert/js/sweetalert.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/wf.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
</body>

</html>