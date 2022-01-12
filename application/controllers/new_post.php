<?php
class new_post extends CI_Controller{
    private $username, $data;
	function __construct(){
        parent::__construct();
		 if($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE){
		echo "<script>alert('Session Telah Habis, Silahkan Login !');</script>";
        redirect('login','refresh');
        }
    }
	function index(){
		$this->load->model('M_login');
		$data=array(
            'title'=>'Posting',
			'is_edit' => 0,
			'navbar' =>'forum1'
    );
		$this->load->view('element/v_header',$data);
		$this->load->view('pages/new_post');
		$this->load->view('element/v_footer');
	}
}