<?php
// definisikan konstansta
define('PHI',3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
echo '<br/>Kelilingnya : '.$kll;
?>
<hr/>
<?php
echo 'Nama databasenya : '.DBNAME;
echo '<br/>Lokasi databasenya ada di '.DBSERVER;


//JAWABAN SOAL 3.5
//1. kalau variable user menampung nilai inputan dari user atau nilai yang kita definisikan sendiri, sedangkan variable system menampilkan DOkumen Root itu di taro dan
//menampilkan nama filenya saja 
//2. yaitu sama sama menampilkan dimana direktori atau filenya di simpan *maaf kalau salah masih belum paham betul
?>