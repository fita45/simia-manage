<?php
class Registrasi extends CI_Controller{
    private $username, $data;
	function __construct(){
        parent::__construct();
        $this->load->model('model_master');
    }
	
	function index(){
	$data=array(
            'title'=>'Registrasi Page'
    );
	$this->load->view('element/v_header',$data);
    $this->load->view('pages/v_registrasi');
	$this->load->view('element/v_footer');
	}
	
	function add_registrasi(){
		$data = array(
            'username'    => $this->input->post('username'),
			'password'    => md5($this->input->post('password')),
			'golongan_darah'    => $this->input->post('goldar'),
			'nama'        => $this->input->post('nama'),
			'tanggal_lahir'=> $this->input->post('tanggal'),
			'alamat			'=> $this->input->post('alamat'),
			'email'	  	  => $this->input->post('email'),
			'desk'	  	  => $this->input->post('desk'),
			'jenis_kelamin'=> $this->input->post('jk'),
			'telpon'	  => $this->input->post('telp'),
        );

		foreach ($this->model_master->getUser("SELECT * from member")->result() as $r){
            if($data['username'] == "" || $data['password'] == ""){
				 echo "<script>alert('Username atau password kosong!');</script>";
				 redirect(base_url('registrasi'),'refresh');
            }
            elseif ($data['username']  == $r->username || $data['email'] == $r->email || $data['telpon'] == $r->telpon){
				$status = 0;  
				echo "<script>alert('Username atau email sudah terpakai!');</script>";
				redirect(base_url('registrasi'),'refresh');	
            }
			elseif ($data['telpon'] == $r->telpon){
				$status = 0;  
				echo "<script>alert('No Telphon sudah terpakai!');</script>";
				redirect(base_url('registrasi'),'refresh');	
            }
            else{
				$status = 1;			
            }
        }
		if($status == 1){
				$this->model_master->insertMember($data);
				echo "<script>alert('Sukses Daftar !');</script>";
				redirect(base_url(''),'refresh');
		}
    }
}
