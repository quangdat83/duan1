<style>
    td {
        padding: 0 20px;
    }
</style>
<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">Gio hang</div>
            <div class="box_content">
                <table>
                    

                    <?php
                   viewcart(1);
                    ?>
                </table>
            </div>
        </div>

        <a href="index.php?act=bill"><input type="button" value="Tiep tuc dat hang"></a> <a href="index.php?act=delcart"><input type="button" value="Xoa"></a>
    </div>
    <?php include 'view/boxright.php'; ?>
</main>