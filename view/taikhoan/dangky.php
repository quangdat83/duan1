
<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">Dang  ky thanh vien</div>
            <div class="box_content">
            <form action="index.php?act=dangky" method="post" class="form_account">
                <label for="">Email</label>
                <input type="email" name="email" id="">
                <label for="">User</label>
                <input type="text" name="user" id="">
                <label for="">Password</label>
                <input type="password" name="pass" id="">
                <input type="submit" value="Dang ky" name="dangky">
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