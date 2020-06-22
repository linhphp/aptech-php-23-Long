<?php
    $uName = $_POST["ten"];
    $password = $_POST["matkhau"];
    

    if ($uName == "long"&&$password=="123123"){
        echo "Dang Nhap Thanh Cong";
    } else {
        echo "Dang Nhap That Bai";
    }

    /*$kq=($uName =="admin" &&$password =="123456")?"Thanh cong":"That bai";
    echo $kq;*/




