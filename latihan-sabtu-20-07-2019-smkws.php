<?php

//menentukan Km ke meter
$km = 15;
$meter=$km * 1000;
echo "Km ".$km."ke Meter = ".$meter;

echo "<br><br><br>";

//jam ke menit
$jam=5;
$menit = $jam*60;
echo "Jam ".$jam."ke Menit = ".$menit;

echo "<br><br><br>";

//jam ke detik
$jam=3;
$detik=$jam*3600;
echo "Jam ".$jam."ke Detik = ".$detik;

echo "<br><br><br>";

//menghitung umur
$tahunini=2019;
$tahunlahir=2002;
$umur=$tahunini-$tahunlahir;
echo "Tahun Lahir ".$tahunlahir." - Umur = ".$umur;

echo "<br><br><br>";

//luas segitiga
$alas=5;
$tinggi=10;
$luassegitiga=1/2*($alas*$tinggi);

echo "<br><br><br>";

//kelilinglingkaran
$jari=10;
$pi = 3.14;
$keliling= ($pi*$jari)*2;

echo "<br><br><br>";

//luaspersegipanjang
$panjang=3;
$lebar=5;
$luas = $panjang * $lebar;

echo "<br><br><br>";

//keliling persegi yang diketahui luas
$luas=100;
$sisi = $luas/2;
$keliling = $sisi * 4;

echo "<br><br><br>";

//bilangan prima
$bilangan=3;
if($bilangan%2!=0){
	$prima="Ya";
}
echo "Bilangan Prima =".$prima."\n";

echo "<br><br><br>";

//konversi celvius ke farenheit
$celcius = 100;
$farenheit=(9/5)*$celcius+3;
echo "celcius=".$celcius." fahrenheit=".$farenheit."\n";

echo "<br><br><br>";

//kelulusan siswa
$kkm=75;
$kehadiran = 70*(35/100);
$uts=80*(35/100);
$uas=75*(30/100);
$na=$kehadiran+$uts+$uas;
echo "Nilai Akhir = ".$na;
if ($na>=$kkm){
	echo "Lulus"."\n";
}
else {
	echo "tidak lulus"."\n";
}

echo "<br><br><br>";

//perulangan
for($i=0;$i<=5;$i++){
	echo "*";
	echo "<br>";
}

echo "<br><br><br>";

for($a=0;$a<=5;$a++){
	for ($b=0;$b<=$a;$b++){
		 echo "*";
	}
	echo "<br>";
}

echo "<br><br><br>";

for($a=5;$a>=1;$a++){
	for ($b=1;$b<=$a;$b++){
		 echo "*";
	}
	echo "<br>";
}

?>
