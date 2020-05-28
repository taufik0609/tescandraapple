
<?php $this->load->view('tampil/navbar'); ?>
  <body class="bg-light">
    <div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Edit Data Transaksi</h4>
      <?php foreach ($barang as $data) {?>
      <form class="form-horizontal" action="<?php echo base_url('index.php/home/edit_sbarang/'.$data->id_barang); ?>" method="post">
        <div class="mb-3">
          <label for="nama_barang">Nama Barang</label>
          <input type="text" class="form-control" name="nama_barang" value="<?php echo $data->nama_barang;?>">
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" value="<?php echo $data->email;?>">
        </div>

        <div class="mb-3">
          <label for="no_hp">No Handphone</label>
          <input type="number" class="form-control" name="no_hp" value="<?php echo $data->nomor_hp;?>">
        </div>

        <div class="mb-3">
          <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control" name="keterangan" value="<?php echo $data->keterangan;?>">
        </div>
        <div class="mb-3">
          <label>Total Pembayaran :</label><label><a>Rp. <?php echo number_format($data->total_bayar,2,',','.');?></a></label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan</button>
      </form>
      <?php } ?>
      </div>
    </div>
  </div>
<?php $this->load->view('tampil/footer'); ?>