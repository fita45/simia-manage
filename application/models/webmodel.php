<?php

class Webmodel extends CI_Model {
	function __construct()
	{
		
	}
	
	/* menu sebelah kiri */
	function menu_kiri()
	{
		$menu = anchor(base_url().'index.php/home','Home','title="Beranda website" class="menu_kiri"').
				anchor(base_url().'index.php/home/register','Log In','title="register" class="menu_kiri"').
				anchor('http://google.com','Google','title="Beranda website" class="menu_kiri"').
				anchor('http://yahoo.com','Yahoo','title="Beranda website" class="menu_kiri"').
				anchor('http://www.facebook.com/fita.ellathifa','Facebook','title="Beranda website" class="menu_kiri"');
				;
		return $menu;
	}
	function save()
	{
		$id = $this->input->post('no_id');
		$username= $this->input->post('nama');
		$password= $this->input->post('alamat');
		$email= $this->input->post('email');
		$telepon= $this->input->post('telepon');
		$masuk= $this->db->query("INSERT INTO register values('$id','$username','$password','$email','$telepon')");
	}
	
	function login(){
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			return count($this->db->query("select * from member where user='$user' and pass='$pass'")->result());
			
		}
	/* Menampilkan posting */
	function list_posting()
	{
		$data='';
		$query = $this->db->query('select * from posting order by PID desc limit 10');
		//lihat apakah ada data dalam tabel
		$num = $query->num_rows();
		if($num>0){
			foreach($query->result() as $key){
				$headline = explode('<div style="page-break-after: always;">',$key->Isi);
				$data .='<div id="headline">
				          <h3 class="judul">'.$key->Judul.'</h3>
						  <div id="content_headline">
							'.$headline[0].'
						  </div>
						  <p align="right">'.anchor(base_url().'index.php/home/baca/'.$key->PID,'&nbsp;&nbsp;&nbsp;<img src="'.base_url().'theme/images/readmore2.jpg"/>&nbsp;&nbsp;&nbsp;','title="baca selengkapnya"').'</p>
				         </div>';
			}
			return $data;
		}
		else{
			return 0;
			//Kirimkan 0 jika tidak ada datanya
		}
	}
	
	
	/* manampilkan posting secara detail */
	function baca_posting($id)
	{
		$query = $this->db->query('select * from posting where PID="'.$id.'"');
		if($query->num_rows()>0){
			foreach($query->result() as $key){
				$data = '<h3 class="judul">'.$key->Judul.'</h3>'.
				         $key->Isi.
						 '<p>Oleh '.$key->Penulis.' &raquo; '.$key->PostDate.'</p>';
			}
		}
		else{
			$data = 0;
		}
		return $data;
	}
	
	function hapus_posting($id)
	{
		$hapus = $this->db->query('delete from posting where PID="'.$id.'"');
	}
	
	function cek_login(){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$sql = "SELECT * FROM member WHERE user = '$user' AND pass = '$pass'";
		$data = $this->db->query($sql);
		$data = $data->row_array();
		if(isset($data['user'])) return TRUE;
		else return FALSE;
	}
}
