<?= $this->extend('layout/print'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid" id="laporan_lppd">
    <div class="text-bold">LAMPIRAN INDIKATOR KINERJA KUNCI MAKRO
    </div>

    <div class="table-responsive">
        <table class="table table-bordered lppd" border="1" style=" border-collapse: collapse;" id="table-lppd">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>INDIKATOR KINERJA KUNCI</th>
                    <th>CAPAIAN KINERJA <?= intVal($tahun - 1) ?></th>
                    <th>CAPAIAN KINERJA <?= $tahun ?></th>
                    <th>LAJU KINERJA</th>
                </tr>

            </thead>
            <tbody>
                <?php
                $no = 1;
                $theikk = '';
                foreach ($data as $k => $v) {
                    if ($v->ikk == $theikk) {
                        continue;
                    }
                    $theikk = $v->ikk;
                ?>

                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $v->ikk ?></td>
                        <td><?= @db_connect()->query("select capaian_kinerja from makro where tahun='$tahun' and ikk='$v->ikk'")->getRow()->capaian_kinerja ?></td>
                        <td><?= @db_connect()->query("select capaian_kinerja from makro where tahun='" . intVal($tahun - 1) . "' and ikk='$v->ikk'")->getRow()->capaian_kinerja ?></td>
                        <td><?= $v->laju_kinerja ?></td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>