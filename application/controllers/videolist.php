<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VideoList extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
        parent::__construct();

		$this->load->model('model_video');	

	}

	public function index()
	{
		//判断登录
		authLogin();

		$page = (int)$this->input->get("page");

		$page = $page ? $page : 1;

		//拿用户Id
		$uid = $this->session->userdata('userId');
		
		//拿视频
		$videos = $this->model_video->getVideoByUid($uid,$page);
		
		$count = count($videos);

		$page_total =  ceil($count/2);

		$this->load->view('list',array(
			//分页显示			
			'videos'=>array_slice($videos,($page-1)*2,2),
			'page'=>$page,
			'count'=>$count,
			'page_total'=>$page_total
		));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */