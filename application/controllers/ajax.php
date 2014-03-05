<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

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


	public function _success(){
		echo '{"code":"200"}';
		exit(0);
	}

	public function _error(){
		echo '{"code":"500"}';
		exit(0);
	}


	public function deleteVideoBy()
	{	
		$vid = $this->input->get("vid");

		$uid = $this->session->userdata('userId');
		
		if($vid && $uid){
			$video = $this->model_video->getVideoByFree(array(
				"id ="=>$vid,
				"uid ="=>$uid
			));
			if(count($video) == 1){
				$this->model_video->deleteVideoById($vid);
				$this->_success();
			}else{
				$this->error();
			}

		}else{
			$this->_error();
		}
	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */