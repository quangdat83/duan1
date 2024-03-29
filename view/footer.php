<html>

<body>
  <br>


<div class="container-fluid padding">	
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Contact us</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>	


<footer>
	<div class="container-fluid padding">	
		<div class="row text-center">
			<div class="col-md-4">
				<svg width="100" height="100">
                    <circle cx="50" cy="50" r="50"
                    fill="F1E8D9"></circle>
                    <text fill="#ffffff" font-size="25" x="10" y="65">VOGUE</text>
                
                </svg>
				<hr class="light">
				<p>111-222-3333</p>
				<p>vogue@gmail.com</p>
				<p> Mai Dịch - Cầu Giấy - Hà Nội</p>
			</div>
			<div class="col-md-4">				
				<hr class="light">
				<h5> Giờ làm việc</h5>
				<hr class="light">
				<p> Thứ 2 - Thứ 6: 8h00 - 17h00</p>
				<p> Cuối tuần: 8h00 - 23h00</p>
			</div>
			<div class="col-md-4">				
				<hr class="light">
				<h5>Sản phẩm độc quyền</h5>
				<hr class="light">
				<p> Hàng gia công</p>
				<p> Thời trang độc quyền</p>
				<p> Thời trang vì đời sống</p>
			</div>
			<div class="col-12">
				<hr class="light-100">
				<h5>&copy; VOGUE.COM</h5>
			</div>
		</div>
	</div>
</footer>
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