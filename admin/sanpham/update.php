<style>
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
    }
</style>
<?php
if (is_array($sanpham)) {
  extract($sanpham);
}
$hinh = '../upload/' . $img;
if (is_file($hinh)) {
  $hinh = "<img src='" . $hinh . "' height='80'>";
} else {
  $hinh = 'no photo';
}
?>
<div class="row2">
  <div class="row2 font_title">
    <h1>EDIT LOẠI SAN PHAM</h1>
  </div>
  <div class="row2 form_content ">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="row2 mb10">
        <select name="iddm" style="padding: 5px;">
          <option value="0" selected>Tat ca</option>
          <?php
          foreach ($listdanhmuc as $key=>$value) {
            // extract($danhmuc);
            if ($iddm == $value['id']) {
              echo '<option value="' . $value['id'] . '"selected>' . $value['name'] . '</option>';
            } else {
              echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
            }
          }
          ?>
        </select>
      </div>
      <div class="row2 mb10">
        <label>Tên san pham </label> <br>
        <input type="text" name="tensp" placeholder="nhập vào tên" value="<?= $name ?>">
      </div>
      <div class="row2 mb10">
        <label>Gia san pham </label> <br>
        <input type="text" name="giasp" placeholder="nhập vào tên" value="<?= $price ?>">
      </div>
      <div class="row2 mb10">
        <label>Anh san pham </label> <br>
        <input type="file" name="anhsp">
        <?= $hinh ?>
      </div>
      <div class="row2 mb10">
        <label>Mo ta san pham </label> <br>
        <textarea name="mota" id="" cols="30" rows="10"><?= $mota ?></textarea>
      </div>

      <div class="row mb10 ">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
        <input class="mr20" type="reset" value="NHẬP LẠI">

        <a href="index.php?act=lissp"><input class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
      ?>
    </form>
  </div>
</div>

<!-- END HEADER -->


</div>