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
<div class="row2">
  <div class="row2 font_title mb">
    <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
  </div>
  <form action="index.php?act=lissp" method="POST">
    <div class="row2 mb10 formds_loai">
      <form action="#" method='post'>
        <input type="text" name="kyw" id="" style="padding: 5px;">
        <select name="iddm" id="" style="padding: 5px;">
          <option value="0" selected>Tat ca</option>
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            echo '<option value=' . $id . '>' . $name . '</option>';
          }
          ?>

        </select>
        <input type="submit" name="listok" value="go" style="padding: 5px;">
      </form>
      <div class="table table-bordered">
        <table>
          <tr>
            <th></th>
            <th>MÃ LOẠI</th>
            <th>TÊN SAN PHAM</th>
            <th>ANH SAN PHAM</th>
            <th>GIA SAN PHAM</th>
            <th>LUOT XEM SAN PHAM</th>
            <th style="text-align: center;">Action</th>
          </tr>
          <?php
          foreach ($listsanpham as $lissp) {
            extract($lissp);
            $suasp = "index.php?act=suasp&id=" . $id;
            $xoasp = "index.php?act=xoasp&id=" . $id;
            $hinh = '../upload/' . $img;
            if (is_file($hinh)) {
              $hinh = "<img src='" . $hinh . "' height='80'>";
            } else {
              $hinh = 'no photo';
            }
            echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $hinh . '</td>
                <td>' . $price . '</td>
                <td>' . $luotxem . '</td>
                <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>   <a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
            </tr>';
          }
          ?>
          


        </table>
      </div>
      <div class="action">
           <div class="form-control" id="button" style="text-align: center;">
            <input class="mr20" type="button" value="CHỌN TẤT CẢ" style="border: none;">
          </div>
           <div class="form-control" id="button" style="text-align: center;">
            <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ" style="border: none;">
          </div>
           <div class="form-control" id="button" style="text-align: center;">
            <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM" style="border: none;"></a>
          </div>
           </div>
  </form>
</div>
</div>