<?php

class M_login extends CI_Model {
	function __construct()
	{
		
	}
	
	
	function save(){
		$data = array(
			'Judul' => $_POST['judul'],
			'Isi' => $_POST['posting'],
			'Category' => $_POST['kategori'],
			'Penulis' => $_POST['nama'],
			'PostRead' => 0,
			'PostDate' => date('Y-m-d H:i:s')
		);
		//foreach($data as $key => $value){
			//echo $key . ' => ' . $value . '<br>';
		//}
		
		if($this->db->insert('posting', $data)) return TRUE;
		else return FALSE;
	}
	
	function del($PID){
		$sql = "DELETE FROM posting WHERE PID = '$PID'";
		$this->db->query($sql);
	}
	
	function get_post($PID){
		$sql = "SELECT * FROM posting WHERE PID = '$PID'";
		$data = $this->db->query($sql);
		return $data->row_array();
	}
	
	function edit_post(){
		$data = array(
			'Judul' => $_POST['judul'],
			'Isi' => $_POST['posting'],
			'Category' => $_POST['kategori'],
			'Penulis' => $_POST['nama'],
			'PostDate' => date('Y-m-d H:i:s')
		);	
		$init = array(
			'PID' => $_POST['PID']
		);
		$this->db->update('posting', $data, $init);
	}
	
	/* menu sebelah kiri */
	function menu_kiri()
	{
		$menu = anchor(base_url().'index.php/home','Home','title="Beranda website" class="menu_kiri"').
				anchor(base_url().'index.php/Post/new_post','Posting','title="register" class="menu_kiri"').
				anchor('http://google.com','Google','title="Beranda website" class="menu_kiri"').
				anchor('http://yahoo.com','Yahoo','title="Beranda website" class="menu_kiri"').
				anchor('http://www.facebook.com/fita.ellathifa','Facebook','title="Beranda website" class="menu_kiri"').
				anchor(base_url().'index.php/home','Log Out','title="Beranda website" class="menu_kiri"');
				
		return $menu;
	}
	
	/* Menampilkan posting */
	function list_posting()
	{
		$data='';
		$query = $this->db->query('select * from posting order by PID desc limit 10');
		
		/*lihat apakah ada data dalam tabel
		$num = $query->num_rows();
		if($num>0){
			foreach($query->result() as $key){
				$headline = explode('<div style="page-break-after: always;">',$key->Isi);
				$data .='<div id="headline">
				          <h3 class="judul">'.$key->Judul.'</h3>
						  <div id="content_headline">
							'.$headline[0].'
						  </div>
						  <p align="right">'.anchor(base_url().'index.php/post/baca/'.$key->PID,'Readmore','title="baca selengkapnya"').'</p>
				         </div>';
			}
			return $data;
		}
		else{
			return 0;
			//Kirimkan 0 jika tidak ada datanya
		} */
		return $query;
	}

}
