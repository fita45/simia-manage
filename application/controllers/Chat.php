<?php
class chat extends CI_Controller{
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
            'title'=>'Chat Page',
			'level' =>$this->session->userdata('LEVEL'),
			'navbar' =>'chat',
    );
	$this->load->view('element/v_header',$data);
	$this->load->view('subelement/v_navbar');
	$this->load->view('pages/v_chat');
	$this->load->view('element/v_footer');	
  
    }
	function retrieve(){
		$this->model_master->retrieve();
	}
	function actchat(){
		$this->model_master->actchat();	
		$this->retrieve();			
	}	
}

?>
