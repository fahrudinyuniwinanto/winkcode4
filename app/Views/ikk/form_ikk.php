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
            <h4 class="panel-title">ikk Table</h4>
        </div>
        <div class="panel-body">
            <form action="<?= base_url($action) ?>" method="post">
                <div class="form-group">
                    <label for="varchar">Ikk
                        <?php echo ('ikk') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="ikk" id="ikk" placeholder="Ikk" value="<?php echo $data['ikk']; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Satuan
                        <?php echo ('satuan') ?></label>
                    <?=
                    form_dropdown('satuan', wfComboCategory('SATUAN_IKK'), $data['satuan'], ['class' => 'form-control', 'id' => 'satuan']);
                    ?>
                </div>
                <div class="form-group">
                    <label for="char">Capaian
                        <?php echo ('capaian') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="capaian" id="capaian" placeholder="Capaian" value="<?php echo $data['capaian']; ?>" />
                </div>
                <div class="form-group">
                    <label for="int">Sub Urusan</label>
                    <?=
                    form_dropdown('id_sub_urusan', wfCombo('sub_urusan', 'id', 'sub_urusan'), $data['id_sub_urusan'], ['class' => 'form-control', 'id' => 'id_sub_urusan']);
                    ?>
                </div>
                <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>">

                <div class="d-flex p-2 bd-highlight">
                    <div class="form-group">
                        <a class="btn btn-sm btn-danger" href="<?= base_url('ikk') ?>">Batal</a>
                        <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#id_sub_urusan').select2();
    $('#satuan').select2();
</script>

<?= $this->endSection(); ?>