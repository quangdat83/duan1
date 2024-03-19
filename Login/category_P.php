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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="style_0.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  body {
    background: #1e2021;
  }
</style>

<body>
  <div class="container">
    <div class="goi">
      <!-- header -->
      <?php
      include 'header.php';
      ?>
      <!-- end header -->
      <table class="table table-hover">

        <thead class="table-dark">
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Category</th>
            <!-- <th scope="col">Quantity</th> -->
            <th scope="col">Action</th>
          </tr>
        </thead>

        <?php
          include 'database.php';
          $sql = "SELECT * FROM  nike";
          $result = mysqli_query($conn, $sql);
          while ($row  = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $img  =  $row['img'];
              $name  =  $row['name_p'];
              $category  =  $row['category'];
              $price =  $row['price'];
              $sale = $row['sale'];
        

        ?>
          <tr>
            <th><?php echo $id ?></th>
            
            <td><?php echo $category ?></td>
            <!-- <td>$99</td> -->
            <td>
              <button class="btn btn-primary">
                <a href="update.php?updateid=<?php echo $id; ?>" class="text-light" style="text-decoration: none;">Update</a>
              </button>
              <button class="btn btn-danger">
                <a href="delete.php?deleteid=<?php echo $id; ?>" class="text-light" style="text-decoration: none;">Delete</a>
              </button>
            </td>
          </tr>
        <?php
        }
        ?>
        </tbody>

      </table>
    </div>


    

</body>

</html>