<main class="catalog  mb ">

   <div class="boxleft">
      <div class="banner">
         <img id="banner" src="view/img/1.jpg" alt="">
         <!-- <button class="pre" onclick="pre()">&#10094;</button>
         <button class="next" onclick="next()">&#10095;</button> -->
      </div>
      <div class="banner">
         <img id="banner" src="view/img/1.jpg" alt="">
      </div>
      <div class="banner">
         <img id="banner" src="view/img/2.jpg" alt="">
      </div>
      <div class="banner">
         <img id="banner" src="view/img/33.jpg" alt="">
      </div>
      <div class="banner">
         <img id="banner" src="view/img/1.jpg" alt="">
      </div>
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
               <a class="item_name" href="' . $linksp . '"><img src="' . $anh . '" alt=""></a>
               <a href="index.php?act=addtocart"><div class="add">ADD TO CART</div></a>
               </div>
                <a class="item_name" href="' . $linksp . '">' . $name . '</a>
                <p class="price">$' . $price . '</p>
                <div>
               <form action="index.php?act=addtocart" method="post">
                  <input type="hidden" name="id" value="'.$id.'">
                  <input type="hidden" name="name" value="'.$name.'">
                  <input type="hidden" name="img" value="'.$img.'">
                  <input type="hidden" name="price" value="'.$price.'">
                  <input style="padding: 4px;" type="submit" name="addtocart" value="Them vao gio hang">
               </form>
</div>
             </div>';
            $i += 1;
         }
         ?>

      </div>
   </div>

   <?php include 'boxright.php'; ?>


   </div>

</main>