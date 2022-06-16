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
            <h4 class="panel-title">sy_parsys Table</h4>
        </div>
        <div class="panel-body">
<form action="<?= base_url($action) ?>" method="post">
	 <div class="form-group">
                        <label for="varchar">Par Name
                            <?php echo ('par_name') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="par_name" id="par_name"
                            placeholder="Par Name" value="<?php echo $data['par_name']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="par_val">Par Val
                            <?php echo ('par_val') ?></label>
                        <textarea class="form-control" rows="3" name="par_val" id="par_val"
                            placeholder="Par Val"><?php echo $data['par_val']; ?></textarea>
                    </div>
	 <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>"> 
	
    <div class="d-flex p-2 bd-highlight">
    <div class="form-group">
        <a class="btn btn-sm btn-danger" href="<?= base_url('syparsys') ?>">Batal</a>
                        <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
    </div>
    </div>
</form>
</div>
</div>
</div>



<?= $this->endSection(); ?>