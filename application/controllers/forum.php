<?php
class forum extends CI_Controller{
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
	$content = $this->M_login->list_posting();
	$data=array(
            'title'=>'Forum',
			'content'=>$content,
			'navbar' =>'forum1',
    );
	$this->load->view('element/v_header',$data);
    $this->load->view('pages/index');
	$this->load->view('element/v_footer');
	}
	
	function new_post(){
		$this->load->model('M_login');
		$data=array(
            'title'=>'Posting',
			'navbar' =>'forum2',
			
    );
		$this->load->view('element/v_header',$data);
		$this->load->view('pages/new_post');
		$this->load->view('element/v_footer');
	}
	function save_post(){
		$this->load->model('M_login');
		if($this->M_login->save()) redirect('forum');
		else redirect('forum');
	}
	
	function del($PID){
		$this->load->model('M_login');
		$this->M_login->del($PID);
		redirect('forum');
	}
	
	function edit($PID){
				$this->load->model('M_login');
		$data = array(
			'title'	 => 'Posting',
			'content'=> $this->M_login->list_posting(),
			'navbar' =>'forum1',
		);
		$data['is_edit'] = 1;
		$data['post'] = $this->M_login->get_post($PID);
		$this->load->view('element/v_header',$data);
		$this->load->view('pages/new_post');
		$this->load->view('element/v_footer');	

		
	}
	
	function edit_post(){
		$this->load->model('M_login');
		$this->M_login->edit_post();
		redirect('forum');
	}
	function baca($id=false)
	{
		$this->load->model('Webmodel');
		if($id){
			$baca = $this->Webmodel->baca_posting($id);
		}
		else{
			$baca = 'Tidak ada data untuk ditampilkan';
		}
		$this->load->model('M_login');
		$menu = $this->M_login->menu_kiri();
		$data = array(
					'title'	 => 'Baca Posting',
					'menu'	 => $menu,
					'baca'=> $baca,
					'navbar'=> 'forum1',
					
				);
		$this->load->view('element/v_header');
		$this->load->view('pages/baca_posting',$data);
		$this->load->view('element/v_footer');	
	}
	
	
	
}

