
<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">Cap nhat tai khoan</div>
            <div class="box_content">
                <?php 
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                ?>
            <form action="index.php?act=edit_taikhoan" method="post" class="form_account">
                <label for="">Email</label>
                <input type="email" name="email" id="" value="<?= $email ?>">
                <label for="">User</label>
                <input type="text" name="user" id="" value="<?= $user ?>">
                <label for="">Password</label>
                <input type="password" name="pass" id="" value="<?= $pass ?>">
                <label for="">Address</label>
                <input type="text" name="address" id="" value="<?= $address ?>">
                <label for="">Phone</label>
                <input type="text" name="rel" id="" value="<?= $rel ?>">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" value="Cap nhat" name="capnhat">
                <input type="reset" value="Nhap lai">
            </form>
            <p style="color: red;">
                <?php 
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
            </p>
            </div>
        </div>
        
    </div>

   
    <?php include 'view/boxright.php'; ?>


</main>