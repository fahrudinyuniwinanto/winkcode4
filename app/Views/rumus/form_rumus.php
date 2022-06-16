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
            <h4 class="panel-title">rumus Table</h4>
        </div>
        <div class="panel-body">
            <form action="<?= base_url($action) ?>" method="post" enctype='multipart/form-data'>
                <div class="form-group">
                    <div class="label label-danger"><?= @session()->getFlashdata('message') ?></div>

                </div>
                <div class="form-group">
                    <label for="varchar">Rumus</label>
                    <input type="text" class="form-control" autocomplete="off" name="rumus" id="rumus" placeholder="Rumus" value="<?php echo $data['rumus']; ?>" />
                </div>
                <div class="form-group">
                    <label for="char">Elemen Data</label>
                    <input type="text" class="form-control" autocomplete="off" name="elemen_data" id="elemen_data" placeholder="Elemen Data" value="<?php echo $data['elemen_data']; ?>" />
                </div>

                <div class="form-group">
                    <label for="varchar">Sumber Data
                        <?php echo ('sumber_data') ?></label>
                    <?=
                    form_dropdown('sumber_data', wfComboCategory('SUMBER_DATA'), $data['sumber_data'], ['class' => 'form-control', 'id' => 'sumber_data']);
                    ?>
                </div>
                <div class="form-group">
                    <label for="varchar">File Data Dukung
                        <?php echo ('file_data_dukung') ?></label>
                    <input type="file" class="form-control" autocomplete="off" name="file_data_dukung" id="file_data_dukung" value="<?php echo $data['file_data_dukung']; ?>" />
                    <a class="btn btn-success btn-sm <?= $data['file_data_dukung'] == '' ? 'hide' : '' ?>" href="<?= base_url() . "/public/uploads/" . $data['file_data_dukung'] ?>"><i class="fa fa-download"></i>&nbsp;<?= $data['file_data_dukung'] ?></a>
                </div>
                <div class="form-group">
                    <label for="int">IKK</label>
                    <?=
                    form_dropdown('id_ikk', wfCombo('ikk', 'id', 'ikk'), $data['id_ikk'], ['class' => 'form-control', 'id' => 'id_ikk']);
                    ?>
                </div>
                <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>">

                <div class="d-flex p-2 bd-highlight">
                    <div class="form-group">
                        <a class="btn btn-sm btn-danger" href="<?= base_url('rumus') ?>">Batal</a>
                        <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#id_ikk').select2();
    $('#sumber_data').select2();
</script>

<?= $this->endSection(); ?>