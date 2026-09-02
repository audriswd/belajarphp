<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama = "Budi";
    $umur = 30;
    $sudahmenikah = false;



    // buat kalimat nama saya budi , umur saya 30 tahun
    // echo "nama $nama, umur $umur tahun";


    // if ($sudahmenikah == true) {
    //     echo "sudah menikah";
    //  }
    //     echo "belum menikah";

    // 123 berurutan
    // for ($i=0; $i < 10; $i++) {
    //     echo "<br>";
    //     echo $i;
    // }

    //tampilkan bil ganjil 1 3 5
    // for ($i=1; $i < 10; $i+=2) {
    //         echo $i;
    //     }

    // jika total belanja 100rb pot 10%
    //     $belanja = 150000;
    // if ($belanja>100000) {
    //     $diskon = $belanja * 0.10;
    //     $total = $belanja -$diskon;
    //     echo "total bayar $total";
    // } else {
    //     echo "total bayar $belanja"; 
    // }

    //cek login
    // $user_asli ="admin";
    // $pass_asli ="rahasia123";

    // $input_user = "admin";
    // $input_pass = "rahasia123";

    // if ($user_asli == $input_user && $pass_asli == $input_pass){
    //     echo "ok"; 
    // } else {
    //     echo "salah";
    // }

    // $mhs=['deni','sindi','deka'];
    // $datamhs=["nama"=>"merry","umur"=>20,"kelas"=>"a","prodi"=>"bd"];
    // //kalimat saya merry, umur saya 20 tahun, saya prodi bd kelas a
    // echo "saya $datamhs[nama], umur saya $datamhs[umur]";

    function perkalian($angka1, $angka2) {
        return $angka1*$angka2;
    }

    $hasil = perkalian(20,10);
    echo $hasil;

     ?> 
</body>
</html>