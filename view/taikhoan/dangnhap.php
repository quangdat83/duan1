<style>
    .form_li{
        list-style: none;
    }
</style>
<div class="mb">
    <div class="box_content form_account">
        <?php
            if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
                // Tiếp tục sử dụng các biến đã được giải nén
            ?>

        <h4>Hello</h4><br>
        <?= $user ?>

        <li class="form_li"><a href="index.php?act=quenmk">Quên mật dkhẩu</a></li>
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

        <div class="container-fluid bg">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 col-xs-12 row-container">
                    <form action="index.php?act=dangnhap" method="post">
                        <h1 style="text-align: center;" >ĐĂNG NHẬP</h1>
                        <div class="form-group">
                            <label for="user">User:</label>
                            <input type="user" class="form-control" name="user" placeholder="Enter user">
                        </div>
                        <div class="form-group">
                            <label for="password" class="label"> Mật khẩu:</label>
                            <input type="password" class="form-control" name="pass" placeholder="Password">
                        </div>
                        <input type="checkbox" name="">Ghi nhớ tài khoản?
                        <br><input type="submit" class="btn btn-success btn-block my-3" name="dangnhap"
                            value="Đăng nhập" style="background-color: blue;font-size: larger;">
                        
                        <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                        <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                    </form>

                </div>
            </div>
        </div>
        <?php
            }
            ?>
    </div>
</div>