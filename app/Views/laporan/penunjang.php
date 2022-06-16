<?= $this->extend('layout/print'); ?>
<?= $this->section('content'); ?>
<!doctype html>


<div class="container-fluid" id="laporan_lppd">
    <div class="text-bold">LAMPIRAN INDIKATOR KINERJA KUNCI FUNGSI PENUNJANG URUSAN PEMERINTAHAN
    </div>

    <div class="table-responsive">
        <table class="table table-bordered lppd" border="1" style=" border-collapse: collapse;" id="table-lppd">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">URUSAN</th>
                    <th rowspan="2">NO IKK</th>
                    <th rowspan="2">IKK OUTCOME</th>
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
                            <td rowspan="<?= count($v1) + 1 ?>"><?= ($no++) ?></td>
                            <td rowspan="<?= count($v1) + 1 ?>"><?= $k ?></td>
                            <!-- sub urusan -->
                            <!-- <td colspan="7"><?= $k1; ?></td> -->
                    </tr>
                    <?php
                            $no2 = 1;
                            foreach ($v1 as $k2 => $v2) { ?>
                        <td><?= ($no2++) ?></td>
                        <td><?= $k2; ?></td>
                        <td><?= $k2; ?></td>
                        <td><?= $k2; ?></td>
                        <td><?= $k2; ?></td>
                        <td><?= $k2; ?></td>
                        <td><?= $k2; ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>