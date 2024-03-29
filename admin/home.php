<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .container{
    margin: 0 auto;
    width: 100%;
}
  .form{
    max-width: 600px;
    margin:0 auto;
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

<div class="container"> <br><br>
  <h2 style="text-align: center; margin-bottom: 30px;">THÊM MỚI LOẠI HÀNG HÓA</h2>
    <div class="form">
      <form action="index.php?act=adddm" method="post">
        <div class="form-control">
           <!-- <label> Mã loại </label> <br> -->
            <input type="text" name="maloai" placeholder="nhập vào mã loại">
        </div>
        <div class="form-control">
            <!-- <label>Tên loại </label> <br> -->
            <input type="text" name="tenloai" placeholder="nhập vào tên">
        </div><br>
        <div class="action">
          <div class="form-control" id="button" style="text-align: center;">
            <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI"><br>
          </div>
          <div class="form-control" id="button" style="text-align: center;">
            <input  class="mr20" type="reset" value="NHẬP LẠI">
          </div>
          <div class="form-control" id="button" style="text-align: center;">
            <a href="index.php?act=lisdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
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

