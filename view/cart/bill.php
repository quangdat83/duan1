<style>
    td {
        padding: 0 20px;
    }
</style>
<main class="catalog mb ">
    <div class="boxleft">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="mb">
                <div class="box_title">Thong tin dat hang</div>
                <div class="box_content">
                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $rel = $_SESSION['user']['rel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $rel = "";
                        }
                        ?>
                        <tr>
                            <td>Nguoi dat hang</td>
                            <td><input type="text" name="name" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <td>Dia chi</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Dien thoai</td>
                            <td><input type="text" name="rel" value="<?= $rel ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mb">
                <div class="box_title">Phuong thuc thanh toan</div>
                <div class="box_content">
                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="pttt" checked>Tra tien khi nhan hang</td>
                            <td><input type="radio" value="2" name="pttt">Chuyen khoan ngan hang</td>
                            <td><input type="radio" value="3" name="pttt">Thanh toan online</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="mb">
                <div class="box_title">Thong tin gio hang</div>
                <div class="box_content">
                    <table>
                    

                        <?php
                        viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
            <a href="index.php?act=billcomfirm"><input type="button" value="Dong y dat hang" name="dongydathang"></a> 
        </form>
    </div>

    <?php include 'view/boxright.php'; ?>
</main>