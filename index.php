<!DOCTYPE html>
<html lang="en">

<head>
    <title>CREZZZ | Online shopping store!</title>

    <?php
        include "linker.php";
        include "includes/connect.php";
    ?>

    <script>
            $(window).on('scroll', function(){
                if ($(window).scrollTop()) {
                    $('nav').addClass('back');
                    console.log(1);
                }
                else {
                    $('nav').removeClass('back');
                    console.log(0);
                }
            });
    </script>
</head>
<body>

    <!-- /*------------------------------   PRELOADER   ------------------------------*/ -->
    <div id="preloader">
        <div>
            <p>Loading Please Wait...</p>
        </div>
    </div>

    <!-- /*------------------------------   NAVBAR   ------------------------------*/ -->
    <header class="top-navbar">
        <nav>
            <div class="title">
                <div>
                    <a href="index.php" class="t-link">CREZZZ</a>
                </div>
                <div style="display: flex; align-items: center; margin-bottom: 2px;">
                    <div class="cart-ic">
                        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                        <span>7</span>
                    </div>
                    <div class="login-ic">
                        <i class="fas fa-user-plus login-ic"></i>
                    </div>
                    <div class="logout-ic">
                    <i class="fas fa-sign-out-alt"></i>
                    </div>
                </div>
            </div>
            <div class="search">
                <div class="search_box">
                    <form action="products.php" name="search_form" method="POST">
                        <input type="text" id="search_box" name="sr_val" autocomplete="off" placeholder="Search products">
                        <button type="submit" name="search"><i class="fas fa-search"></i></button>
                        <span class="clear-sr"><i class="fas fa-times" style="display: flex;"></i></span>
                    </form>
                </div>
                <div id="autocomplete-box">
                    <ul id="autocomplete-list">
                        <li>Vivo X60 Pro+ 5G (Midnight Black, 256GB, 12GB)(Midnight Black, 256GB, 12GB)<i class='fas fa-arrow-up'></i></li>
                        <li>APPLE iPhone 12 Pro Max (Graphite, 512 GB)<i class='fas fa-arrow-up'></i></li>
                        <li>Oppo F15 Pro 5G(Black, 256GB, 12GB)<i class='fas fa-arrow-up'></i></li>
                        <li>ViVO V20 Pro (Midnight Jazz, 128 GB)<i class='fas fa-arrow-up'></i></li>
                        <li>Vivo X60 Pro+ 5G (Midnight Black, 256GB, 12GB)<i class='fas fa-arrow-up'></i></li>
                        <li>APPLE iPhone 12 Pro Max (Graphite, 512 GB)<i class="fas fa-arrow-up"></i></li>
                        <li>Oppo F15 Pro 5G(Black, 256GB, 12GB)<i class="fas fa-arrow-up"></i></li>
                        <li>ViVO V20 Pro (Midnight Jazz, 128 GB)</li>
                        <li>Vivo X60 Pro+ 5G (Midnight Black, 256GB, 12GB)<i class="fas fa-arrow-up"></i></li>
                        <li>APPLE iPhone 12 Pro Max (Graphite, 512 GB)<i class="fas fa-arrow-up"></i></li>
                        <li>Oppo F15 Pro 5G(Black, 256GB, 12GB)<i class="fas fa-arrow-up"></i></li>
                        <li>ViVO V20 Pro (Midnight Jazz, 128 GB)<i class="fas fa-arrow-up"></i></li>
                    </ul>
                </div>
            </div>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- /*------------------------------   BODY   ------------------------------*/ -->
    <section class="q q1">
        <div class="q-primary" id="q-pr">
            <p class="q-heading">CREZZZ</p>
            <p class="q-desc">A place of your dream products where you can fill out your cart with<br>
                full of fashionable products by just sitting at home.</p>
        </div>
        <div id="q1-img"> <img src="images/img.png" alt=""> </div>
    </section>

    <div class="quat">
        <p>
            " Wants to start shopping at home<br>dont worry,<br>just put your phone and start <font>CREZZZ</font>. "
        </p>
    </div>

    <section class="q q2">
        <div class="q-primary">
            <p class="q-heading">QUALITY PRODUCTS</p>
            <p class="q-desc">Here you can find branded products including local brand products<br>
                with 100% quality certification at affordeble price range.</p>
        </div>
    </section>

    <div class="quat quat-2" id="qt">
        <p>
            " Fashion is about somthing that within you. "
        </p><br>
        <font>- CREZZZ...</font>
    </div>

    <div>
    <section class="q q3">
        <div class="q-primary">
            <p class="q-heading">SATISFYED USERS</p>
            <p class="q-desc">Having a large amount of satisfyed users due to our one of<br>
                the best coustomer services, after sell services and security purposes.</p>
        </div>
        <div class="img-box">
            <img src="images/pattern.png" class="i-back" alt="">
            <img src="images/girl.png" class="i-girl">
        </div>
    </section>
    </div>

    <!-- /*------------------------------   FOOTER   ------------------------------*/ -->
<?php
    include "includes/footer.php";
?>


    <!-- /*------------------------------   SCRIPT   ------------------------------*/ -->
    <script>

        var preloader = document.getElementById('preloader');

        window.addEventListener("load", function(){
            preloader.style.display = "none";
        })

    </script>


</body>

</html>










<!-- <lable class="bef" style="border: 1px solid #ffffff;"> </lable> -->