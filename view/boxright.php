<div class="boxright">
    <div class="mb">
        <div class="box_title">TÀI KHOẢN</div>
        <div class="box_content form_account">
            <?php
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
                // Tiếp tục sử dụng các biến đã được giải nén
            ?>

            <h4>Hello</h4><br>
            <?= $user ?>

            <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li class="form_li"><a href="index.php?act=edit_taikhoan">Cap nhat tai khoan</a></li>
            <?php
            if ($role==1) {
            ?>
            <li class="form_li"><a href="admin/index.php">Dang nhap Admin</a></li>
            <?php } ?>
            <li class="form_li"><a href="index.php?act=thoat">Thoat</a></li>
            <?php
            } else {
            ?>
            <form action="index.php?act=dangnhap" method="post">
            <h4>Tên đăng nhập</h4><br>
            <input type="text" name="user">
            <h4>Mật khẩu</h4><br>
            <input type="password" name="pass"><br>
            <input type="checkbox" name="">Ghi nhớ tài khoản?
            <br><input type="submit" name="dangnhap" value="Đăng nhập">
            </form>
            <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm=" . $id;
                    echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
                }
                ?>

            </ul>
        </div>
        <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
                <input type="submit" name="timkiem" value="Tim kiem">
            </form>
        </div>
    </div>
    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <?php
        foreach ($dstop10 as $top) {
            extract($top);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $anh = $img_path . $img;
            echo '<div class="selling_products" style="width:100%;">
            <a class="item_name" href="' . $linksp . '"><img src="' . $anh . '" alt="anh"></a>
               <a href="' . $linksp . '">' . $name . '</a>
             </div>';
        }
        ?>
    </div>
</div>