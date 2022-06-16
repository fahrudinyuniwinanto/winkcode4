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
            <h4 class="panel-title">urusan Table</h4>
        </div>
        <div class="panel-body">
            <form action="<?= base_url($action) ?>" method="post">
                <div class="form-group">
                    <label for="varchar">Urusan
                        <?php echo ('urusan') ?></label>
                    <input type="text" class="form-control" autocomplete="off" name="urusan" id="urusan" placeholder="Urusan" value="<?php echo $data['urusan']; ?>" />
                </div>
                <div class="form-group">
                    <label for="char">Output atau Outcome
                        <?php echo ('output_outcome') ?></label>
                    <?=
                    form_dropdown('output_outcome', ['' => ">> Pilih", 'OP' => 'OUTPUT', 'OC' => 'OUTCOME', 'PN' => 'PENUNJANG'], $data['output_outcome'], "class='form-control' id='output_outcome' onchange='toggle()'");
                    ?>

                </div>
                <div class="form-group hide" id="id_jenis_urusan">
                    <label for="char">Jenis Urusan
                        <?php echo ('jenis_urusan') ?></label>
                    <?=
                    form_dropdown('jenis_urusan', ['' => ">> Pilih", 'W' => 'Wajib', 'P' => 'Pilihan'], $data['jenis_urusan'], "class='form-control'");
                    ?>
                </div>
                <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>">

                <div class="d-flex p-2 bd-highlight">
                    <div class="form-group">
                        <a class="btn btn-sm btn-danger" href="<?= base_url('urusan') ?>">Batal</a>
                        <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function toggle() {
        var x = $('#output_outcome').val();
        if (x == 'OC') {
            $("#id_jenis_urusan").removeClass('hide');
        } else {
            $("#id_jenis_urusan").addClass('hide');
        }
    }
</script>



<?= $this->endSection(); ?>