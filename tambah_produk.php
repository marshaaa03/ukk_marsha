<?php
        include "koneksi.php";
        if (isset($_POST["ok"]))
        {
            $produk_id = $_POST["produk_id"];
            $nama_produk = $_POST["nama_produk"];
            $harga = $_POST["harga"];
            $stok = $_POST["stok"];

            $simpan = mysqli_query($koneksi, "insert into produk set 
                produk_id='$produk_id',
                nama_produk='$nama_produk',
                harga='$harga',
                stok='$stok'");
                if ($simpan) {
                    echo "<div class = 'alert alert-success'>Sukses menambah barang</div>";
                  }  
                else {
                    echo "<div class = 'alert alert-danger'>Gagal Menambah Data</div>";
                  }
        }
    ?>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="text-center">
                <h2>Input Data Produk</h2>
                <form method="post" action="">
                    <div class="form-grup">
                        <label><b>ID Produk</b></label>
                        <input type="text" class="form-control" placeholder="produk id" name="produk_id">
                    </div>
                    <div class="form-grup">
                        <label><b>Nama Produk</b></label>
                        <input type="text" class="form-control" placeholder="nama produk" name="nama_produk">
                    </div>
                    <div class="form-grup">
                        <label><b>Harga</b></label>
                        <input type="text" class="form-control" placeholder="harga" name="harga">
                    </div>
                    <div class="form-grup">
                        <label><b>Stok</b></label>
                        <input type="text" class="form-control" placeholder="stok" name="stok">
                    </div>
              
                    <br>
                    <button type="submit" name="ok" class="btn btn-success">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                </form>
            </div>
        </div>
    </div>