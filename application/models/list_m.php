<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class list_m extends CI_Model {
	var $table='tb_pasien';
	function __construct()
	{
		parent::__construct();
	}
function index() 
		{
			
		}

function getpetugas($pencarian,$offset=0,$total){
        if ($pencarian){
            $this->db->like('ID', $pencarian);

        }
        $result['total_rows']=$this->db->count_all($this->table);
        if ($pencarian) {
            $this->db->like('ID', $pencarian);  
        }
        $query = $this->db->get($this->table, $total,$offset);
        $result['data']= $query->result();
        return $result;
    }

    function cetak(){
         
        $query = $this->db->get('tb_pasien');
        return $query->result();
    }
}