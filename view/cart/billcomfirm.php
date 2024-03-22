<style>
    td {
        padding: 0 20px;
    }
</style>
<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
            <div class="box_title">Cam on</div>
            <div class="box_content">
                <h2>Cam on quy khach da dat hang!</h2>
            </div>
        </div>
        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>
        <div class="mb">
            <div class="box_title">Thong tin don hang</div>
            <div class="box_content">
                <li>- Ma don hang: DAM-<?= $bill['id']; ?></li>
                <li>- Ngay dat hang: <?= $bill['ngaydathang']; ?></li>
                <li>- Tong don hang: <?= $bill['total']; ?></li>
                <li>- Phuong thuc thanh toan<?= $bill['bill_pttt']; ?></li>
            </div>
        </div>
        <div class="mb">
            <div class="box_title">Thong tin dat hang</div>
            <div class="box_content">
                <table>
                    <tr>
                        <td>Nguoi dat hang</td>
                        <td><?= $bill['bill_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Dia chi</td>
                        <td><?= $bill['bill_address'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $bill['bill_email'] ?></td>
                    </tr>
                    <tr>
                        <td>Dien thoai</td>
                        <td><?= $bill['bill_rel'] ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mb">
            <div class="box_title">Chi tiet gio hang</div>
            <div class="box_content">
                <table>
                    <?php
                    billct($billct);
                    ?>
                </table>
            </div>
        </div>
        <a href="index.php?act=bill"><input type="button" value="Dong y dat hang" name="dongydathang"></a>
    </div>

    <?php include 'view/boxright.php'; ?>
</main>