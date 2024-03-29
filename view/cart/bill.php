<style>
    td {
        padding: 0 20px;
    }
</style>
<main class="catalog mb ">
    <div class="boxleft">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="mb">
                <div class="box_title"> Thông tin đặt hàng</div>
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
                            <td> Người đặt hàng</td>
                            <td><input type="text" name="name" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <td> Địa chỉ</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td> Số điện thoại</td>
                            <td><input type="text" name="rel" value="<?= $rel ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mb">
                <div class="box_title"> Phương thức thanh toán</div>
                <div class="box_content">
                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="pttt" checked> Trả tiền khi nhận hàng</td>
                            <td><input type="radio" value="2" name="pttt"> Chuyển khoản ngân hàng</td>
                            <td><input type="radio" value="3" name="pttt"> Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="mb">
                <div class="box_title"> Thông tin giỏ hàng</div>
                <div class="box_content">
                    <table>
                    

                        <?php
                        viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
            <a href="index.php?act=billcomfirm"><input type="button" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang"></a> 
        </form>
    </div>

    
</main>