<?php 
    include '../components/admin_header.php';

    if(isset($_COOKIE['seller_id'])){
        $seller_id = $_COOKIE['seller_id'];
    }else{
        $seller_id = '';
        header('location:loging.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Summer - seller registeration page</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
    <!-- Box icon can link-->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'" rel='stylesheet'>
</head>

<body>

    <div class="main-container">
    <?php include '../components/admin_header.php.php'; ?>
    <section class="post-editor">
        <div class="heading">
            <h1>Add Product</h1>
            <img src="../image/separator-img.php">
        </div>

    </section>
    </div>



    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- custom js link -->
    <script src="js/admin_script.js"></script>

    <?php include '../components/alert.php'; ?>
</body>

</html>