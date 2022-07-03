<?php

    include "../includes/connect.php";


    $p_id = $_POST['p_i'];
    $p_qt = $_POST['p_q'];

    $s = mysqli_query($con, "SELECT * FROM `products` WHERE id=$p_id ");
    $r = mysqli_fetch_array($s);

    $p_pr = $r['price'];
    $total = $p_pr*$p_qt;

    $insert = mysqli_query($con, "INSERT INTO `cart` (p_id, price, qty, total) VALUES ('$p_id', '$p_pr', '$p_qt', '$total')");

    if($insert){
        echo 1;
    }

?>