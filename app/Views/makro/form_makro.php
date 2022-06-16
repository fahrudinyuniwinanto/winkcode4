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
            <h4 class="panel-title">makro Table</h4>
        </div>
        <div class="panel-body">
<form action="<?= base_url($action) ?>" method="post">
	 <div class="form-group">
                        <label for="varchar">Ikk
                            </label>
                        <input type="text" class="form-control" autocomplete="off" name="ikk" id="ikk"
                            placeholder="Ikk" value="<?php echo $data['ikk']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="year">Tahun
                            </label>
                        <input type="text" class="form-control" autocomplete="off" name="tahun" id="tahun"
                            placeholder="Tahun" value="<?php echo $data['tahun']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="float">Capaian Kinerja
                            </label>
                        <input type="text" class="form-control" autocomplete="off" name="capaian_kinerja" id="capaian_kinerja"
                            placeholder="Capaian Kinerja" value="<?php echo $data['capaian_kinerja']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="float">Laju Kinerja
                            </label>
                        <input type="text" class="form-control" autocomplete="off" name="laju_kinerja" id="laju_kinerja"
                            placeholder="Laju Kinerja" value="<?php echo $data['laju_kinerja']; ?>" />
                    </div>
	 <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>"> 
	
    <div class="d-flex p-2 bd-highlight">
    <div class="form-group">
        <a class="btn btn-sm btn-danger" href="<?= base_url('makro') ?>">Batal</a>
                        <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
    </div>
    </div>
</form>
</div>
</div>
</div>



<?= $this->endSection(); ?>