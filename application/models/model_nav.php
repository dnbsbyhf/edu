<?
	class Model_nav extends CI_Model {

	    function __construct()
	    {
	        parent::__construct();
	    }

	    function getNav($key){
	    	$this->db->where("key",$key);
	    	$query = $this->db->get("tab");

	    	return $query->result_array();
	    }


	}

?>