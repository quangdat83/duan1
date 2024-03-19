<?php
  include 'database.php';
 
$id = $_GET['updateid'];

$sql = "SELECT * FROM  nike WHERE id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$img = $row['img'];
$name_p = $row['name_p'];
$category = $row['category'];   
$price = $row['price']; 
$sale = $row['sale'];
if(isset($_POST['update'])){
    $img = $_FILES['img_new'];
    $new_img = $img['name'];
    $old_img = $_POST['old_img'];
    if($new_img != ""){
        $img =  $img['name'];
    }else{
        $img = $old_img;
    }

    $name_p = $_POST['name_p']; 
    $category = $_POST['category'];
    $price = $_POST['price'];
    $sale = $_POST['sale'];
   
    $sql = "UPDATE `nike` 
    SET `img`='$img',`name_p`='$name_p',`category`='$category',`price`='$price',`sale`='$sale' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        // $result = mysqli_query($con,$sql);
        if ($result) {
            $message = "success";
            header('location:category_P.php');
            echo "<script> confirm('$message');</script>";
        } else {
            die(mysqli_error($con));
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

    .file {
        border-radius: 10px;
        color: whitesmoke;
        border: 2px solid whitesmoke;
    }
</style>

<body>
    <div class="container">
        <?php include 'header.php'; ?>

        <form method="post" enctype="multipart/form-data">
            <div class="input-infor">
                <label for="formFileLg" class="form-label">Img</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="img_new" >
                <input  name='old_img' value="<?php echo $img ?>"type='hidden'>
                <img src="<?php echo "sale/". $img ?>" width="80" alt="">
            </div>
            <div class="input-infor">
                <label>Product Name</label>
                <input type="text" id="product-name" name="name_p" value="<?php echo $name_p ?>">
            </div>
            <div class="input-infor">
                <select class="form-select" aria-label="Default select example" name="category" require>
                    <option value="">Select option </option>
                    <option value="Shoes" <?php echo ($category == "Shoes") ? "selected" : "" ?>>Shoes</option>

                    <option value="Bomber" <?php echo  ($category == "Bomber") ? "selected" : "" ?>> Bomber</option>

                    <option value="Jacket" <?php echo  ($category == "Jacket") ? "selected" : "" ?>>Jacket</option>

                    <option value="Coat" <?php echo ($category == "Coat") ? "selected" : "" ?>>Coat</option>
                </select>
            </div>
            <div class="input-infor">
                <label>Price</label>
                <input type="number" id="price" name="price" value="<?php echo $price ?>">
            </div>
            <div class="input-infor">
                <label>Sale</label>
                <input type="number" id="sale" name="sale" value="<?php echo $sale ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-lg" name="update">Save</button>
        </form>

    </div>
</body>

</html>