<?
	class Model_video extends CI_Model {

		//每页展示个数
		public $pageNumber = 1;

	    function __construct()
	    {
	        parent::__construct();
	    }


	    //导航筛选
	    function filterVideo($grade = '',$chapter = '', $section = '', $page = 1){

	    	if($grade)
	    		$this->db->where('grade',$grade);

	    	if($chapter)
	    		$this->db->where('chapter',$chapter);

	    	if($section)
	    		$this->db->where('section',$section);

	    	if((int)$page){
	    		$page = (int)$page;
	    		$this->db->limit($this->pageNumber,($page-1)*$this->pageNumber);
	    	}

	    	$query = $this->db->get("video");

	    	return $query->result_array();

	    }


	    //拿详细信息通过Id

	    function getVideoById($cid = ""){
	    	$cid = (int)$cid;
	    	if(!$cid){
	    		return array();
	    	}

	    	$this->db->where("id",$cid);

	    	$query = $this->db->get("video");

	    	return $query->result_array();

	    }

	}

?>