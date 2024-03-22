<?php
function them_sanpham($tensp, $giasp, $anhsp, $mota, $iddm)
{
    $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$anhsp','$mota','$iddm')";
    pdo_execute($sql);
}
function xoa_sanpham($id)
{
    $sql = 'delete from sanpham where id=' . $id;
    pdo_execute($sql);
}
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_tendm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=" .  $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" .  $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm=" . $iddm . " and id <>" .  $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($tensp, $giasp, $anhsp, $mota, $iddm, $id)
{
    if ($anhsp != "")
        $sql = "update sanpham set name ='" . $tensp . "',price ='" . $giasp . "',img ='" . $anhsp . "',mota ='" . $mota . "',iddm ='" . $iddm . "' where id=" . $id;
    else
        $sql = "update sanpham set name ='" . $tensp . "',price ='" . $giasp . "',mota ='" . $mota . "',iddm ='" . $iddm . "' where id=" . $id;
    pdo_execute($sql);
}
