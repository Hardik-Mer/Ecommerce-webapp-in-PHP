<html>
<head>    
    <title>Cart | Crezzz online shopping.</title>

    <?php
        include "includes/connect.php";
        include "linker.php";
    ?>
</head>
<body>

    <?php        include "includes/header.php";       ?>

    <section class="pro-container">

<?php
    $uid = 'hardik';
    $record = mysqli_query($con, "SELECT * FROM cart WHERE u_id='$uid' ");

    while($r = mysqli_fetch_array($record))
    {
        $pid = $r['p_id'];
        $p_record = mysqli_query($con, "SELECT * FROM products WHERE id='$pid' ");
        $p_r = mysqli_fetch_array($p_record);
?>

        <div class="pro-box">
            <div class="p-box-1">
                <div class="p-box-1-img">
                    <img src="<?php echo $p_r['image']; ?>" alt="">
                </div>

                <div class="qty-price-box">
                    <p>Quantity :</p>
                    <form action="" method="POST" name="qt_total">
                        <div>
                            <input type="number" value="<?php echo $r['qty']; ?>" min="1" name="qty" oninput="total_price(this.value, '<?php echo $p_r['id']; ?>');" required>
                        </div>
                        <div>
                            Total -
                            <input type="text" id="p_quantity<?php echo $p_r['id']; ?>" name="tp" value="<?php echo $r['total']; ?>" readonly>
                        </div>
                        <div class="by-btn-box">
                            <button type="submit" name="buy" class="by-btn">Buy Now</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-box-2">
                <div class="p-title p-box-lh">
                    <a href="index.php"><?php echo $p_r['title']; ?></a>
                </div>
                <div class="p-rating p-box-lh">
                    <p class="p-r"><?php echo $p_r['rating']; ?> &starf;</p>
                    <span class="p-r-n"><?php echo $p_r['ratings_total']; ?> Ratings</span>
                </div>
                <div class="p-price p-box-lh">
                    <span>
                        <!--i class="fas fa-rupee-sign"></i-->₹<?php echo $p_r['price']; ?> /-
                    </span>
                </div>
                <div class="p-detail p-box-lh">
                    <p>Details :</p>
                    <pre><?php echo $p_r['detail']; ?></pre>
                </div>
            </div>            
        </div>

<?php  }  ?>

    </section>

    <?php    include "includes/footer.php";     ?>

</body>



<script>

    function total_price(p_qt, p_id){

        $.ajax({
            url: "update_cart_quantity.php",
            type: "POST",
            data: {p_i:p_id, p_q:p_qt},
            success: function(data){
                $('#p_quantity'+p_id).val(data);
                console.log(data);
            }
        });
    }

</script>

</html>