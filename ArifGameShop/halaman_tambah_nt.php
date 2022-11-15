<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Tambah - Nintendo</title>
    <link rel="stylesheet" ty[e="text/css" href="assets/css/style_admin.css">
  </head>
  <body>
      <center>
        <h1>Tambah Produk Nintendo</h1>
      <center>
      <form method="POST" action="proses_tambah_nt.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_game" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" />
        </div>
        <div>
          <label>Kategori</label>
         <input type="text" name="kategori" required="" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="harga" required="" />
        </div>
        <div>
          <label>Gambar Produk</label>
         <input type="file" name="gambar_game" required="" />
        </div>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>