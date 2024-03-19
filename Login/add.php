
<?php
include 'database.php';
if (isset($_POST['update'])){
    $img = $_FILES['img']['name'];
    
    $nameP = $_POST['name_P'];
    $category = $_POST['category'];
    $priceP = $_POST['price'];
    $sale = $_POST['sale'];

    // insert query 
    $sql = "INSERT INTO `nike`(`img`, `name_p`, `category`, `price`, `sale`) 
    VALUES ('$img','$nameP','$category','$priceP','$sale')";
    // kiem tra
    $result = mysqli_query($conn, $sql);
    if($result) {
        header('Location:category_P.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        max-width: 1140px;
        margin: 0 auto;
        /* background: #1e2021; */
        background-color: #1e2021;
    }


    .input-infor {
        margin: 20px 0;
    }

    .input-infor input,
    textarea {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        outline: none;
        border: none;
    }

    .input-infor label {
        color: whitesmoke;
    }

    .file{
        border-radius: 10px;
        color: whitesmoke;
        border: 2px solid whitesmoke;
    }
</style>
<body>
<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location:login.php");
    }
?>
    <div class="container">
        <?php include 'header.php'; ?>

        <form method="post" enctype="multipart/form-data">
            <div class="input-infor">
                    <label for="formFileLg" class="form-label">Img</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file" 
                    name="img">
            </div>
            <div class="input-infor">
                <label>Product Name</label>
                <input type="text" id="product-name" name="name_P">
            </div>
            <div class="input-infor">
                <select class="form-select" aria-label="Default select example" name="category">
                    <option value="">Select option </option>
                    <option value="Shoes">Shoes</option>
                    <option value="Bomber">Bomber</option>
                    <option value="Jacket">Jacket</option>
                    <option value="Coat">Coat</option>
                </select>
            </div>
            <div class="input-infor">
                <label>Price</label>
                <input type="number" id="price"
                name="price">
            </div>
            <div class="input-infor">
                <label>Sale</label>
                <input type="number" id="sale"
                name="sale">
            </div>
            <button type="submit" class="btn btn-primary btn-lg" name="update">Save</button>
        </form>
    </div>

</body>
</html>