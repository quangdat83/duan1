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
      justify-content: center;
    }
</style>
<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="">
           <table class="table table-bordered">
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th style="text-align: center;">Action</th>
            </tr>
            <?php
            foreach($listdanhmuc as $lisdm){
                extract($lisdm);
                $suadm="index.php?act=suadm&id=".$id;
                $xoadm="index.php?act=xoadm&id=".$id;
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>   <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
            </tr>';
            }
             ?>
            

            
           </table>
           </div>
           <div class="action">
           <div class="form-control" id="button" style="text-align: center;">
            <input class="mr20" type="button" value="CHỌN TẤT CẢ" style="border: none; padding: 0px;">
          </div>
           <div class="form-control" id="button" style="text-align: center;">
            <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ" style="border: none;padding: 0px;">
          </div>
           <div class="form-control" id="button" style="text-align: center;">
            <a href="index.php?act=adddm"> <input  class="mr20" type="button" value="NHẬP THÊM" style="border: none;padding: 0px;"></a>
          </div>
           </div>
           </form>
         </div>
        </div>