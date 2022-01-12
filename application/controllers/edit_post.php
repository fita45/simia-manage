<?php
class edit_post extends CI_Controller{
    private $username, $data;
	function __construct(){
        parent::__construct();
		 if($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE){
		echo "<script>alert('Session Telah Habis, Silahkan Login !');</script>";
        redirect('login','refresh');
        }
    }
	function index(){
		$PID = $this->input->post('pid');
		$this->load->model('M_login');
		$data = array(
			'title'	 => 'Posting',
			'content'=> $this->M_login->list_posting(),
			'navbar' =>'forum1',
			'post' => $this->M_login->get_post($PID)->result(),
		);
		$data['is_edit'] = 1;
		$this->load->view('element/v_header',$data);
		$this->load->view('pages/new_post');
		$this->load->view('element/v_footer');	
	}
}