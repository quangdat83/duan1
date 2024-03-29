
<main class="catalog mb ">
    <div class="boxleft">
        <div class="mb">
        
            <div class="box_title">SẢN PHẨM <strong><?= $tendm ?></strong></div>
            <div class="box_content">
            <?php
             $i = 0;
             foreach ($dssp as $sp) {
                extract($sp);
                $anh = $img_path . $img;
                $linksp="index.php?act=sanphamct&idsp=".$id;
                if (($i == 2) || ($i == 5) || ($i == 8)|| ($i == 11)) {
                   $mr = "";
                } else {
                   $mr = "mr";
                }
                echo '<div class="box_items  ' . $mr . '">
                   <div class="box_items_img">
                   <a class="item_name" href="'.$linksp.'"><img src="' . $anh . '" alt=""></a>
                      <div class="add" href="">ADD TO CART</div>
                   </div>
                    <a class="item_name" href="'.$linksp.'">' . $name . '</a>
                    <p class="price">$' . $price . '</p>
                    
                 </div>';
                $i += 1;
             }
            ?>
            </div>
        </div>
    </div>

   
    <?php include 'boxright.php'; ?>


</main>