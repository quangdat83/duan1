<?php
function load_binhluan($idsp)
{
    $sql = "
SELECT binhluan.noidung,binhluan.ngaybinhluan,taikhoan.user FROM `binhluan`
LEFT JOIN taikhoan ON binhluan.iduser=taikhoan.id
LEFT JOIN sanpham ON binhluan.idpro=sanpham.id
WHERE sanpham.id=$idsp
";
    $result = pdo_query($sql);
    return $result;
}
function them_binhluan($idpro, $noidung,$iduser)
{
    $date = date('Y-m-d');
    $sql = "
    INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan)
    VALUES('$noidung','$iduser','$idpro','$date');
    ";
    pdo_execute($sql);
}
function loadall_binhluan($idpro)
{
    $sql = "select * from binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function xoa_binhluan($id)
{
    $sql = 'delete from binhluan where id=' . $id;
    pdo_execute($sql);
}
