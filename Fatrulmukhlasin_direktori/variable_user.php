<?php
 // definisikan variables
 $nama = 'Fatrul Mukhklasin';
 $umur = 20;
 $berat = 47.4;

 echo 'Nama : ' . $nama;
 echo '<br/>Umur : ' . $umur.' Tahun';
 echo '<br/>Berat : '.$berat.' Kg';

 echo "<br/>Hello $nama Apa kabar";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width,initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<h2><?php echo $nama;?></h2>
 </body>
 </html>