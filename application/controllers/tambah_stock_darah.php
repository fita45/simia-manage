<?php
class Tambah_Stock_Darah extends CI_Controller{
    private $username, $data;
	function __construct(){
        parent::__construct();
        $this->load->model('m_stock_darah');
    }
	
	function index(){
	$data=array(
            'title'=>'Update Stock Darah'
    );
	$this->load->view('element/v_header',$data);
    $this->load->view('pages/v_tambah_stock_darah');
	$this->load->view('element/v_footer');
	}
	
	
	function tambah_stock_darah(){
		$data = array(
            'id_darah'    => $this->input->post('username'),
			'golongan_darah'    => $this->input->post('golongan_darah'),
			'tanggal'    => $this->input->post('tanggal'),
			'jam'    => $this->input->post('jam'),
			'kota'    => $this->input->post('kota'),
			'instansi'    => $this->input->post('instansi'),
        );

		foreach ($this->m_stock_darah->getStockDarah() as $r):
            	$this->m_stock_darah->insertBarang($data);
				$data = array(
                    'id_darah'		=> $k->id_darah,
                    'golongan_darah'  => $k->golongan_darah,
                    'tanggal' 		 => $k->tanggal,
                    'jam'    		 => $k->jam,
					'kota'    		=> $k->kota,
					'instansi'    	=> $k->instansi,
                );
            $this->session->set_userdata($data);
			redirect(base_url('stock_darah'),'refresh');
        endforeach;
    }
}