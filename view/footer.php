<footer class="box_footer row mb demo">
         <div id="footer">
            <div class="footer-left">
              <div class="footer-logo">
                <img src="view/img/logo.jpg" alt="" />
              </div>
              <div class="card_1">
                <h3> Công ty sản xuất chất lượng số 1 Việt Nam</h3>
                <div>
                  <i class="fa-sharp fa-solid fa-location-pin"></i>
                  <p>
                     24 - FLC Landmark Tower - Ngõ 60 Dương Khuê - Hà Nội
                  </p>
                </div>
      
                <div>
                  <i class="fa-solid fa-phone-flip"></i>
                  <p>1900.24.24.24</p>
                </div>
      
                <div>
                  <i class="fa-solid fa-envelope"></i>
                  <p>Flc@gmail.com</p>
                </div>
      
                <p>Số ĐKKD: 0106341306. Ngày cấp: 16/03/2017.</p>
                <p>Nơi cấp: Sở kế hoạch và Đầu tư Thành phố Hà Nội.</p>
                <div class="icons">
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-square-instagram"></i>
                  <i class="fa-brands fa-youtube"></i>
                  <i class="fa-brands fa-square-twitter"></i>
                  <i class="fa-brands fa-google-plus"></i>
                </div>
      
                <div class="images">
                  <div class="image">
                    <img
                      src="view/img/1.jpg" alt=""/>
                  </div>
                  <div class="image">
                    <img src="view/img/2.jpg" alt="" />
                  </div>
                </div>
      
                <div class="image_3 image">
                  <img src="view/img/33.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="footer-right">
              <div class="card_2">
                <h3>VỀ CHÚNG TÔI</h3>
                <a href="#">Giới thiệu về VOGUE</a>
                <a href="gioithieu.html">Nhượng quyền</a>
                <a href="">Tin tức khuyến mại</a>
                <a href="">Cửa hàng</a>
                <a href="#">Quy định chung</a>
                <a href="#">TT liên hệ &#038; ĐKKD</a>
              </div>
              <div class="card_3">
                <h3>CHÍNH SÁCH</h3>
                <a href="#">Chính sách thành viên</a>
                <a href="#">Hình thức thanh toán</a>
                <a href="#">Vận chuyển giao nhận</a>
                <a href="#">Đổi trả và hoàn tiền</a>
                <a href="#">Bảo vệ thông tin cá nhân</a>
                <a href="#">Bảo trì, bảo hành</a>
              </div>
            </div>
          </div>
          <!-- footer section ends -->
        </footer>
    </div>

</body>


<script>
let auto
let index=0;
function start(){
    let img=document.getElementsByClassName('banner')
    if(index>=img.length){
        index=0
    }
    if(index<0){
        index=img.length-1
    }
    for(let i=0;i<img.length;i++){
        img[i].style.display='none'
    }
    img[index].style.display='block'
    index++
    auto=setTimeout(start,2000)
}
function stop(){
    clearInterval(auto)
}
start()
</script>


<!-- <script src="main.js"></script> -->
</html>