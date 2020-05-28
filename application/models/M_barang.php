<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	function tampil_barang(){
		// mengambil data pada tabel barang
		return $this->db->get('barang');
	}
	function form_edit($id){
		// mengambil data barang berdasarkan id_barang
		return $this->db->where('id_barang',$id)
		->get('barang');
	}
	function tambah_mbarang($table,$data){
		// menambahkan data
		return $this->db->insert($table, $data);
	}	
	function edit_mbarang($table,$data,$id){	
		//mengubah data barang berdasarkan id_barang 
		return $this->db->where('id_barang',$id)
		->update($table, $data);
	}	
	function hapus_mbarang($table,$id){
		// menghapus data barang berdasarkan id_barang
		return $this->db->where('id_barang',$id)
		->delete($table);
	}
	
}
