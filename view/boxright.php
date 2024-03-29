
<div class="boxright">
  

    <!-- DANH MUC -->
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm=" . $id;
                    echo '<li><a href="' . $linkdm . '" >' . $name . '</a></li>';
                }
                ?> 

            </ul>
        </div>
        <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
                <input type="submit" name="timkiem" value="Tim kiem">
            </form>
        </div>
    </div>

    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div><br>
        <?php
        foreach ($dstop10 as $top) {
            extract($top);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $anh = $img_path . $img;
            echo '<div class="selling_products" style="width:100%;">
            <a class="item_name" href="' . $linksp . '"><img src="' . $anh . '" alt="anh"></a>
               <a href="' . $linksp . '">' . $name . '</a>
             </div>';
        }
        ?>
    </div>
</div>