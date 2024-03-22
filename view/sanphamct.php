<style>
    td{
        padding: 0 20px;
    }
</style>
<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <?php
            extract($onesp) 
            ?>
            <div class="box_title">San pham chi tiet</div>
            <div class="box_content">
            <?php
            $anh=$img_path.$img;
            echo '<div style="text-align: center;"><img style="width: 270px;" src="'.$anh.'"></img></div>';
            echo $mota;

            ?>
            </div>
        </div>
        <div class="mb">
            <div class="box_title">Binh luan</div>
            <div class="box_content">
            <table>
                <?php
                foreach ($binhluan as $bl) {
                    extract($bl);
                    echo '
                <tr>
                    <td>'.$noidung.'</td>
                    <td>'.$user.'</td>
                    <td>'.date("d/m/Y", strtotime($ngaybinhluan)).'</td>
                </tr>';
                }
                ?>
            </table>
            </div>
            <div>
                <form action="index.php?act=sanphamct&idsp=<?= $id ?>" method="post">
                    <input type="hidden" name="idpro" value="<?= $id ?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibl" value="gui binh luan">

                </form>
            </div>
        </div>
        <div class="mb">
            <div class="box_title">San pham cung loai</div>
            <div class="box_content">
                <?php
                foreach ($sp_cungloai as $spcl) {
                    extract($spcl);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                }
                ?>
            </div>
        </div>
    </div>

   
    <?php include 'boxright.php'; ?>


</main>