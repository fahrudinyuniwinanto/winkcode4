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
            <h4 class="panel-title">sy_user Table</h4>
        </div>
        <div class="panel-body">
            <form action="<?= base_url($action) ?>" method="post">
                <div class="form-group">
                    <label for="varchar">Fullname
                        <?php echo ('fullname') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="fullname" id="fullname" placeholder="Fullname" value="<?php echo $data['fullname']; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Username
                        <?php echo ('username') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="username" id="username" placeholder="Username" value="<?php echo $data['username']; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Password
                        <?php echo ('password') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="password" id="password" placeholder="Biarkan kosong jika tdk ingin merubah password" value="" />
                </div>
                <div class="form-group">
                    <label for="varchar">Email
                        <?php echo ('email') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="email" id="email" placeholder="Email" value="<?php echo $data['email']; ?>" />
                </div>
                <div class="form-group">
                    <label for="int">Id Group
                        <?php echo ('id_group') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="id_group" id="id_group" placeholder="Id Group" value="<?php echo $data['id_group']; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Foto
                        <?php echo ('foto') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="foto" id="foto" placeholder="Foto" value="<?php echo $data['foto']; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Telp
                        <?php echo ('telp') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="telp" id="telp" placeholder="Telp" value="<?php echo $data['telp']; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Ip
                        <?php echo ('ip') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="ip" id="ip" placeholder="Ip" value="<?php echo $data['ip']; ?>" />
                </div>
                <div class="form-group">
                    <label for="datetime">Last Login
                        <?php echo ('last_login') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="last_login" id="last_login" placeholder="Last Login" value="<?php echo $data['last_login']; ?>" />
                </div>
                <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>">

                <div class="d-flex p-2 bd-highlight">
                    <div class="form-group">
                        <a class="btn btn-sm btn-danger" href="<?= base_url('syuser') ?>">Batal</a>
                        <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>