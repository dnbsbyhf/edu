<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
	
	}

	public $error = false;

	public $username = '';

	public $password = '';

	public $userId = '';

	public function index()
	{
		
		if(!($this->error = $this->checkVailid())){
			$result = $this->model_user->is_exsit($this->username,$this->password);

			if(count($result) != 1){
				$this->error = "账号或密码错误";
			}else{
				$id = $result->id;
				$this->session->set_userdata('userId',$id);

			}
		}
		$this->load->view('login',array('error'=>$this->error,'username'=>$this->username,'password'=>$this->password));
		
	}


	public function checkVailid(){
		
		$username = $this->username = $this->input->post('username',true);

		$password = $this->password = $this->input->post('password',true);
		
		if(!$username  && !$password && $this->error == false){
			return '';
		}

		if(!$username || strlen($username) > 20){
			return "无效账号名";
		}

		if(!$password || strlen($password) > 20){
			return "无效密码";
		}

		return '';
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */