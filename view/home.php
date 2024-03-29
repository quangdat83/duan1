<html>

<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4"> SẢN PHẨM</h1> <br>
		</div>
	</div>
</div>

<main class="catalog  mb ">
<div></div>
<br>
<br>
      <div class="items">
         <?php
         $i = 0;
         foreach ($spnew as $sp) {
            extract($sp);
            $anh = $img_path . $img;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            if (($i == 2) || ($i == 5) || ($i == 8)) {
               $mr = "";
            } else {
               $mr = "mr";
            }
            echo '<div class="box_items  ' . $mr . '">
               <div class="box_items_img">
               <a class="item_name" href="' . $linksp . '"><img src="' . $anh . '" alt="" heigh="20px"></a>
               
               </div>
                <a class="item_name" href="' . $linksp . '">' . $name . '</a>
                <p class="price">$' . $price . '</p>
                <div>
               <form action="index.php?act=addtocart" method="post">
                  <input type="hidden" name="id" value="'.$id.'">
                  <input type="hidden" name="name" value="'.$name.'">
                  <input type="hidden" name="img" value="'.$img.'">
                  <input type="hidden" name="price" value="'.$price.'">
                  <input style="padding: 4px;" type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG">
               </form>
</div>
             </div>';
            $i += 1;
         }
         ?>
         <img src="" alt="" height="" width="">

      </div>
   </div>
</main>

</html>