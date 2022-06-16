<?= $this->extend('layout/seantheme'); ?>
<?= $this->section('content'); ?>
<div class="col-md-6">
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">sub_urusan Table</h4>
        </div>
        <div class="panel-body">
            <form action="<?= base_url($action) ?>" method="post">
                <div class="form-group">
                    <label for="varchar">Sub Urusan</label>
                    <input type="text" class="form-control" autocomplete="off" name="sub_urusan" id="sub_urusan" placeholder="Sub Urusan" value="<?php echo $data['sub_urusan']; ?>" />
                </div>
                <div class="form-group">
                    <label for="int">Urusan</label>
                    <?=
                    form_dropdown('id_urusan', wfCombo('urusan', 'id', 'concat(urusan,"-",output_outcome)'), $data['id_urusan'], ['class' => 'form-control', 'id' => 'id_urusan']);
                    ?>

                </div>
                <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>">

                <div class="d-flex p-2 bd-highlight">
                    <div class="form-group">
                        <a class="btn btn-sm btn-danger" href="<?= base_url('suburusan') ?>">Batal</a>
                        <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#id_urusan').select2();
</script>



<?= $this->endSection(); ?>