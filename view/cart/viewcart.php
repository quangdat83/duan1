
<style>
    td {
        padding: 0 20px;
    }
</style>

<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">GIỎ HÀNG</div>
            <div class="box_content">
                <table>
                    

                    <?php
                   viewcart(1);
                    ?>
                </table>
            </div>
        </div>

        <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a> <a href="index.php?act=viewcart"><input type="button" value="Xoa"></a>
    </div>
   
</main>