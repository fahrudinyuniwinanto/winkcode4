<?= $this->extend('layout/seantheme') ?>
<?= $this->section('content') ?>
<!-- begin row -->
<div class="row">
    <?php
    // wfDebug((object)$counter);
    foreach ($counter as $k => $v) : ?>
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-<?= $v['color'] ?>">
                <div class="stats-icon"><i class="fa <?= $v['icon'] ?>"></i></div>
                <div class="stats-info">
                    <h4><?= $v['title'] ?></h4>
                    <p><?= $v['total'] ?></p>
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    <?php endforeach ?>

</div>
<!-- end row -->

<?= $this->endSection(); ?>