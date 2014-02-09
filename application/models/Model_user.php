<?
	class Model_user extends CI_Model {

	    function __construct()
	    {
	        parent::__construct();
	    }

	    function is_exsit($username,$password){

	    	$this->db->where("username",$username);
	    	$this->db->where("password",$password);
	    	$this->db->select("id");

	    	$query = $this->db->get('user');

	    	return $query->row();
	    }
	}

?>