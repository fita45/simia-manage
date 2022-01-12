<?php
class profile extends CI_Controller{
  	function __construct(){
		parent::__construct();		
		 if($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE){
		 echo "<script>alert('Session Telah Habis, Silahkan Login !');</script>";
        redirect('login','refresh');
        };
        $this->load->model('model_master');
    }

    function index(){
		$id = $this->session->userdata('ID');
        $data=array(
        'title'=>'Profile',
        'profile'=>$this->model_master->getProfile('member','member_id = "'.$id.'"')->result(),
		'navbar' =>'profile',
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_profile');
        $this->load->view('element/v_footer');

    }

}