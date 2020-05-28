<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index(){
		// memgambil data pada model M_barang pada function tampil_barang untuk dikirimkan ke view index pada folder admin
		$data['barang']=$this->M_barang->tampil_barang()->result();
		return $this->load->view('admin/index',$data);
	}
	function tampil_tambah(){
		// memanggil view tambah
		$this->load->view('admin/tambah');
	}
	function edit_barang($id){
		// memgambil data pada model M_barang pada function form_edit untuk dikirimkan ke view edit pada folder admin
		$data['barang']=$this->M_barang->form_edit($id)->result();
		return $this->load->view('admin/edit',$data);
	}
	function tambah_barang(){
		// membuat deklarasi
		$imail = $this->input->post('email');
		$ibarang = $this->input->post('nama_barang');
		$ino = $this->input->post('no_hp');
		$iketerangan = $this->input->post('keterangan');
		// Konfigurasi email untuk kirim otomatis
		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'entestore69@gmail.com', 
            'smtp_pass'   => 'Taufik699679',  
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

		// Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('entestore69@gmail.com', 'candra-apple-solution.com');
        // Email penerima yang diambil dari inputan
        $this->email->to($imail);
        // Subject email
        $this->email->subject('Transaksi Pembelian | Candra-Apple-Solution.com');
        // Isi email
        $this->email->message("Transaksi Pembelian Baru <br><br>Nama Barang : $ibarang<br>
        	No Hp : $ino<br>Keterangan : $iketerangan<br>Total Pembayaran : Rp. 4.000.000<br><br> Terimakasih Sudah Berbelanja di Candra Apple Solution.");
        // untuk mengirimkan
        $this->email->send();

        // memasukan inputan ke dalam field
        $data = array(
        	'nama_barang' => $ibarang,
        	'email' => $imail,
        	'nomor_hp' => $ino,
        	'keterangan' => $iketerangan,
        	'total_bayar' =>4000000
        );
        // untuk menyimpan data inputan ke database
        $this->M_barang->tambah_mbarang('barang',$data);
        return redirect('home/index');
    }
    function edit_sbarang($id){
    	$data = array(
    		'nama_barang' => $this->input->post('nama_barang'),
    		'email' => $this->input->post('email'),
    		'nomor_hp' => $this->input->post('no_hp'),
    		'keterangan' => $this->input->post('keterangan')
    	);
    	$this->M_barang->edit_mbarang('barang',$data,$id);
    	return redirect('home/index');
    }
    function hapus_barang($id){
    	$this->M_barang->hapus_mbarang('barang',$id);
    	return redirect('home/index');
    }
}