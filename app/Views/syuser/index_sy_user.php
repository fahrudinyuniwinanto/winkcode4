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
			<div class="row">
				<div class="col-md-6">
					<a href='syuser/create' class="btn btn-sm btn-primary"><i class="fa fa-plus-circle"></i>
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
							<th>Fullname</th>
							<th>Username</th>
							<th>Email</th>
							<th>Group</th>
							<th>Telp</th>
							<th>IP</th>
							<th>Last Login</th>
							<th>Action</th>
						</tr>
						<tr>
					</thead><?php foreach ($data as $k => $v) : ?>
						<tr>
							<td width="80px"><?= $number++ ?></td>
							<td><?= $v['fullname'] ?></td>
							<td><?= $v['username'] ?></td>
							<td><?= $v['email'] ?></td>
							<td><?= db_connect()->query("select group_name from sy_user_group where id = " . $v['id_group'])->getRow()->group_name ?></td>
							<td><?= $v['telp'] ?></td>
							<td><?= $v['ip'] ?></td>
							<td><?= $v['last_login'] ?></td>
							<td>
								<span class="float-right">
									<a type="button" class="btn btn-sm btn-primary" href="<?= base_url('syuser/read/' . $v['id']) ?>"><i class="fa fa-search"></i></a>
									<a type="button" class="btn btn-sm btn-warning" href="<?= base_url('syuser/update/' . $v['id']) ?>"><i class="fa fa-edit"></i></a>
									<a type="button" class="btn btn-sm btn-danger" href="<?= base_url('syuser/delete/' . $v['id']) ?>" onclick="javascript: return confirm('Delete 
Are You Sure ?')"><i class="fa fa-trash"></i></a>
								</span>
							</td>
						<?php endforeach; ?>
						</tbody>
				</table>
				<!-- pagination -->
				<?php echo $pager->links() ?>
			</div>
			<?= $this->endSection(); ?>
		</div>