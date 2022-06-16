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
    <h4 class="panel-title"><?= $content ?> Table</h4>
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-light table-striped">
    <tbody>
	    <tr><th width="15%">Par Name</th><td>: 	<?php echo $data['par_name']; ?></td></tr>
	    <tr><th width="15%">Par Val</th><td>: 	<?php echo $data['par_val']; ?></td></tr>
</tbody>
</table>
    <div class="d-flex p-2 bd-highlight">
        <a class="btn btn-sm btn-danger" href="<?= \base_url('syparsys') ?>">Kembali ke list</a>
    </div>
<?= $this->endSection(); ?>
</div>