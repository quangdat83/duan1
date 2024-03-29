<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .container{
    margin: 0 auto;
    width: 200%;
}
  .form{
    max-width: 800px;
    margin:0 auto;
    height:650px;
    padding:50px;
    box-shadow: rgba(2, 2, 2, 0.2) 0px 7px 29px 0px;
    background-color: #f0f0f0;
    }
    .form input{
        border: none;
        max-width: 100%;
    }
    .form-control{
        margin: 10px 0;
        text-align: start;
    }
    #button input{
        background-color: #CA6D68;
    }
    #button{
        background-color: #CA6D68;
        width: 40%;
        margin: auto;
    }
    .action{
      display: flex;
      justify-content: center;
    }
</style>
<div class="container">
<h2 style="text-align: center; margin-bottom: 30px;">THÊM MỚI SẢN PHẨM</h2>
  <div class="form">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
      <div class="form-control">
        <label> Danh muc  </label>
        <select name="iddm" id="">
          <?php
              foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value='.$id.'>'.$name.'</option>';
              }
              ?>

        </select>
      </div>
      <div class="form-control">
        <input type="text" name="tensp" placeholder="Tên Sản Phẩm">
      </div>
      <div class="form-control">
        <input type="text" name="giasp" placeholder="Giá sản phẩm">
      </div>
      <div class="form-control">
        <label>Anh san pham </label>
        <input type="file" name="anhsp">
      </div>
      <div class="form-control">
        <label>Mo ta san pham </label>
        <textarea name="mota" id="" cols="66" rows="10"></textarea>
      </div>
<br><br><br><br> <br><br><br><br> <br><br><br><br>
      <div class="action">
          <div class="form-control" id="button" style="text-align: center;">
            <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI"><br>
          </div>
          <div class="form-control" id="button" style="text-align: center;">
            <input  class="mr20" type="reset" value="NHẬP LẠI">
          </div>
          <div class="form-control" id="button" style="text-align: center;">
            <a href="index.php?act=lissp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
          </div>
        </div>
      <?php
           if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
    </form>
  </div>
</div>

<!-- END HEADER -->


</div>