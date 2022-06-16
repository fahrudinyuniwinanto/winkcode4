
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
    <h4 class="panel-title">makro <?= $content ?></h4>
</div>
<div class="panel-body">
<div class="row">
				<div class="col-md-6">
					<a href='makro/create' class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i>
						Buat Baru</a>
				</div>
				<div class="col-md-3 pull-right">
					<form method='get' action="" id="searchForm">
						<div class="input-group">
							<input class="form-control" type='text' name='search' value='<?= $search ?>' placeholder="" />
							<span class="input-group-addon" onclick='document.getElementById("searchForm").submit();' style="cursor: pointer;">Cari</span>
						</div>
					</form>
				</div>
			</div>

    <div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>No</th>
		<th>Ikk</th>
		<th>Tahun</th>
		<th>Capaian Kinerja</th>
		<th>Laju Kinerja</th>
		<th>Action</th>
        </tr>
        <tr>
        </thead><?php foreach ($data as $k => $v): ?>
        <tr>
			<td width="80px"><?= $number++ ?></td>
			<td><?= $v['ikk'] ?></td>
			<td><?= $v['tahun'] ?></td>
			<td><?= $v['capaian_kinerja'] ?></td>
			<td><?= $v['laju_kinerja'] ?></td><td>
<span class="float-right">
                                    <a type="button" class="btn btn-sm btn-primary" href="<?= base_url('makro/read/'.$v['id'] )?>"><i class="fa fa-search"></i></a>
                                    <a type="button" class="btn btn-sm btn-warning" href="<?= base_url('makro/update/'.$v['id'] )?>"><i class="fa fa-edit"></i></a>
                                    <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('makro/delete/'.$v['id'] )?>" onclick="javascript: return confirm('Delete 
Are You Sure ?')"><i class="fa fa-trash"></i></a>
                                </span>
            </td>
            <?php  endforeach; ?>
        </tbody>
    </table>
    <!-- pagination -->
    <?php echo $pager->links() ?>
</div>
<?= $this->endSection(); ?>
</div>