<?php
$string = "<?= \$this->extend('layout/seantheme'); ?>
<?= \$this->section('content'); ?>

<div class=\"col-md-12\">
<div class=\"panel panel-inverse\">
<div class=\"panel-heading\">
    <div class=\"panel-heading-btn\">
        <a href=\"javascript:;\" class=\"btn btn-xs btn-icon btn-circle btn-default\" data-click=\"panel-expand\"><i class=\"fa fa-expand\"></i></a>
        <a href=\"javascript:;\" class=\"btn btn-xs btn-icon btn-circle btn-success\" data-click=\"panel-reload\"><i class=\"fa fa-repeat\"></i></a>
        <a href=\"javascript:;\" class=\"btn btn-xs btn-icon btn-circle btn-warning\" data-click=\"panel-collapse\"><i class=\"fa fa-minus\"></i></a>
        <a href=\"javascript:;\" class=\"btn btn-xs btn-icon btn-circle btn-danger\" data-click=\"panel-remove\"><i class=\"fa fa-times\"></i></a>
    </div>
    <h4 class=\"panel-title\"><?= \$content ?> Table</h4>
</div>
<div class=\"panel-body\">
<div class=\"table-responsive\">
<table class=\"table table-light table-striped\">
    <tbody>";

foreach ($non_pk as $row) {
    if (isset($_POST['field_' . $row['column_name']]) && isset($_POST['generate']))  //meedun code selected filed
    {
        $string .= "\n\t    <tr><th width=\"15%\">" . label($row["column_name"]) . "</th><td>: \t<?php echo \$data['" . $row["column_name"] . "']; ?></td></tr>";
    }
    if (isset($_POST['generateall']))  //meedun code selected filed
    {
        $string .= "\n\t    <tr><th>" . label($row["column_name"]) . "</th><td>: \t<?= \$data['" . $row["column_name"] . "']; ?></td></tr>";
    }
}
$string .= "
</tbody>
</table>
    <div class=\"d-flex p-2 bd-highlight\">
        <a class=\"btn btn-sm btn-danger\" href=\"<?= \base_url('$c_url') ?>\">Kembali ke list</a>
    </div>
<?= \$this->endSection(); ?>
</div>";

$result_view_read = createFile($string, $target . "views/" . $c_url . "/" . $v_read_file);
