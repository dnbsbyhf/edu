<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VideoAdd extends CI_Controller {

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
        $this->load->helper('file');
		$this->load->model('model_video');	
		$this->load->model('model_user');
	}

	public function index()
	{
		//判断登录
		authLogin();

		$error =$this->session->userdata('add_error');

		if($error){
			$this->session->unset_userdata('add_error');
		}

		$this->load->view('add',array(
			"error"=>$error
		));
	}

	public function update(){
		$config['upload_path'] = getcwd().'/uploads/';
	  	$config['allowed_types'] = '*';
		$config['max_size'] = '80000';
	  	$this->load->library('upload', $config);
		$uid = $this->session->userdata('userId');


		$user_info =$this->model_user->getUserInfo($uid);

		$uname = $user_info["uname"];

	  	if ( ! $this->upload->do_upload()){
		 	$error = array('error' => $this->upload->display_errors());
		 	dbg("上传视频失败<a href=".base_url()."index.php/videoadd>重新上传</a>");
		} 
		else{
			$file = $this->upload->data();
			$data = array(
				"title"=>$this->input->post('title'),
				"intro"=>$this->input->post('intro'),
				"grade"=>$this->input->post('grade'),
				"chapter"=>$this->input->post('chapter'),
				"section"=>$this->input->post('section'),
				"date"=>date("Y-m-d"),
				"src"=>base_url()."uploads/".$file["file_name"],
				"uid"=>$uid,
				"uname"=>$uname
			);

			if($this->checkData($data)){
				$this->model_video->add($data);
				dbg("上传视频成功<a href=".base_url()."index.php/videolist>返回列表</a>");
			}else{
				unlink($file["full_path"]);
				redirect('/index.php/videoadd','refresh');
			}
		}
	}

	// 核对数据的有效性
	function checkData($data){
		if(!$data['title']){
			$this->session->set_userdata('add_error',"标题不能为空");
			return false;
		}
		if(!$data['intro']){
			$this->session->set_userdata('add_error',"简介不能为空");
			return false;
		}

		if(!$data['grade']){
			$this->session->set_userdata('add_error',"教材不能为空");
			return false;		
		}

		if(!$data['chapter']){
			$this->session->set_userdata('add_error',"章不能为空");
			return false;
		}

		if(!$data['section']){
			$this->session->set_userdata('add_error',"节不能为空");
			return false;
		}

		if(!$data['src']){
			$this->error = "标题不能为空";
			return false;
		}
		
		
		$file_info = pathinfo($data['src']);
		if(!preg_match("/(mpeg)|(flv)|(mp3)|(mp4)|(3gp)|(ogg)|(rmvb)|(f4v)/",$file_info["extension"],$match)){
			$this->error = "视频格式有误";
			return false;
		}

		return true;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */