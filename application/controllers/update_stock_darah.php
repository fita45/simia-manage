<?php
class Update_Stock_Darah extends CI_Controller{
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
    $this->load->view('pages/v_update_stock_darah');
	$this->load->view('element/v_footer');
	}
	
	
	function update_stock_darah(){
		$data = array(
            'username'    => $this->input->post('username'),
			'password'    => $this->input->post('password'),
        );

		foreach ($this->model_master->getUser() as $r):
            if($data['username'] == "" || $data['password'] == ""){
                $status = 0;
            }
            elseif ($data['username']  != $r->username || $data['password'] != $r->password){
                $status = 1;
				$this->model_master->insertBarang($data);
				foreach ($this->model_master->getUser() as $k):
				$data = array(
                    'USERNAME' => $k->username,
                    'PASS' => $k->password,
                    'STATUS' => $k->status,
                    'ID'=> $k->member_id,
                );
                $this->session->set_userdata($data);
				redirect(base_url('dashboard'),'refresh');
				endforeach;
            }
            else{
                $status = "nama atau password sama";
                
            }
            $output = '{ "status": "'.$status.'" }';
            echo $output;
        endforeach;
    }
}
