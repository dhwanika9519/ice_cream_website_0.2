<p?php
    include '../components/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sky Summer  - seller registeration page</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css" >
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    
<div clas=" form-continer">
    <form avtion="" method="post" enctype="multipart/form-data" class="register">
        <h3>register now</h3>
        <div class="flew">
            <div class="col">
                <div class="input-field">
                    <p> your name <span>*</span></p>
                    <input type="text" name="name" placeholder="enter your nme" maxlength="50" required class="box">

            </div>

            <div class="input-field">
                    <p> your email <span>*</span></p>
                    <input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box">

            </div>

            <div class="input-field">
                    <p> your password <span>*</span></p>
                    <input type="password" name="pass" placeholder="enter your passwword" maxlength="50" required class="box">

            </div>

            <div class="input-field">
                    <p> confirm password <span>*</span></p>
                    <input type="password" name="cpass" placeholder="confirm your passwword" maxlength="50" required class="box">

            </div>

            <div class="input-field">
                <p> your profile <span>*</span></p>
                <input type="file" name="image" accept="image/*" required class="box">

            </div>
            <p class="link">alredy have an account ? <a href="login.php">login now</a></p>
            <input type="submit" name="submit" value="register now" class="btn">

        </div>


    </form>

</div>

<!-- sweetalert cdn link -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

 <!-- custom js link -->
<script src="js/script.js"></script>

<?php include '../components/alert.php'; ?>
</body>
</html>