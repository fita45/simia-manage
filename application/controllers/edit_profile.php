<?php
class edit_profile extends CI_Controller{
    private $username, $data;
	function __construct(){
       parent::__construct();		
		 if($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE){
		 echo "<script>alert('Session Telah Habis, Silahkan Login !');</script>";
        redirect('login','refresh');
        };
		if($this->input->post('id') != TRUE ){
		 echo "<script>alert('Kembali ke halaman profile !');</script>";
        redirect('profile','refresh');
        };
        $this->load->model('model_master');
    }
	
	function index(){

	$data = array(
			'title'=>'Edit Profile',
			'id'    => $this->input->post('id'),
			'golongan_darah'    => $this->input->post('goldar'),
			'name'        => $this->input->post('nama'),
			'tanggal_lahir'=> $this->input->post('tanggal'),
			'alamat'=> $this->input->post('alamat'),
			'email'	  	  => $this->input->post('email'),
			'desk'	  	  => $this->input->post('desk'),
			'jenis_kelamin'=> $this->input->post('jk'),
			'telpon'	  => $this->input->post('telp'),
			'navbar' =>'profile',
        );
	$this->load->view('element/v_header',$data);
    $this->load->view('pages/v_edit_profile');
	$this->load->view('element/v_footer');
	}
	function Cancel(){
	redirect(base_url('profile'),'refresh');}
	function EditProfile(){
		$id    = $this->input->post('id');
		$data = array(
			
			'golongan_darah'    => $this->input->post('goldar'),
			'nama'        => $this->input->post('nama'),
			'tanggal_lahir'=> $this->input->post('tanggal'),
			'alamat			'=> $this->input->post('alamat'),
			'email'	  	  => $this->input->post('email'),
			'desk'	  	  => $this->input->post('desk'),
			'jenis_kelamin'=> $this->input->post('jk'),
			'telpon'	  => $this->input->post('telp'),
        );
		$this->model_master->EditProfile('member',$data,'member_id = "'.$id.'"');
		echo "<script>alert('Sukses Edit Profile !');</script>";
		redirect(base_url('profile'),'refresh');
		
    }
}
