<?php
class m_stock_darah extends CI_Model{
    function __construct(){
        parent::__construct();
    }

//  ================= CREATE CODE ==================
    //    ID Darah
    function getIdDarah()
	{
        $q = $this->db->query("select MAX(RIGHT(id_darah,3)) as id_max from stock_darah");
        $id = "";
        if($q->num_rows()>0)
		{
            foreach($q->result() as $k)
			{
                $tmp = ((int)$k->id_max)+1;
                $id = sprintf($tmp);
            }
        }
		else
		{
            $id = "1";
        }
        return "Drh-".$id;
    }

    //    Golongan Darah
    public function getGolonganDarah(){
        $q = $this->db->query("select MAX(RIGHT(golongan_darah,3)) as gol_darah from stock_darah");
        $gol_darah = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ($k->gol_darah);
                $gol_darah = sprintf($tmp);
            }
        }else{
            $gol_darah = "-";
        }
        return "GD-".$gol_darah;
    }

    //    Tanggal Masuk
    public function getTanggal(){
        $q = $this->db->query("select MAX(RIGHT(tanggal,3)) as tanggal from stock_darah");
        $tgl = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ($k->tanggal)+1;
                $tgl = sprintf($tmp);
            }
        }else{
            $tgl = "-";
        }
        return $tgl;
    }

//  ============= GET DATA =================
    function getStockDarah(){
        return $this->db->query("select * from stock_darah ")->result();
    }
    
// 

}