<?= $this->extend('layout/seantheme'); ?>
<?= $this->section('content'); ?>

<div class="col-md-12">
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">Laporan Makro Bappeda</h4>
        </div>
        <!--      <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <a href='#' class="btn btn-sm btn-primary"><i class="fa fa-download"></i>
                        Download Template Excel</a>
                </div>
                <div class="col-md-3 pull-right">

                </div>
            </div>
        </div> -->
        <div class="panel-body">

            <div class="row">
                <div class="col-md-5">
                    <label>Lengkapi data yang akan ditampilkan</label><br>
                    <small>Pilih tahun</small>
                    <form method='POST' action="<?= base_url() ?>/laporan/prinMakroBappeda" id="form-import">
                        <div class="input-group">
                            <input class="form-control date-y" type='text' name='tahun' autocomplete="off" value="<?= date('Y') ?>" />
                            <span class="input-group-addon" onclick='document.getElementById("form-import").submit();' style="cursor: pointer;">Tampilkan Laporan</span>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <?= $this->endSection(); ?>