<?php
class Login extends CI_Controller{
	
	private $username, $data, $status;
	
    function __construct(){
        parent::__construct();

        $this->load->model('model_master');
    }

    function index(){
		if($this->session->userdata('USERNAME') == TRUE && $this->session->userdata('LEVEL') == TRUE){
            redirect('dashboard');
        };
        $data=array(
            'title'=>'Login Page'
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_login');
		$this->load->view('element/v_footer');		
    }

    function cek_login() {
        $username = $this->input->post('username');
        $pass = md5($this->input->post('password'));
		foreach ($this->model_master->getUser("SELECT * from member")->result() as $r){
            if($username == "" || $pass == ""){
				 echo "<script>alert('Username atau password kosong!');</        }
    script>";
				 redirect(base_url(''),'refresh');
            elseif ($username  == $r->username && $pass == $r->password){
				$status = 1;
				$data = array(
                    'USERNAME' => $r->username,
                    'LEVEL' => $r->level,
                    'ID'=> $r->member_id,
                );
                $this->session->set_userdata($data);
				echo "<script>alert('Sukses Login !');</script>";
				redirect(base_url('dashboard'),'refresh');          
            }
            else{
				$status = 0;				
            }
		}
			if($status==0){
				echo "<script>alert('Username atau password SALAH! Pastikan Capslock tidak aktif');</script>";
                redirect(base_url(''),'refresh');			
			}
			
        
    }

    function logout() {
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('LEVEL');
        $this->session->unset_userdata('ID');
        redirect('login');
    }
}
