<!doctype html>

<head>

<?php
    include "connect.php";
?>

<script>

jquery();

</script>

</head>

    <div id="preloader">
        <div>
            <p>Loading Please Wait...</p>
        </div>
    </div>
    <header class="top-navbar">
        <nav class="back">
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





    <script>

        var preloader = document.getElementById('preloader');

        window.addEventListener("load", function(){
            preloader.style.display = "none";
        })

    </script>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <!-- <div class="modal fade modal-dialog modal-dialog-centered" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div> -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->