<?php
$menus = [['ikk', 'ikk'],['makro', 'makro'],['rumus', 'rumus'],['sub_urusan', 'sub_urusan'],['sy_category', 'sy_category'],['sy_menu', 'sy_menu'],['sy_parsys', 'sy_parsys'],['sy_user', 'sy_user'],['urusan', 'urusan'],
];
?>
<ul class="nav flex-column">
    <?php foreach ($menus as $m) : ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() . '/' . $m[0] ?>"> <?= $m[1] ?></a>
        </li>
    <?php endforeach; ?>
</ul>



<?php 
/* End of file views/layout/sidebar.php */
/* Location: ./app/views/layout */
/* Please DO NOT modify this information : */
/* Generated by Ligatcode Codeigniter 4 CRUD Generator 2022-04-12 03:28:01 */
?>