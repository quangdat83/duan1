<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    footer{
    background: #000000;
    height: 200px;
    color: #ffffff;
}
.contain{
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    margin-top: 50px;
    position: relative;
    padding: 10px;

}
.day{
    display: flex;
    justify-content: space-between;
    
}

.day .day_tong{
    display: flex;
}
.day .day_1{
   margin: 0 30px;
   margin-right: 100px;
}
.day .day_1 h5{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 20px;
    font-size: 10px;
    font-weight: 100px;
    color: rgb(175, 173, 173);
}
.icon a{
    color: white;
    font-size: 25px;
    margin-left: 10px;
}
.add{
    position: absolute;
    right: 0;
}
.add ul li{
    display: inline-block;
    list-style: none;
}
.add ul li a{
    text-decoration: none;
    color: #ffffff;
    font-size: 15px;
    color: rgb(175, 173, 173);
    margin-right: 10px;
}
.location{
    margin-top: 30px;
    display: flex;
}
.location p{
    margin-left: 2%;
    color: rgb(175, 173, 173);
}
.location a{
    color: rgb(175, 173, 173);
}




</style>
<body>
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
</body>
</html>