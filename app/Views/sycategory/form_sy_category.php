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
            <h4 class="panel-title">sy_category Table</h4>
        </div>
        <div class="panel-body">
<form action="<?= base_url($action) ?>" method="post">
	 <div class="form-group">
                        <label for="varchar">Name
                            </label>
                        <input type="text" class="form-control" autocomplete="off" name="name" id="name"
                            placeholder="Name" value="<?php echo $data['name']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Key
                            </label>
                        <input type="text" class="form-control" autocomplete="off" name="key" id="key"
                            placeholder="Key" value="<?php echo $data['key']; ?>" />
                    </div>
	 <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>"> 
	
    <div class="d-flex p-2 bd-highlight">
    <div class="form-group">
        <a class="btn btn-sm btn-danger" href="<?= base_url('sycategory') ?>">Batal</a>
                        <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
    </div>
    </div>
</form>
</div>
</div>
</div>



<?= $this->endSection(); ?>