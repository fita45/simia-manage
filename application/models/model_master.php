<?php
class Model_master extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function manualQuery($q)
    {
        return $this->db->query($q);
    }
	
	function getPemesanan(){
	return $this->db->query("SELECT * from pemesanan_darah")->result();
	}
	//===============CHAT==========================
	function retrieve(){
			$menus='';
			$judul=$this->input->post('judul');
			$addTag="";
			$query=$this->db->query("select *,member.username from t_chat 
			left join member on member.member_id=t_chat.member_id
			order by t_chat.id DESC limit 0,20");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					if($data->level=="Member"){
						echo "<p style='width:500px'><lebel style='font-family:calibri;text-align:left'><b>".$data->username."</b>: ";
						echo $data->chat."</label></p>";
					}else{
						echo "<p style='width:500px'><lebel style='font-family:calibri;text-align:right'><b>".$data->username."</b>: ";
						echo $data->chat."</label></p>";
					}
				}
			}

		}

		 
	function actchat(){
		$id=$this->input->post('id');
		$member_id=$this->session->userdata('ID');
		$chatme=$this->input->post('chatme');
		$level=$this->session->userdata('LEVEL');
		 
		 
		$data=array(
	 	 'member_id'=>$member_id,
		 'chat'=>$chatme,
		 'level'=>$level,
		 'date'=>date("Y-m-d"),
		 'jam'=>date("H:m:s"),
		);
		$this->db->trans_start();
		$this->db->insert('t_chat',$data);
		$this->db->trans_complete();
		
	}

//  ============= GET DATA =================
   
    function getUser($q){
        return $this->db->query($q);
    }
	 public function getProfile($table,$data)
    {
        return $this->db->get_where($table, $data);
    }

//  =========== GET DATA BY ID ============
  


//  ============ INSERT DATA ==============
    function insertMember($data){
        $query = $this->db->insert('member',$data);
        return $query;
    }
	function insertPemesanan($data){
        $query = $this->db->insert('pemesanan_darah',$data);
        return $query;
    }


//  =========== UPDATE DATA ==============
   function EditProfile($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }

}