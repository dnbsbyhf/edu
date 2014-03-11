<?
	class Model_video extends CI_Model {

		//每页展示个数
		public $pageNumber = 30;
		//列表页展示个数
		public $listNumber = 2;



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

	    function getVideoById($vid = ""){
	    	$vid = (int)$vid;
	    	if(!$vid){
	    		return array();
	    	}

	    	$this->db->where("id",$vid);

	    	$query = $this->db->get("video");

	    	return $query->result_array();

	    }



	    //拿用户上传视频
	    function getVideoByUid($uid){
	    	$uid = (int)$uid;
	    	if(!$uid){
	    		return array();
	    	}

	    	$this->db->where("uid",$uid);
	    	
	    	// $this->db->limit($this->listNumber,($page-1)*$this->listNumber);

	    	$query = $this->db->get("video");

	    	return $query->result_array();
	    }



	    //自定义筛选
	    function getVideoByFree($where){
	    	foreach ($where as $key => $value) {
	    		$this->db->where($key,$value);
	    	}
	    	
	    	$query = $this->db->get("video");
	    	
	    	return $query->result_array();
	    }

	    //删除视频
	    function deleteVideoById($id){
	    	if(!$id)
	    		return false;
	    	
	    	$this->db->where('id',$id);

	    	$this->db->delete('video');

	    }

	    // 添加视频
	    function add($data){
	    	$this->db->insert('video', $data); 
	    }
	}

?>