<?php
class Model_forum extends CI_Model{
    function __construct(){
        parent::__construct();
    }
// Mengambil Katerogi
function getKategori()
	{
        $page = 1;
        $limit = 10;
         if( isset($_GET['p']) ){
                        $page = $_GET['p'];
                    }
         $offset = ($page - 1) * $limit;
                    
         $query = $this->db->query("SELECT COUNT(id_kategori) AS jumlah from kategori");
         $src = mysqli_query($con,$query);
         $data = mysqli_fetch_array($src);
         $total = $data['jumlah'];
         $pagenum = ceil($total / $limit);
                    
         for ($i = 1; $i <= $pagenum; $i++);
    }

}