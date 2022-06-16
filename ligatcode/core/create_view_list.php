<?php
$string = "
<?= \$this->extend('layout/seantheme'); ?>
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
    <h4 class=\"panel-title\">$c_url <?= \$content ?></h4>
</div>
<div class=\"panel-body\">
<div class=\"row\">
				<div class=\"col-md-6\">
					<a href='$c_url/create' class=\"btn btn-sm btn-primary\"><i class=\"fa fa-plus-circle\"></i>
						Buat Baru</a>
				</div>
				<div class=\"col-md-3 pull-right\">
					<form method='get' action=\"\" id=\"searchForm\">
						<div class=\"input-group\">
							<input class=\"form-control\" type='text' name='search' value='<?= \$search ?>' placeholder=\"\" />
							<span class=\"input-group-addon\" onclick='document.getElementById(\"searchForm\").submit();' style=\"cursor: pointer;\">Cari</span>
						</div>
					</form>
				</div>
			</div>

    <div class=\"table-responsive\">
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th>No</th>";
foreach ($non_pk as $row) {
    if (isset($_POST['field_' . $row['column_name']]) && isset($_POST['generate'])) //meedun code selected filed
    {
        $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
    }
    if (isset($_POST['generateall'])) //meedun code selected filed
    {
        $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
    }
}
$string .= "\n\t\t<th>Action</th>
        </tr>
        <tr>
        </thead>";


$string .= "<?php foreach (\$data as \$k => \$v): ?>
        <tr>";

$string .= "\n\t\t\t<td width=\"80px\"><?= \$number++ ?></td>";
foreach ($non_pk as $row) {
    if (isset($_POST['field_' . $row['column_name']]) && isset($_POST['generate'])) //meedun code selected filed
    {
        $string .= "\n\t\t\t<td><?= \$v['" . $row['column_name'] . "'] ?></td>";
    }
    if (isset($_POST['generateall'])) //meedun code selected filed
    {
        $string .= "\n\t\t\t<td><?= \$v['" . $row['column_name'] . "'] ?></td>";
    }
}


$string .= "<td>
<span class=\"float-right\">
                                    <a type=\"button\" class=\"btn btn-sm btn-primary\" href=\"<?= base_url('$c_url/read/'.\$v['$pk'] )?>\"><i class=\"fa fa-search\"></i></a>
                                    <a type=\"button\" class=\"btn btn-sm btn-warning\" href=\"<?= base_url('$c_url/update/'.\$v['$pk'] )?>\"><i class=\"fa fa-edit\"></i></a>
                                    <a type=\"button\" class=\"btn btn-sm btn-danger\" href=\"<?= base_url('$c_url/delete/'.\$v['$pk'] )?>\" onclick=\"javascript: return confirm('Delete \nAre You Sure ?')\"><i class=\"fa fa-trash\"></i></a>
                                </span>
            </td>
            <?php  endforeach; ?>
        </tbody>
    </table>
    <!-- pagination -->
    <?php echo \$pager->links() ?>
</div>
<?= \$this->endSection(); ?>
</div>";

$result_view_list = createFile($string, $target . "views/" . $c_url . "/" . $v_list_file);
