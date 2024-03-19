<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <div class="container">
        <!-- header -->
        <div class="goi">
        <nav>
            <a href="main.php"><img src="Logo_NIKE.svg.png" class="logo"></a>
            <ul>
                <li><a href="list.php">List</a></li>
                <li><a href="category_P.php">Category</a></li>
                <li><a href="store.php">Store</a></li>
            </ul>
            <div class="search-box">
            <a href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
            <input type="text" placeholder="Search" class="search-txt">
           
            </div> 
            <div class="form">
            <a href="add.php"><i class="fa-solid fa-circle-plus"></i></a>
            <!-- <a href="Login/login.php">login</i></a> -->
            <!-- <a href="price.php" ><i class="fa-solid fa-cart-shopping"></i></a> -->
            <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>

            </div>
        </nav>
        <!-- End Header -->

        <!-- poster -->
        <div class="poster">
            <img src="sale/kobe8.jpg" alt="poster">
        </div>
        <!-- end poster -->

        <!-- select product -->
        <div class="main">
        <!-- part 3 -->
        <article>
                <ul id="autoWidth" class="cs-hidden">
                    <!-- 1--------------------------------------------- -->
                 <?php
                    include 'database.php';
                    $sql = "SELECT * FROM  nike";
                    $result = mysqli_query($conn, $sql);

                    while ($row  = mysqli_fetch_assoc($result)) {
                        $img  =  $row['img'];
                        $name  =  $row['name_p'];
                        $category  =  $row['category'];
                        $price =  $row['price'];
                        $sale = $row['sale'];
                        if(isset($_POST['store'])){
                            $imgS = $_POST['img'];
                            $nameS = $_POST['name'];
                            $priceS = $_POST['price'];
                            $categoryS = $_POST['category'];
                            $saleS = $_POST['sale'];


                        }
                    ?>
                    <li class="item-a">
                        <!-- box-slider -->
                        <div class="box">
                            <!-- img -->
                            <div class="slide-img">
                                <img src="sale/<?php echo $img; ?>" alt="">
                                <!-- overlay -->
                                <div class="overlay">
                                    <p href="#" class="buy-btn">
                                        <!-- <a href="#" name='store'><i class="fa-solid fa-cart-shopping"></i></a> -->
                                        <a href="#" name='store'>store</a>
                                        <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                    </p>
                                </div>
                            </div>
                            <!-- detail-box --> 
                            <div class="detail-box">
                                <div class="type">
                                    <a href="#"> <?php echo $name ;?> </a>
                                    <span>
                                    <?php echo $category ?>
                                    </span>
                                    <span>
                                </div>
                                <!-- price -->
                                <a href="#" class="price">
                                    <span style="margin-right: 10px;"><?php echo $price ?></span>
                                    <s style="opacity: 0.5;"><?php echo $sale ?></s>
                                </a>
                            </div>
                        </div>
                    </li>
                  <?php
                    }
                  ?> 
                </ul>

            </div>     
        </article>

    <!-- footer -->
    <footer>
        <div class="contain">
        <div class="day">
        <div class="find_store">
            <p>FIND A STORE <br>
                NIKE JOURNAL <br>
                BECOME A MEMBER <br>
                FEEDBACK <br>
                PROMO CODES</p>
        </div>
        <div class="day_tong">
        <div class="day_1">
            <p>GET HEPL</p>
            <h5>Order Status <br>
                Shipping and Delivery <br>
                Returns   <br>
                Payment Options <br>
                Contact Us</h5>
        </div>

        <div class="day_1">
            <p>ABOUT NIKE</p>
            <h5>
                News <br>
                Careers <br>
                Investors <br>
                Sustainability <br>
            </h5>
        </div>

        <div class="day_1">
            <p>JOIN US</p>
            <h5>Nike App  <br>
                Nike Run Club <br>
                Nike Training Club <br>
            </h5>
        </div>
        </div>
        

        <div class="icon">
            <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
       <div class="add">
        <ul>
            <li><a href="#">Guides</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Terms of Sale</a></li>
            <li><a href="#">Company Details</a></li>
            <li><a href="#">Modern Slavery Act</a></li>
            <li><a href="#">Guides</a></li>
        </ul>
       </div>
      
       <div class="location">
        <a href="#"><i class="fa-solid fa-location-dot"></i></a>
        <p>Australia</p>
        <p>2023 Nike,Inc.All Rights Reserved </p>
        <p>Privacy & Cookie Policy</p>
        <p>Cookie Settings</p>
         
       
       </div>
       </div>
    </footer>
        
        </div>
       
    
</div>
</div>
</body>
</html>