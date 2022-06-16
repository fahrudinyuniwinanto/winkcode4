<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= wfApp() ?>
    </title>
    <link href="<?= base_url() ?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/seantheme/plugins/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/print.css" rel="stylesheet">
    <script src="<?= base_url() ?>/assets/seantheme/plugins/flot/jquery.js"></script>
    <script src="<?= base_url() ?>/assets/js/wf.js"></script>
    <script src="<?= base_url() ?>/assets/js/wf3.js"></script>
    <style>
        table thead,
        .silver {
            background-color: silver;
            font-weight: bold;
        }

        .lppd thead tr th {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="wrapper wrapper-content" ng-app="sfApp" ng-controller="mainCtrl" id="mainCtrl">
        <div class="text-center no-print" style="padding-top: 20px;">
            <a href="<?= base_url() ?>/admin" class="btn btn-sm btn-info"><i class="fa fa-arrow-left"></i>Kembali Ke
                Dashboard</a>
            <button type="button" class="btn btn-sm btn-primary" onclick="window.print()"> <i class="fa fa-print"></i>
                Cetak</button>
            <button type="button" class="btn btn-sm btn-primary" onclick="exportExcel('laporan_lppd')"> <i class="fa fa-file"></i>
                Excel</button>
            <hr>
        </div>
        <?= $this->renderSection('content') ?>
    </div>
</body>

</html>