<?= $this->extend('layout/print'); ?>
<?= $this->section('content'); ?>
<!doctype html>
<!-- <style type="text/css">
    /* .table thead td {
        text-align: center;
        font-weight: bold;
        vertical-align: middle !important;
        background-color: #c7ccd0;
    } */

    #table-ikk {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #table-ikk td,
    #table-ikk th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #table-ikk tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #table-ikk tr:hover {
        background-color: #ddd;
    }

    #table-ikk th {

        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #04AA6D;
        color: white;
    }
</style> -->

<div class="container-fluid" id="laporan_lppd">
    <div class="text-bold">LAMPIRAN INDIKATOR KINERJA KUNCI KELUARAN
    </div>
    <div class="text-bold">OUTCOME - HASIL</div>

    <div class="table-responsive">
        <table class="table table-bordered lppd" border="1" style=" border-collapse: collapse;" id="table-lppd">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">URUSAN</th>
                    <th rowspan="2">NO IKK</th>
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