<?php
    $conn = mysqli_connect("sql.freedb.tech","freedb_pips96","Pv7NP7Y&qB%n!R3","freedb_pietro_tds10");
    mysqli_set_charset($conn,"utf8");
    if(!$conn){
        echo "Erro:".mysqli_connect_error().PHP_EOL;
    }    
?>