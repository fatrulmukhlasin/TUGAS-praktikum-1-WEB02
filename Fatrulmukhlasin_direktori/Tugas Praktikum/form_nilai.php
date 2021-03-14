<form method="GET" action="form_nilai.php">
 Nama : <input type="text" name="nama" value="" size="30"/><br/>
 Mata Kuliah :
 <select name="matkul">
 <option value="DDP">Dasar-Dasar Pemrograman</option>
 <option value="BDI">Basis Data 1</option>
 <option value="WEB1">Pemrograman Web</option>
 </select><br/>
 Nilai UTS : <input type="text" name="nilai_uts" value=""
size="6"/><br/>
 Nilai UAS : <input type="text" name="nilai_uas" value=""
size="6"/><br/>
 Nilai Tugas/Praktikum : <input type="text" name="nilai_tugas"
value="" size="6"/><br/>
 <input type="submit" value="Simpan" name="proses"/>
 </form>

 <?php
 $proses= $_GET['proses'];
 $nama_siswa = $_GET['nama'];
 $mata_kuliah = $_GET['matkul'];
 $nilai_uts = $_GET['nilai'];
 $nilai_uas = $_GET['nilai'];
 $nilai_tugas = $_GET['nilai'];
 echo 'Proses : '.$proses;
 echo '<br/>Nama : '.$nama_siswa;
 echo '<br/>Mata Kuliah : '.$mata_kuliah;
 echo '<br/>Nilai UTS : '.$nilai_uts;
 echo '<br/>Nilai UAS : '.$nilai_uas;
 echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
  ?>

<!DOCTYPE html>
<html>
<head>
	<title> Form nilai	</title>
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Nilai Siswa</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Nama Lengkap" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Mata Kuliah">Mata Kuliah</label>
  <div class="col-md-4">
    <select id="Mata Kuliah" name="Mata Kuliah" class="form-control">
      <option value="1">Dasar-Dasar Pemrograman</option>
      <option value="2">Basis Data 1</option>
      <option value="3">Pemrograman Web</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nilai UTS">Nilai UTS</label>  
  <div class="col-md-4">
  <input id="Nilai UTS" name="Nilai UTS" type="text" placeholder="Nilai UTS" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nilai UAS">Nilai UAS</label>  
  <div class="col-md-4">
  <input id="Nilai UAS" name="Nilai UAS" type="text" placeholder="Nilai UAS" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nilai Tugas/Praktikum">Nilai Tugas/Praktikum</label>  
  <div class="col-md-4">
  <input id="Nilai Tugas/Praktikum" name="Nilai Tugas/Praktikum" type="text" placeholder="Nilai Tugas/Praktikum" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
</head>
<body>

</body>
</html>