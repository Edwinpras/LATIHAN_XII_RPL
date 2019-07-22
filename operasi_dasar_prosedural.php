<?php
//DEKLARASI VARIABEL
$variabel_int = 1;
$variabel_string = "String";
$variabel_float = 3.14;

//MENCETAK OUTPUT
echo "Latihan Dasar Pemrograman";

//OPERASI ARITMATIKA
$angka1 = 10;
$angka2 = 5;
$penjumlahan = $angka1 + $angka2;
$pengurangan = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;
$modulus = $angka1 % $angka2;

//OPERASI KONDISI
//1. if..then..else
$angka = 1;
if($angka == 1){
  echo "Angka Satu";
}
else {
  echo "Bukan Angka Satu";
}

//2. if..then..else if
$angka = 1;
$angka = 1;
if($angka == 1){
  echo "Angka Satu";
}
else if ($angka == 2) {
  echo "Angka Dua";
}
else if ($angka == 3) {
  echo "Angka Tiga";
}
else if ($angka == 4) {
  echo "Angka Empat";
}
else if ($angka == 5) {
  echo "Angka Lima";
}
else {
  echo "Bukan Angka 12345";
}

//3. switch..case
$angka = 5;
switch($angka){
  case 1 :
    echo "Angka Satu";
    break;
  case 2 :
    echo "Angka Dua";
    break;
  case 3 :
    echo "Angka Tiga";
    break;
  case 4 :
    echo "Angka Empat";
    break;
  case 5 :
    echo "Angka Lima";
    break;
  default :
    echo "Bukan Angka 12345";
    break;
}

//OPERASI KONDISI BERCABANG/BERTINGKAT
//
//
//

//PERULANGAN/LOOPING
//1. while
$angka = 1;
while($angka<=10){
  echo "Angka Ke-".$angka;
  $angka++;
}

//2. do..while
$angka = 1;
do{
  echo "Angka Ke-".$angka;
  $angka++;
}
while($angka<=10);

//for
for($angka=1;$angka<=10;$angka++){
  echo "Angka Ke-".$angka;
}

//for-each
$angka = {1,2,3,4,5,6,7,8,9};
foreach($angka as $nomor){
  echo "Nomor Ke-".$nomor;
}

?>
