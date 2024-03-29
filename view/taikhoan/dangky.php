<style>
  .thongbao{
    color: red;
  }
</style>
<hr> <br> <br> <br> 
  <div class="container-fluid bg">
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-6 col-xs-12 row-container">
        <form action="index.php?act=dangky" method="post">
          <h1> Đăng ký tài khoản</h1>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="user">User:</label>
            <input type="user" class="form-control" name="user" placeholder="Enter user">
          </div>
          <div class="form-group">
            <label for="password" class="label"> Mật khẩu:</label>
            <input type="password" class="form-control" name="pass" placeholder="Password">            
          </div>
           
          <input type="submit" class="btn btn-success btn-block my-3" name="dangky" value ="Đăng ký" style="background-color: blue;font-size: larger;">
        </form>
        <h2 class="thongbao">
          <?php
          if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
          }
          ?>
        </h2>
      </div>
    </div>
  </div>
<br> <br> <br>
