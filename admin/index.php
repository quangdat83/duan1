<?php
include '../model/pdo.php';
include 'header.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';
include '../model/cart.php';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        //==================== CONTROLLER DANH MỤC ========================//

        case 'adddm':
            if (isset($_POST['themmoi']) &&  $_POST['themmoi']) {
                $tenloai = $_POST['tenloai'];
                them_danhmuc($tenloai);
                $thongbao = 'them thanh cong';
            }
            include 'danhmuc/add.php';
            break;
        case 'lisdm':
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoa_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $edit = loadone_danhmuc($_GET['id']);
            }
            include 'danhmuc/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['capnhap']) &&  $_POST['capnhap']) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($tenloai, $id);
                $thongbao = 'cap nhap thanh cong';
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include 'taikhoan/list.php';
            break;

           //==================== CONTROLLER SẢN PHẨM========================//


        case 'addsp':
            
            if (isset($_POST['themmoi']) &&  $_POST['themmoi']) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $anhsp = $_FILES['anhsp']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                them_sanpham($tensp, $giasp, $anhsp, $mota, $iddm);
                $thongbao = 'them thanh cong';
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/add.php';
            break;

        case 'lissp':
            if (isset($_POST['listok']) &&  $_POST['listok']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include 'sanpham/list.php';
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoa_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include 'sanpham/list.php';
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/update.php';
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) &&  $_POST['capnhat']) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $anhsp = $_FILES['anhsp']['name'];
                $target_dir = '../upload/';
                $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                update_sanpham($tensp, $giasp, $anhsp, $mota, $iddm, $id);
                $thongbao = 'cap nhap thanh cong';
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include 'sanpham/list.php';
            break;

            //==================== CONTROLLER BÌNH LUẬN ========================//

        case 'dsbl':
            $listbinhluan = loadall_binhluan(0);
            include 'binhluan/list.php';
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoa_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);
            include 'binhluan/list.php';
            break;

           //==================== CONTROLLER THỐNG KÊ ========================//

        case 'thongke':
            $listthongke = loadall_thongke();
            include 'thongke/list.php';
            break;

            //==================== CONTROLLER BIỂU ĐỒ ========================//
        case 'bieudo':
            $listthongke = loadall_thongke();
            include 'thongke/bieudo.php';
            break;
        default:
            include 'home.php';
            break;

           
    }
} else {
    include 'home.php';
}
include 'footer.php';
