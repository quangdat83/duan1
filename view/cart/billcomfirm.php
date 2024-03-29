<style>
    td {
        padding: 0 20px;
    }
</style>
<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">THANKS YOUU</div>
            <div class="box_content">
                <h2>Cảm ơn quý khách đã đặt hàng</h2>
            </div>
        </div>
        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>
        <div class="mb">
            <div class="box_title">Thông tin đơn hàng</div>
            <div class="box_content">
                <li>- Mã đơn hàng: DAM-<?= $bill['id']; ?></li>
                <li>- Ngày đặt hàng: <?= $bill['ngaydathang']; ?></li>
                <li>- Tổng đơn hàng: <?= $bill['total']; ?></li>
                <li>- Phương thức thanh toán<?= $bill['bill_pttt']; ?></li>
            </div>
        </div>
        <div class="mb">
            <div class="box_title"> Thông tin đặt hàng</div>
            <div class="box_content">
                <table>
                    <tr>
                        <td> Người đặt hàng</td>
                        <td><?= $bill['bill_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?= $bill['bill_address'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $bill['bill_email'] ?></td>
                    </tr>
                    <tr>
                        <td> Số điện thoại</td>
                        <td><?= $bill['bill_rel'] ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mb">
            <div class="box_title"> Chi tiết giỏ hàng</div>
            <div class="box_content">
                <table>
                    <?php
                    billct($billct);
                    ?>
                </table>
            </div>
        </div>
        <a href="index.php?act=bill"><input type="button" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang"></a>
    </div>


</main>