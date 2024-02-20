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
                <h2>Input Data Penjualan</h2>
                <form method="post" action="">
                    <div class="form-grup">
                        <label><b>ID Penjualan</b></label>
                        <input type="text" class="form-control" placeholder="penjualan id" name="penjualan_id">
                    </div>
                    <div class="form-grup">
                        <label><b>Tanggal Penjualan</b></label>
                        <input type="date" class="form-control" placeholder="tanggal penjualan" name="tanggal_penjualan">
                    </div>
                    <div class="form-grup">
                        <label><b>Total Harga</b></label>
                        <input type="text" class="form-control" placeholder="total_harga" name="total_harga">
                    </div>
              
                    <br>
                    <button type="submit" name="ok" class="btn btn-success">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">CANCEL</button>
                </form>
            </div>
        </div>
    </div>