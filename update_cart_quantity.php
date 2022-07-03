<?php

    include "connect.php";

    $p_id = $_POST['p_i'];
    $p_qt = $_POST['p_q'];
    
    $s = mysqli_query($con, "SELECT * FROM products WHERE id=$p_id ");
    $r = mysqli_fetch_array($s);

    $p_pr = $r['price'];

    if(!$p_qt > 0){
        $p_qt_total = $p_pr;
    }
    else{
        $p_qt_total = $p_pr*$p_qt;
        // $update = mysqli_query($con,"UPDATE `cart` SET qty=$p_qt, total=$p_qt_total WHERE id='$c_id'");
    }

    echo $p_qt_total;

    // if($update){
    //     echo $p_qt_total;
    // }
?>