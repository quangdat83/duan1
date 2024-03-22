
<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">Quen mat khau</div>
            <div class="box_content">
            <form action="index.php?act=quenmk" method="post" class="form_account">
                <label for="">Email</label>
                <input type="email" name="email" id="">
                <input type="submit" value="Gui" name="guiemail">
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