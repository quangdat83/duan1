<html>
    <style>
        main{
    box-sizing: border-box;
    max-width: 1000px;
    margin: auto;
}
img{
    border-radius: 3px;
    object-fit: cover;
}
.topmain{
    height: 70px;
    background-color: #e9ecef;
}
.lead{
    margin-left: 50px;
    padding: 5px;
    display: flex;
    padding-top: 15px;
}
.lead a{
    padding: 0 5px;
}
.lead p{
    padding: 0 5px;
}
.color button{
    padding: 15px;
    border-radius: 50px;
    border: 0;
    margin: 0 5px;
}
.add button{
    padding: 20px 80px;
    border: 1px solid;
    border-radius: 10px;
}
    </style>

<div class="topmain">
    <div class="lead">
        <a  href="trangchu.html">Trang chủ</a> >
        <a  href="spnoibat.html"> Sản phẩm</a> >
        <?php
         echo '<a class="item_name" href="'.$linksp.'">' . $name . '</a>';
        ?>
    </div>
</div><br>
<main>
    <?php
	extract($onesp)
    ?>
    <div class="d-flex flex-row mb-3">
        <div class="d-flex flex-column mb-3">
            <!-- <div class="p-2"><img src="image/6.jpg" alt="" width="70" height="auto"></div>
            <div class="p-2"><img src="image/6.jpg" alt="" width="70" height="auto"></div>
            <div class="p-2"><img src="image/6.jpg" alt="" width="70" height="auto"></div>
            <div class="p-2"><img src="image/6.jpg" alt="" width="70" height="auto"></div>
            <div class="p-2"><img src="image/6.jpg" alt="" width="70" height="auto"></div> -->
			<?php
            $anh=$img_path.$img;
            echo '<div style="text-align: center;"><img width = "70" height = "auto" src="'.$anh.'"></img></div>';
            echo '<div style="text-align: center;"><img width = "70" height = "auto" src="'.$anh.'"></img></div>';
            echo '<div style="text-align: center;"><img width = "70" height = "auto" src="'.$anh.'"></img></div>';
            echo '<div style="text-align: center;"><img width = "70" height = "auto" src="'.$anh.'"></img></div>';
            echo '<div style="text-align: center;"><img width = "70" height = "auto" src="'.$anh.'"></img></div>';
            ?>
        </div>
        <div class="bigImg" style="margin: 0 50px;">
            <!-- <img src="image/6.jpg" alt="" width="500px" height="600px" > -->
			<?php
            $anh=$img_path.$img;
            echo '<div style="text-align: center;"><img width = "500px" height = "600px" src="'.$anh.'"></img></div>';
            ?>
        </div>
        <div class="detail">
            <h1><?php $name?></h1><br>
            <h4><?php $price?></h4><br>
            <h4>Chi tiết sản phẩm: </h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum praesentium cumque quis impedit delectus veniam.
                 Hic, magni eligendi, recusandae praesentium obcaecati commodi, facilis nobis vel iste nemo nam? Maxime, laborum!</p>
            <h4>Size:</h4>
            <div class="size">
                <button type="button" class="btn btn-secondary">L </button>
                <button type="button" class="btn btn-secondary">XL</button>
                <button type="button" class="btn btn-secondary">XS</button>
            </div>
            <h4>Color:</h4>
            <div class="color">
                <button style="background-color: blue;"></button>
                <button style="background-color: black;"></button>
                <button style="background-color: red;"></button>
            </div> <br>
        
            <!-- gia -->
            <?php
             echo '<a class="price">$' . $price . '</a>';
            ?>
            
            <div class="add">
               
                <div class="items">
         <?php
         $i = 0;
        echo'
               <form action="index.php?act=addtocart" method="post">
                  <input type="hidden" name="id" value="'.$id.'">
                  <input type="hidden" name="name" value="'.$name.'">
                  <input type="hidden" name="img" value="'.$img.'">
                  <input type="hidden" name="price" value="'.$price.'">
                  <input style="padding: 4px;" type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG">
               </form>
              '
         ?>

         <img src="" alt="" height="" width="">

      </div>
            </div>
        </div>
    </div>
    <hr>
    <div>
        <h1>Có thể bạn sẽ thích</h1>
        <div class="d-flex justify-content-between">
            <img src="img/1.jpg" alt="" width="450px" height="auto">
            <img src="img/2.jpg" alt="" width="450px" height="auto">
            <img src="img/3.jpg" alt="" width="450px" height="auto">
			<?php
                foreach ($sp_cungloai as $spcl) {
                    extract($spcl);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                }
                ?>
        </div>
    </div>
    <hr>
</main>


</html>
