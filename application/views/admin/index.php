<!-- Mengambil navbar.php pada folder tampil -->
<?php $this->load->view('tampil/navbar'); ?>
  <div class="container">
   <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Transaksi</h3>
          <div class="mb-2">
           <a href="<?php echo base_url('index.php/home/tampil_tambah'); ?>" class="btn btn-primary btn-lg">Beli Barang Baru</a>
         </div>
         <div class="box-body">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Total Pembayaran</th>
                <th scope="col">Email</th>
                <th scope="col">No Handphone</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- membuat variabel yang akan digunakan untuk penomeran -->
              <?php $no=0; ?>
              <!-- perulangan data yang diterima dari controller -->
              <?php foreach ($barang as $data) { $no++ ?>
              <tr>
                <th><?php echo $no; ?></th>
                <td><?php echo $data->nama_barang;?></td>
                <td>Rp. <?php echo number_format($data->total_bayar,2,',','.');?></td>
                <td><?php echo $data->email;?></td>
                <td><?php echo $data->nomor_hp;?></td>
                <td><?php echo $data->keterangan;?></td>
                <td><a href="<?php echo base_url('index.php/home/edit_barang/'.$data->id_barang); ?>"> <button type="button" class="btn btn-info">Edit</button> </a>
                  <a href="<?php echo base_url('index.php/home/hapus_barang/'.$data->id_barang); ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
              </tr>
            </tbody>
              <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Mengambil footer.php pada folder tampil -->
<?php $this->load->view('tampil/footer'); ?>