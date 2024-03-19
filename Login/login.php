<!-- session_start() là một hàm được sử dụng trong ngôn ngữ lập trình PHP để bắt đầu một phiên làm việc. 
Hàm này được sử dụng để khởi tạo một phiên làm việc và bắt đầu lưu trữ các biến phiên trên máy chủ. 
Biến phiên được lưu trữ trong một biến toàn cục PHP được gọi là $_SESSION. Để sử dụng các biến phiên, 
bạn cần phải sử dụng hàm session_start()
 để bắt đầu phiên làm việc và sau đó gán các giá trị cho các biến phiên bằng cách sử dụng biến $_SESSION -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  body{ 
    background: #1e2021;
  }
  .box{
    display: grid;
    margin-top: 10%;
    grid-template-columns: 600px;
    justify-content: center;
  }
  
</style>
<body>
    <div class="container">
    <?php include 'header.php'; ?>

         <div class="box">
        <?php

        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user){
                if(password_verify($password, $user["password"])){
                    session_start();
                    $_SESSION['user'] = $user;
                    header("Location: main.php");
                    die(); 
                    // echo "Đăng Nhập THành công";
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }

        }
        
        ?>
        
        <form action="login.php" method="post">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" 
                placeholder="Email" name="email">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" 
                placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-btn mb-3">
                <input type="submit" value="Login" name="login" class="btn btn-dark">
            </div>
        </form>
        <div>
            <p style="color: white;">Not registrered yet <a href="registration.php">Resgister Here</a></p>
        </div>
    </div>
    </div>

</body>

</html>