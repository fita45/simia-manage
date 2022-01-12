<?php
class Stock_Darah extends CI_Controller{
    private $username, $data;
	function __construct(){
        parent::__construct();
        $this->load->model('m_stock_darah');
		$this->load->model('m_app');
    }
	
	//private $kd_penjualan, $kd_barang, $data;
	
    function index(){
        $data=array(
            'title'=>'Stock Darah',
            'active_stock_darah'=>'active',
            'stock_darah'=>$this->m_app->manualQuery("SELECT id_darah,  golongan_darah, tanggal, jam, kota, instansi from stock_darah")->result(),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_stock_darah',$data);
        $this->load->view('element/v_footer',$data);

        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
    }
	
	
	function update_stock_darah(){
    $data=array(
            'title'=>'Update Stock Darah'
    );
	$this->load->view('element/v_header',$data);
    redirect(base_url('update_stock_darah'),'refresh');
	$this->load->view('element/v_footer');
	}

//    GET DATA
    function get_stock_darah(){
        $data=array(
            'title'=>'Tambah Penjualan Barang',
            'active_penjualan'=>'active',
            'kd_penjualan'=>$this->m_stock_darah->getKodePenjualan(),
            'data_barang'=>$this->m_stock_darah->manualQuery("SELECT * from tbl_barang where stok > 0")->result(),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_add_penjualan');
        $this->load->view('element/v_footer',$data);
    }

    function detail_penjualan(){
        $data=array(
            'title'=>'Stock Darah',
            'stock_darah'=>$this->m_app->manualQuery("SELECT * from stock_darah")->result(),
        );
        $this->load->view('element/v_header',$data);
        $this->load->view('pages/v_stock_darah');
        $this->load->view('element/v_footer',$data);
    }

    function get_detail_barang(){
        $kd_barang=$this->input->post('kd_barang');
        $data=array(
            'detail_barang'=>$this->model_master->getBarangById($kd_barang),
        );
        $this->load->view('pages/ajax_detail_barang',$data);
    }


//    INSERT DATA
    function tambah_stock_darah_to_chart(){
        $data = array(
            'id_darah'		=> $this->input->post('id_darah'),
            'golongan_darah'  => $this->input->post('golongan_darah'),
            'tanggal' 		 => $this->input->post('tanggal'),
            'jam'  			 => $this->input->post('jam'),
			'kota'  			=> $this->input->post('kota'),
			'instansi'  		=> $this->input->post('instansi'),
        );
        $this->cart->insert($data);
        redirect('stock_darah/tambah_stock_darah');
    }
	function tambah_stock_darah(){
	$data = array(
            'golongan_darah'  => $this->input->post('golongan_darah'),
            'tanggal' 		 => $this->input->post('tanggal'),
            'jam'  			 => $this->input->post('jam'),
			'kota'  			=> $this->input->post('kota'),
			'instansi'  		=> $this->input->post('instansi'),
        );
        $this->m_app->insertData("stock_darah",$data);
        redirect('stock_darah');
    }
    /*function tambah_stock_darah(){
        $d_header['id_darah'] = $this->m_app->getIdDarah();
        $temp = $d_header['id_darah'];
        $d_header['golongan_darah'] = $this->input->post('golongan_darah');
		$d_header['tanggal'] = date("Y-m-d",strtotime($this->input->post('tanggal')));
        $d_header['jam'] = $this->input->post('jam');
		$d_header['kota'] = $this->input->post('kota');
		$d_header['instansi'] = $this->input->post('kota');
        
        $this->m_app->insertData("stock_darah",$d_header);

        foreach($this->cart->contents() as $items){
            $d_detail['id_darah'] = $temp;
            $d_detail['golongan_darah'] = $items['golongan_darah'];
            $d_detail['tanggal'] = $items['tanggal'];
			$d_detail['jam'] = $items['jam'];
			$d_detail['kota'] = $items['kota'];
			$d_detail['instansi'] = $items['instansi'];
            $this->m_app->insertData("stock_darah",$d_detail);
        }
        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
        redirect('stock_darah');
    }*/



//    DELETE
    function hapus_barang(){
        $kd_penjualan= $this->uri->segment(3);
        $bc=$this->m_stock_darah->getSelectedData("tbl_penjualan_header",$kd_penjualan);
        foreach($bc->result() as $dph){
            $sess_data['kd_penjualan'] = $dph->kd_penjualan;
            $this->session->set_userdata($sess_data);
        }

        $kode = explode("/",$_GET['kode']);
        if($kode[0]=="tambah")
        {
            $data = array(
                'rowid' => $kode[1],
                'qty'   => 0
            );
            $this->cart->update($data);
        }
        else if($kode[0]=="edit")
        {
            $data = array(
                'rowid' => $kode[1],
                'qty'   => 0
            );
            $this->cart->update($data);
            $hps['kd_penjualan'] = $kode[2];
            $hps['kd_barang'] = $kode[3];
            $this->m_stock_darah->deleteData("tbl_penjualan_detail",$hps);

            $key_barang['kd_barang'] = $hps['kd_barang'];
            $d_u['stok'] = $kode[4]+$kode[5];
            $this->m_stock_darah->updateData("tbl_barang",$d_u,$key_barang);
        }
        redirect('penjualan/pages_edit/'.$this->session->userdata('kd_penjualan'));
    }

    function hapus(){
        $hapus['id_darah'] = $this->uri->segment(3);
        $q = $this->m_app->getSelectedData("stock_darah",$hapus);
        foreach($q->result() as $d){
            $key['id_barang'] = $d->id_barang;
        }
        $this->m_app->deleteData("stock_darah",$hapus);
        redirect('stock_darah');
    }
}
