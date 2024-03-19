<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Monomaniac+One&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Monomaniac One', sans-serif;

}  

.goi{
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    min-height: 100vh;
    position: relative;
}
nav .logo{
    width: 80px;
    cursor: pointer;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 5px 0;
   
}
nav ul {
    padding-right: 30px;
}
nav ul li{
    display: inline-block;
    list-style: none;
    margin: 10px 30px;
}
nav ul li a{
    text-decoration: none;
    font-size: 20px;
    color: rgb(255, 255, 255);
    border-bottom: 3px solid transparent;
    transition: .4s;
}
nav ul li a:hover
{
    border-bottom: 3px solid rgb(255, 255, 255);
    transition: .4s;
}
.search-box{  
   width: 200px;
   height: 40px;
   display: flex;
   align-items: center;
   padding: 10px;
   margin-right: 100px;
   border-bottom: 2px solid black;
}
.search-txt{
    border: none;
    outline: none;
    font-size: 16px;
    background: none;
    padding-left: 10px;
}
::placeholder{
  color: rgb(255, 255, 255);
 
}
.search-box a{
    font-size: 15px;
    color: black;
}
.form  a{
    font-size:20px ;
    color: #ffffff;
    margin-right: 30px;
    transition: .2s;
}
.form a:active{
    color: #000000;
}
</style>
<body>

        <nav>
           <a href="main.php"> <img src="NKE.D-14bad6cf.png" class="logo"></a>
            <ul>
                <li><a href="list.php">List</a></li>
                <li><a href="category_P.php">Category</a></li>
                <li><a href="store.php">Store</a></li>
                <li><a href="login.php">Login</a></li>
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
</body>
</html>