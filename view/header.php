<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VOGUE</title>
	<!-- Import Boostrap css, js, font awesome here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet"> 
	<!-- <link rel="stylesheet" href="https://icons.getbootstrap.com">    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" href="https://getbootstrap.com/docs/4.6/content/images/"> -->
	<link rel="stylesheet" href="https://fontawesome.com/v5/search">
	<link rel="stylesheet" href="trangchu.css">
	<link rel="stylesheet" href="http://localhost/duan1/duan1/view/css/css.css">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-branch" href="#">
			<svg width="100" height="100">
                    <circle cx="50" cy="50" r="50"
                    fill="F1E8D9"></circle>
                    <text fill="#ffffff" font-size="25" x="10" y="65">VOGUE</text>
                
                </svg>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link active" href="./index.php">Trang chủ</a>
				</li>
				
				<li class="nav-item">
				<li class="nav-item">
					<a class="nav-link" href="index.php?act=sanpham&iddm="> Danh mục</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?act=dangnhap">Đăng nhập</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php?act=addtocart"> <i class="fas fa-cart-plus"></i> Giỏ hàng</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../duan1/admin"><i class="fas fa-users"></i> Admin</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- Carousel -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>		
		<li data-target="#slides" data-slide-to="3"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active text-center" >
			<img src="image/bia.jpg">
			<!-- <div class="carousel-caption">
				<h3>Thời trang thời thượng</h3>
				<button type="button" class="btn btn-outline-light btn-lg">
					Xem them
				</button>
				<button type="button" class="btn btn-primary btn-lg">bat dau</button>
			</div> -->
		</div>
		<div class="carousel-item text-center">
			<img src="image/bia2.jpg">
		</div>
		<div class="carousel-item text-center" >
			<img src="image/bia3.jpg">
		</div>
		<div class="carousel-item text-center">
			<img src="image/bia4.jpg">
		</div>
	</div>
</div>
<!-- jumbotron -->
<div class="container-fluid">
	<div class="jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p>  CHÀO MỪNG BẠN ĐẾN VỚI WEBSITE CỦA VOGUE</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="http://127.0.0.1:5500/ASM/spnoibat.html?#">
				<button type="button" class="btn btn-outline-secondary">XEM NGAY</button>
			</a>
		</div>
	</div>
</div>
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<!-- <h1 class="display-4"> THƯƠNG HIỆU THỜI TRANG VOGUE</h1> -->
		</div>
		<!-- Horizontal Rule -->
		<hr> 
		<div class="col-12">
			<!-- <p> Chào mừng bạn đến với website của VOGUE</p> -->
		</div>
	</div>
</div>




<hr class="my-2">
<!-- <button class="fun" data-toggle="collapse" data-target="#emoji">
	Xem thêm
</button> -->
<!-- <div id="emoji" class="collapse">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="image/6.jpg" width="100" height="100">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="image/12.jpg" width="100" height="100">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="image/" width="100" height="100">
			</div>
		</div>
	</div>
</div> -->





<!-- FOOTER -->

</body>
</html>	