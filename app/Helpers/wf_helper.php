<?php

function wfApp($name = 'APP_NAME')
{
    $db = db_connect();
    return @$db->query("select * from sy_parsys where par_name='$name'")->getRow()->par_val;
}


function wfDebug($data)
{
    echo "<pre>";
    print_r($data);
    die();
}

function nomorTabel($currentPage, $perPage)
{
    if (is_null($currentPage)) {
        $nomor = 1;
    } else {
        $nomor = 1 + ($perPage * ($currentPage - 1));
    }
    return $nomor;
}

function wfCombo($tbl, $id, $nm, $add_opt = [])
{
    $db = \Config\Database::connect();
    $data =  $db->query("select $id,$nm as name from $tbl")->getResultArray();
    $res = array();
    $res = $add_opt;
    if ($add_opt == []) {
        $res[] = ">> Pilih data " . ucwords(strtolower(str_replace('_', ' ', $tbl)));
    }
    foreach ($data as $v) {
        $res[$v[$id]] = $v['name'];
    }
    return $res;
}

function wfComboCategory($key, $add_opt = [])
{
    $db = \Config\Database::connect();
    $data =  $db->query("select id,name from sy_category where `key`='$key'")->getResultArray();
    $res = array();
    $res = $add_opt;
    if ($add_opt == []) {
        $res[] = ">> Pilih " . ucwords(strtolower(str_replace('_', ' ', $key)));
    }
    foreach ($data as $v) {
        $res[$v['id']] = $v['name'];
    }
    return $res;
}

function wfGetCategory($id = "")
{
    if ($id == "") {
        return "-";
    }
    $db = \Config\Database::connect();
    return $db->query("select name from sy_category where id=$id")->getRow()->name;
}

function wfGetRow($tbl, $where = "1=1")
{

    $db = \Config\Database::connect();
    return @$db->query("select * from $tbl where $where")->getRow();
}


//CI4
// $UserModel->save($data);
// $lastid = $UserModel->insertID;
// ===========
// jika db_connect() pakai ->insertID();