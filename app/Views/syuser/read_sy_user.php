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
	    <tr><th width="15%">Fullname</th><td>: 	<?php echo $data['fullname']; ?></td></tr>
	    <tr><th width="15%">Username</th><td>: 	<?php echo $data['username']; ?></td></tr>
	    <tr><th width="15%">Password</th><td>: 	<?php echo $data['password']; ?></td></tr>
	    <tr><th width="15%">Email</th><td>: 	<?php echo $data['email']; ?></td></tr>
	    <tr><th width="15%">Id Group</th><td>: 	<?php echo $data['id_group']; ?></td></tr>
	    <tr><th width="15%">Foto</th><td>: 	<?php echo $data['foto']; ?></td></tr>
	    <tr><th width="15%">Telp</th><td>: 	<?php echo $data['telp']; ?></td></tr>
	    <tr><th width="15%">Ip</th><td>: 	<?php echo $data['ip']; ?></td></tr>
	    <tr><th width="15%">Last Login</th><td>: 	<?php echo $data['last_login']; ?></td></tr>
</tbody>
</table>
    <div class="d-flex p-2 bd-highlight">
        <a class="btn btn-sm btn-danger" href="<?= \base_url('syuser') ?>">Kembali ke list</a>
    </div>
<?= $this->endSection(); ?>
</div>