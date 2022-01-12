<?php
class cont_view_pemesanan extends CI_Controller{
  	function __construct(){
		parent::__construct();		
		 if($this->session->userdata('USERNAME') != TRUE && $this->session->userdata('PASS') != TRUE){
            redirect('login');
        };
        $this->load->model('model_master');
    }
	/*
	function index(){
        $data=array(
            'title'=>'Stock Darah'
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_stock_darah');
        $this->load->view('element/v_footer');
    }
	
	//private $kd_penjualan, $kd_barang, $data;
	*/
    function index(){
        $data=array(
        'title'=>'Daftar Pemesanan Darah',
            'pemesanan_darah'=>$this->model_master->manualQuery("SELECT * from pemesanan_darah")->result()
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_pemesanan_penderita');
        $this->load->view('element/v_footer',$data);

        // $this->session->unset_userdata('limit_add_cart');
        // $this->cart->destroy();
    }

}