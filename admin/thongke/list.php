<div class="row2">
    <div class="row2 font_title">
        <h1>Thong ke san pham theo loai</h1>
    </div>
    <div class="row2 form_content ">
        <div class="row2 mb10 formds_loai">
            <table style="text-align: center;">
                <tr>
                    <th>Ma danh muc</th>
                    <th>Ten danh muc</th>
                    <th>So luong</th>
                    <th>Gia cao nhat</th>
                    <th>Gia thap nhat</th>
                    <th>Gia trung binh</th>
                </tr>
                <?php 
                foreach ($listthongke as $tk) {
                    extract($tk);
                    echo '<tr>
                    <td>'.$madm.'</td>
                    <td>'.$tendm.'</td>
                    <td>'.$sluongsp.'</td>
                    <td>'.$maxgia.'</td>
                    <td>'.$mingia.'</td>
                    <td>'.$avggia.'</td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10 ">
            <a href="index.php?act=bieudo"><input type="button" value="Xem bieu do"></a>
        </div>
    </div>
</div>