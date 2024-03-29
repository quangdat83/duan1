<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_top = '<td style="font-weight: bold;">Thao tác</td>';
    } else {
        $xoasp_top = "";
        $xoasp_duoi = "";
    }
    echo '<tr>
    <td style="font-weight: bold;">Hình</td>
    <td style="font-weight: bold;">Sản phẩm</td>
    <td style="font-weight: bold;">Đơn giá</td>
    <td style="font-weight: bold;">Số lượng</td>
    <td style="font-weight: bold;">Thành tiền</td> 
    ' . $xoasp_top . ' 
</tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $anh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_duoi = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="xoa"></a></td>';
        } else {
            $xoasp_duoi = "";
        }
        echo '
                    <tr>
                    <td><img src="' . $anh . '" height="80px"></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[3] . '</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . $ttien . '</td>
                    ' . $xoasp_duoi . '
                    </tr>';
        $i += 1;
    }
    echo '
                    <tr><br>
                    <td colspan="4">TỔNG ĐƠN HÀNG</td>
                    <td>' . $tong . '</td>
                    <td></td>
                    </tr>';
}
function billct($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    echo '<tr>
    <td style="font-weight: bold;">Hình</td>
    <td style="font-weight: bold;">Sản phẩm</td>
    <td style="font-weight: bold;">Đơn giá</td>
    <td style="font-weight: bold;">Số lượng</td>
    <td style="font-weight: bold;">Thành tiền</td> 
    </tr>';
    foreach ($listbill as $cart) {
        $anh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];

        echo '
                    <tr>
                    <td><img src="' . $anh . '" height="80px"></td>
                    <td>' . $cart['name'] . '</td>
                    <td>' . $cart['price'] . '</td>
                    <td>' . $cart['soluong'] . '</td>
                    <td>' . $cart['thanhtien'] . '</td>
                    </tr>';
        $i += 1;
    }
    echo '
                    <tr><br>
                    <td colspan="4">TỔNG ĐƠN HÀNG</td>
                    <td>' . $tong . '</td>
                    </tr>';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function them_bill($name, $email, $address, $rel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(bill_name,bill_email,bill_address,bill_rel,bill_pttt,ngaydathang,total) values('$name', '$email', '$address', '$rel', '$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_lastInsertId($sql);
}
function them_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser', '$idpro', '$img', '$name', '$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" .  $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" .  $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_thongke()
{
    $sql = "select danhmuc.id as madm,danhmuc.name as tendm,count(sanpham.id) as sluongsp,min(sanpham.price) as mingia,max(sanpham.price) as maxgia ,avg(sanpham.price) as avggia";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
