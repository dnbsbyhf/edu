<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller {

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

        $this->load->model('model_user');
		$this->load->model('model_video');	

	}


	public function index()
	{
		
		//用户信息

		$userInfo = array();

		$userId = $this->session->userdata("userId");

		if($userId){
			$userInfo = $this->model_user->getUserInfo($userId);
		}



		//视频信息
		$vid = (int)$this->input->get("vid");

		if(!$vid){
			redirect('/','refresh');
		}

		$video = $this->model_video->getVideoById($vid);

		$this->load->view('detail',array(
			'uname'=>count($userInfo)>0 ? $userInfo['uname'] : "",
			'video'=>$video
		));
	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */