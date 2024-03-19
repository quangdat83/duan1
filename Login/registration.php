<!-- //FILTER_VALIDATE_EMAIL
//-> Hằng số này được sử dụng cùng với hàm filter_var() để kiểm tra
//xem một chuỗi có phải là địa chỉ email hợp lệ hay không

// password_hash
// -> Hàm này sẽ tạo ra một chuỗi băm duy nhất từ mật khẩu của người dùng và một muối ngẫu nhiên,
// sau đó lưu trữ chuỗi băm này vào cơ sở dữ liệu thay vì lưu trữ mật khẩu dưới dạng văn bản thuần túy
// mật khẩu băm 60 ký tự hơn bạn cần lưu trữ

// PASSWORD_DEFAULT
//Lưu ý rằng hằng số này được thiết kế để thay đổi theo thời gian vì các thuật toán mới và mạnh hơn được thêm vào PHP.
// Vì lý do đó, độ dài của kết quả từ việc sử dụng định danh này có thể thay đổi theo thời gian.
// Do đó, nên lưu trữ kết quả trong cột cơ sở dữ liệu có thể mở rộng vượt quá 60 ký tự [255 ký tự sẽ là một lựa chọn tốt

// value (? , ? ,?)
// -> là một phần của câu lệnh SQL được sử dụng để chèn dữ liệu vào bảng trong cơ sở dữ liệu.
// Cụ thể, VALUES được sử dụng để chỉ định các giá trị cần chèn vào bảng.
// Trong trường hợp này, ? được sử dụng để đại diện cho các giá trị thực tế được chèn vào bảng


// stmt là một đối tượng đại diện cho một câu lệnh đã chuẩn bị trong PHP.
// Đối tượng này được sử dụng để thực thi các câu lệnh SQL và truy vấn cơ sở dữ liệu.
// Để sử dụng stmt, bạn cần phải chuẩn bị câu lệnh SQL bằng cách sử dụng hàm prepare()
// và sau đó gán đối tượng stmt cho kết quả trả về của hàm này. Sau đó, bạn có thể sử dụng
//các phương thức của đối tượng stmt để thực thi câu lệnh SQL và xử lý kết quả trả về.
// Tóm lại, stmt trong PHP là một đối tượng đại diện cho một câu lệnh đã chuẩn bị
//và được sử dụng để thực thi các câu lệnh SQL và truy vấn cơ sở dữ liệu.

// mysqli_stmt_init là một hàm được sử dụng trong ngôn ngữ lập trình
// PHP để khởi tạo một đối tượng câu lệnh và trả về đối tượng đó để sử dụng sau này. 
// Hàm này được sử dụng để chuẩn bị một câu lệnh SQL để thực thi.
// Để sử dụng mysqli_stmt_init, bạn cần phải kết nối đến cơ sở dữ liệu MySQL bằng cách 
// sử dụng hàm mysqli_connect() hoặc mysqli::__construct(). 
// Sau đó, bạn có thể sử dụng mysqli_stmt_init để khởi tạo một đối tượng câu 
// lệnh và gán đối tượng đó cho một biến. Sau đó, bạn có thể sử dụng các phương 
// thức của đối tượng câu lệnh để chuẩn bị câu lệnh SQL và thực thi câu lệnh đó

//mysqli_stmt_bind_param là một hàm được sử dụng trong ngôn ngữ lập trình PHP
// để gán các giá trị cho các tham số trong một câu lệnh SQL đã chuẩn bị.
// Hàm này sẽ gán các giá trị được cung cấp cho các tham số tương ứng trong câu lệnh SQL
// đã chuẩn bị và thực thi câu lệnh đó .
// Để sử dụng mysqli_stmt_bind_param, bạn cần phải chuẩn bị câu
//lệnh SQL bằng cách sử dụng hàm mysqli_prepare() và sau đó gán đối tượng stmt
//cho kết quả trả về của hàm này. Sau đó, bạn có thể sử dụng mysqli_stmt_bind_param
//để gán các giá trị cho các tham số trong câu lệnh SQL đã chuẩn bị và thực thi câu lệnh đó

// mysqli_stmt_execute
// mysqli_stmt_execute là một hàm được sử dụng trong ngôn ngữ 
// lập trình PHP để thực thi một câu lệnh SQL đã chuẩn bị trước đó
// bằng cách sử dụng mysqli_stmt_prepare.
//Hàm này sẽ thực thi câu lệnh SQL đã chuẩn bị và trả về true nếu thực thi thành công hoặc false nếu thực thi thất bại .
// Để sử dụng mysqli_stmt_execute, bạn cần phải chuẩn bị câu lệnh SQL bằng cách sử dụng hàm mysqli_stmt_prepare
//và sau đó gán đối tượng stmt cho kết quả trả về của hàm này. Sau đó, bạn có thể sử dụng mysqli_stmt_execute để thực thi câu lệnh SQL đã chuẩn bị và xử lý kết quả trả về


// select query
//mysql_fetch_assoc ()
//Lấy một hàng kết quả dưới dạng một mảng kết hợp
// => NguyenPhuong Duyfuongye@gmail.com03124214124
//-------------------------------------------------------------- -->
<!--  -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php
            include 'header.php';
        ?>

        <?php
        // kiểm tra
        // print_r($_POST)



        if (isset($_POST['submit'])) {
            $fullName = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordRepeat = $_POST['repeat_password'];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if (empty($fullName) or empty($email) or empty($password) or empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 characters");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match");
            }
            // bắt lỗi email
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result =  mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount > 0) {
                array_push($errors, "Email already exists");
            }

            // mảng xuất lỗi
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                // we will insert the data into database
                // require_once "database.php";

                // lệnh chueyefn vào
                $sql = "INSERT INTO `users`(`ful_name`, `email`, `password`) VALUES ( ? , ? , ?)";
                $stmt =  mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are resgisterd successfully</div>";
                } else {
                    die("something went wrong");
                }
            }
        }

        ?>
        
        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Full name:" name="fullname">
                <label for="floatingPassword">Full name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Email:" name="email">
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password:" name="password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password:" name="repeat_password">
                <label for="floatingPassword">Confirm password</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-dark" name="submit">Register</button>
            </div>

            <div>
                <p style="color: white;">Already Registrered<a href="login.php">Login Here</a></p>
            </div>

        </form>
    </div>
</body>

</html>