<?php
    
    include("koneksi.php");

    // $tbel = "CREATE TABLE tbUSER (
    //     id INT  AUTO_INCREMENT PRIMARY KEY,
    //     nama VARCHAR(35),
    //     email VARCHAR(255),
    //     username VARCHAR (10),
    //     passkey VARCHAR (255),
    //     iduser VARCHAR (255)
    //      );";

    $tbel = "CREATE TABLE tbmahasiswa (
        id INT  AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        nim VARCHAR(255),
        prodi VARCHAR (10),
        jenis_kelamin VARCHAR (255),
        idmhs VARCHAR (255)
         );";
     

         $hsl =mysqli_query($cnn , $tbel);
         if($hsl){
            echo "Table $tbel ==> sukses";
         } 