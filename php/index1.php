<?php
include "connect.php";
include "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

</head>

<body>
    <section class="navbar">
        <div class="logo">
            <h1>Basic Website</h1>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Info</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </section>

    <div class="container">
        <div class="header-info">
            <h1>Welcome to my Website</h1>
            <p>
                เว็บไซต์นี้เป็นส่วนหนึ่งของการทดสอบสร้างเว็บไซต์
            </p>
            <button type="button" name="add" class="btn btn-success" data-toggle="collapse" data-target="#user_collapse">
                <div class="icon-btn">
                    <div class="icon">+</div>
                    <div class="text">Add</div>
                </div>
            </button>
            <br /><br />
            <div id="user_collapse" class="collapse">
                <form method="post" id="data">
                    <label>Enter Name</label>
                    <input type="text" name="detail" id="detail" class="form-control" />
                    <br />
                    <label>Enter Price</label>
                    <input type="text" name="price" id="price" class="form-control" />
                    <br />
                    <label>Select Image</label>
                    <input type="file" name="image" id="image" />
                    <br />
                    <div align="center">
                        <input type="hidden" name="action" id="action" />
                        <input type="submit" name="button_action" id="button_action" class="btn btn-default" value="Insert" />
                    </div>
                </form>
            </div>
        </div>
        <div class="products-con">

            <?php foreach ($variable as $key => $val) : ?>
                <div class="products-item">
                    <div class="products-img">
                        <img src="<?= $val->img ?>" alt="">
                    </div>
                    <div class="products-detail"><?= $val->items ?></div>
                    <div class="products-price">
                        <div class="products-left">
                            <?= $val->price ?>
                        </div>
                        <div class="products-right">
                            <span>ขายแล้ว <?= $val->sale ?> ชิ้น</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
    <footer>
        <p>&copy; Sahadsawat Seatia 05/18/2023</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>