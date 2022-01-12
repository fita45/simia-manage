<?php
class baca_posting extends CI_Controller{
    private $baca, $data;
	function __construct(){
        parent::__construct();
        
    }
	function index($id=false){
		$this->load->model('Webmodel');
		if($id){
			$baca = $this->Webmodel->baca_posting($id);
		}
		else{
			$baca = 'Tidak ada data untuk ditampilkan';
		}
		$this->load->model('Webmodel');
		//$menu = $this->M_login->menu_kiri();
		$data = array(
					'title'	 => 'Baca Posting',
					'content'=> $baca
					);
		$this->load->view('element/v_header',$data);
		$this->load->view('pages/theme');
		$this->load->view('element/v_footer');
	}
}
