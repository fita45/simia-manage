<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE){
		echo "<script>alert('Session Telah Habis, Silahkan Login !');</script>";
        redirect('login','refresh');
        };
        $this->load->model('model_master');
    }

    function index(){
        $data=array(
            'title'=>'Dashboard',
			'user' =>$this->session->userdata('USERNAME'),
			'level' =>$this->session->userdata('LEVEL'),
			'navbar' => 'index',
            //'dt_contact'=>$this->model_master->getAllContact(),
        );
        $this->load->view('element/v_header',$data);
		$this->load->view('subelement/v_navbar');
        $this->load->view('pages/v_dashboard');
        $this->load->view('element/v_footer');
    }

}
