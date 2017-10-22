<nav aria-label="You are here:" role="navigation">
<ul class="breadcrumbs">
  <li>
    <a href="?module=jnis_laundry-create?">Home</a></li>
  <li class="disabled">Data Jenis Laundry</li>
</ul>
</nav>
<form action="" method="post">
  <!-- field nama -->
  <div class="grid-x grid-padding-x">
    <div class="small-3 cell">
      <label for="nama" class="text-right middle">Nama</label>
    </div>
    <div class="small-6 cell">
      <input type="text" name="nama" placeholder="Nama" required>
    </div>
  </div>
  <!-- Aksi -->
  <div class="grid-x grid-padding-x">
    <div class="small-3 cell">
      <label for="nama" class="text-right middle"></label>
    </div>
    <div class="small-6 cell">
		<div class="small button-group">
  <button class="button" type="submit" name="submit">Simpan</button>
  <button class="button" type="reset">Reset</button>
  <a class="button" href='javascript:self.history.back();'>Kembali</a>
</div>
    </div>
  </div>
</form>
<?php 
require_once("database.php");

// check action submit
if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  // validation empty
  if(empty($nama)){
    if(empty($nama)){
      echo "Nama harus diisi";
    }
    
  } else {
    $db=new Database();
    $db->insert('jenis_laundry',array('nama'=>$nama));
    $res=$db->getResult();
    // redirect to list
    header('Location: /laundry2/index.php?module=jenis_laundry');
  }
}
?>
</html>
</body>