<?= $this->extend('layout/print'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid" id="laporan_lppd">
    <div class="text-bold">LAMPIRAN INDIKATOR KINERJA KUNCI KELUARAN
    </div>
    <div class="text-bold">OUTPUT - KELUARAN</div>

    <div class="table-responsive">
        <table class="table table-bordered lppd" border="1" style=" border-collapse: collapse;" id="table-lppd">
            <thead>
                <tr>
                    <th rowspan="2" style="width: 2%;">No</th>
                    <th rowspan="2">URUSAN</th>
                    <th rowspan="2" style="width: 2%;">NO IKK</th>
                    <th rowspan="2">IKK HASIL</th>
                    <th rowspan="2">RUMUS/PERSAMAAN</th>
                    <th rowspan="2">SATUAN</th>
                    <th rowspan="1" colspan="2">CAPAIAN KINERJA</th>
                    <th rowspan="2">SUMBER DATA</th>
                </tr>
                <tr>
                    <th colspan="1">ELEMEN DATA</th>
                    <th colspan="1">CAPAIAN KINERJA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data as $k => $v) { ?>

                    <tr>

                        <?php

                        foreach ($v as $k1 => $v1) { ?>
                            <!-- seharusnya count di bawah ini berisi parameter $v2 -->
                            <td rowspan="<?= count($v1) + 1 ?>" class="text-center"><?= ($no) ?></td>
                            <td rowspan="<?= count($v1) + 1 ?>"><?= $k1 ?></td>
                            <!-- sub urusan -->
                            <td colspan="7" class="silver text-center"><?= ($no++ . ". ") . $k1; ?></td>
                    </tr>
                    <?php
                            $no2 = 1;
                            // wfDebug($v1);
                            foreach ($v1 as $k2 => $v2) {
                                // wfDebug($k2);
                    ?>
                        <?php foreach ($v2 as $k3 => $v3) { ?>
                            <td class="text-center"><?= ($no2++) ?></td>
                            <td><?= $k2; ?></td>
                            <td><?= $k3; ?></td>
                            <td><?= $v3->satuan; ?></td>
                            <td><?= $v3->elemen_data; ?></td>
                            <td><?= $v3->capaian; ?></td>
                            <td><?= $v3->sumber_data; ?></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>