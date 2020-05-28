
<?php $this->load->view('tampil/navbar'); ?>
  <body class="bg-light">
    <div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Isi Data Transaksi</h4>
      <form class="form-horizontal" action="<?php echo base_url('index.php/home/tambah_barang'); ?>" method="post">
        <div class="mb-3">
          <label for="nama_barang">Nama Barang</label>
          <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Iphone x" required>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
        </div>

        <div class="mb-3">
          <label for="no_hp">No Handphone</label>
          <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="08....." required>
        </div>

        <div class="mb-3">
          <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control" id="keterangan" name="keterangan" required>
        </div>
        <div class="mb-3">
          <label>Total Pembayaran :</label><label><a>Rp 4.000.000</a></label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan</button>
      </form>
      </div>
    </div>
  </div>
<?php $this->load->view('tampil/footer'); ?>