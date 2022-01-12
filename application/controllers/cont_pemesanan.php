<?php
class cont_pemesanan extends CI_Controller{
	  private $darah_id;
    function __construct(){
        parent::__construct();
		 if($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE){
            redirect('login');
        };
        $this->load->model('model_master');
    }
	
	function index(){
	$data=array(
            'title'=>'Pemesanan'
    );
	$this->load->view('element/v_header',$data);
	$this->load->view('pages/v_form_pemesanan');
	$this->load->view('element/v_footer');
		}
	
	
function add_pemesanan(){
		$data = array(
            'darah_id'    => $this->input->post('darah1'),
           'user_id'    => $this->input->post('user1'),
            'golongan_darah' => $this->input->post('golongan_darah1'),
            'tanggal' => $this->input->post('tanggal1'),
           'kota' => $this->input->post('kota1'),
           'instansi' => $this->input->post('instansi1'),
           'status' => $this->input->post('status1')
            );
			$this->model_master->insertPemesanan($data);
			// redirect ("cont_pemesanan");
}
}
