<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products | Crezzz online shopping.</title>

    <?php
            include("includes/connect.php");
            include("linker.php");
    ?>
</head>
<body>

    <?php       include("includes/header.php");    ?>

    <section class="pro-container">

<?php
    if(isset($_POST['search'])){

        $sr = $_POST['sr_val'];

        $record = mysqli_query($con, "SELECT * FROM `products` WHERE cat LIKE '%$sr%' OR sub_cat LIKE '%$sr%' OR title LIKE '%$sr%' ");
        $s_result = mysqli_num_rows($record);
?>
        <script>
            document.search_form.sr_val.value = "<?php echo $sr; ?>";
        </script>
<?php
        if($s_result > 0){
?>
        <div class="showing-result">
            <p>Showing <font><?php echo $s_result; ?></font> Results Serch for "<font><?php echo $sr; ?></font>"</p>
        </div>
<?php
        }
    }
    else{
        $record = mysqli_query($con, "SELECT * FROM `products`");
        $s_result = mysqli_num_rows($record);
        // $r = mysqli_fetch_array($record);
    }

    if($s_result == 0){
?>
        <div class="no-results">
            <p>No Results Found !!!</p>
        </div>
<?php
    }
    else{
        // for($i=1; $i<=500; $i++)
        // {
        while($r = mysqli_fetch_array($record))
        {
?>
        <div class="pro-box">
            <div class="p-box-1">
                <div class="p-box-1-img">
                    <img src="<?php echo $r['image']; ?>" alt="">
                </div>

                <div class="p-box-1-btn">
                    <button class="ad-by-btn">Buy Now</button>
                    <button class="ad-by-btn add-cart" name="qb<?php echo $r['id']; ?>" onclick="qty_box_open(this.name);">Add To Cart</button>
                </div>

                <div class="qty-box" id="qb<?php echo $r['id']; ?>" style="display: none;">
                    <p class="close_btn" id="cl_qt_box<?php echo $r['id']; ?>" onclick="close_alert(this.id);">+</p>
                    <input type="number" id="pq<?php echo $r['id']; ?>" value="1" min="1" required>
                    <button onclick="add_to_cart('<?php echo $r['id']; ?>');">GO</button>
                </div>

                <div class="custom-alert success" style="display: none;">
                    <p class="close_btn" id="add_c_s<?php echo $r['id']; ?>" onclick="close_alert(this.id);">+</p> <p><b>Success!</b> Added to cart</p>
                </div>
                <div class="custom-alert fail" style="display: none;">
                    <p class="close_btn" id="add_c_f<?php echo $r['id']; ?>" onclick="close_alert(this.id);">+</p> <p><b>Failed! </b>to add to cart</p>
                </div>

                <div class="rate">
                    <button onclick="rate_box_op('rbox<?php echo $r['id']; ?>');"><p>&starf;</p>Rate Product</button>
                </div>

            </div>

            <div class="p-box-2">
                <div class="p-title p-box-lh">
                    <a href="index.php"><?php echo $r['title']; ?></a>
                </div>
                <div class="p-rating p-box-lh">
                    <p class="p-r"><?php echo $r['rating']; ?> &starf;</p>
                    <span class="p-r-n"><?php echo $r['ratings_total']; ?> Ratings</span>
                </div>
                <div class="p-price p-box-lh">
                    <span>
                        <!--i class="fas fa-rupee-sign"></i-->₹<?php echo $r['price']; ?> /-
                    </span>
                </div>
                <div class="p-detail p-box-lh">
                    <p>Details :</p>
                    <pre><?php echo $r['detail']; ?></pre>
                </div>
            </div>

            <div class="rate_box" id="rbox<?php echo $r['id']; ?>">
                <p class="close_btn close_rt_box" id="cl_rt_box<?php echo $r['id']; ?>" onclick="close_alert(this.id);">+</p>
                <label class="top_cross"></label>
                <p class="rate_txt">How do you rate this product?</p>
                <form action="" method="POST" style="display: flex;align-items: flex-end;" name="rt_form" onsubmit="return rate_val_check();">
                    <div class="r_stars">
                        <div class="star_box">
                            <label class="star_lable" for="<?php echo $r['id']; ?>rv1">
                                <input type="radio" name="rate_val" value="1" id="<?php echo $r['id']; ?>rv1">
                                <i class="fas fa-star star<?php echo $r['id']; ?>" onclick="star_colors('<?php echo $r['id']; ?>', '1');"></i>
                                <label class="experience">Worst</label>
                            </label>
                        </div>
                        <div class="star_box">
                            <label class="star_lable" for="<?php echo $r['id']; ?>rv2">
                                <input type="radio" name="rate_val" value="2" id="<?php echo $r['id']; ?>rv2">
                                <i class="fas fa-star star<?php echo $r['id']; ?>" onclick="star_colors('<?php echo $r['id']; ?>', '2');"></i>
                                <label class="experience">Normal</label>
                            </label>
                        </div>
                        <div class="star_box">
                            <label class="star_lable" for="<?php echo $r['id']; ?>rv3">
                                <input type="radio" name="rate_val" value="3" id="<?php echo $r['id']; ?>rv3">
                                <i class="fas fa-star star<?php echo $r['id']; ?>" onclick="star_colors('<?php echo $r['id']; ?>', '3');"></i>
                                <label class="experience">Avrage</label>
                            </label>
                        </div>
                        <div class="star_box">
                            <label class="star_lable" for="<?php echo $r['id']; ?>rv4">
                                <input type="radio" name="rate_val" value="4" id="<?php echo $r['id']; ?>rv4">
                                <i class="fas fa-star star<?php echo $r['id']; ?>" onclick="star_colors('<?php echo $r['id']; ?>', '4');"></i>
                                <label class="experience">Good</label>
                            </label>
                        </div>
                        <div class="star_box">
                            <label class="star_lable" for="<?php echo $r['id']; ?>rv5">
                                <input type="radio" name="rate_val" value="5" id="<?php echo $r['id']; ?>rv5">
                                <i class="fas fa-star star<?php echo $r['id']; ?>" onclick="star_colors('<?php echo $r['id']; ?>', '5');"></i>
                                <label class="experience">Excellent!</label>
                            </label>
                        </div>
                    </div>
                    <input type="hidden" id="rate_val<?php echo $r['id']; ?>" value="0" name="rate_val">
                    <input type="hidden" id="rate_id" value="<?php echo $r['id']; ?>" name="rete_id">
                    <input type="button" id="rate_val_sub<?php echo $r['id']; ?>" value="Rate">
                </form>
            </div>
        </div>
<?php

        }
    }

?>
    </section>

    <?php       include "includes/footer.php";    ?>

</body>

<script>


    function add_to_cart(p_id){
        p_qt = $('#pq'+p_id).val();

        $.ajax({
            url: "add_to_cart.php",
            type: "POST",
            data: {p_i:p_id, p_q:p_qt},
            success: function(data){
                if(data == 1){
                    $('#qb'+p_id).hide();
                    $('#add_c_s'+p_id).parent().show();
                }
                else{
                    $('#qb'+p_id).hide();
                    $('#add_c_f'+p_id).parent().show();
                }
            }
        });
    }

    
</script>

</html>