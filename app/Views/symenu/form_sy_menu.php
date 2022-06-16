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
            <h4 class="panel-title">sy_menu Table</h4>
        </div>
        <div class="panel-body">
<form action="<?= base_url($action) ?>" method="post">
	 <div class="form-group">
                        <label for="varchar">Label
                            <?php echo ('label') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="label" id="label"
                            placeholder="Label" value="<?php echo $data['label']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="int">Redirect
                            <?php echo ('redirect') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="redirect" id="redirect"
                            placeholder="Redirect" value="<?php echo $data['redirect']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Url
                            <?php echo ('url') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="url" id="url"
                            placeholder="Url" value="<?php echo $data['url']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="int">Parent
                            <?php echo ('parent') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="parent" id="parent"
                            placeholder="Parent" value="<?php echo $data['parent']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Icon
                            <?php echo ('icon') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="icon" id="icon"
                            placeholder="Icon" value="<?php echo $data['icon']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="int">Order No
                            <?php echo ('order_no') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="order_no" id="order_no"
                            placeholder="Order No" value="<?php echo $data['order_no']; ?>" />
                    </div>
	 <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>"> 
	
    <div class="d-flex p-2 bd-highlight">
    <div class="form-group">
        <a class="btn btn-sm btn-danger" href="<?= base_url('symenu') ?>">Batal</a>
                        <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
    </div>
    </div>
</form>
</div>
</div>
</div>



<?= $this->endSection(); ?>