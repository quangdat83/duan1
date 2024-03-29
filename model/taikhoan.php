<?php
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function them_taikhoan($user, $pass, $email)
{
    $sql = "insert into taikhoan(user,pass,email) values('$user','$pass','$email')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "select * from taikhoan where user='".$user."' and pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "select * from taikhoan where email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id, $user, $pass, $email, $address, $rel)
{
    $sql = "update taikhoan set user ='" . $user . "',pass ='" . $pass . "',email ='" . $email . "',address ='" . $address . "',rel ='" . $rel . "' where id=" . $id;
    pdo_execute($sql);
}
?>