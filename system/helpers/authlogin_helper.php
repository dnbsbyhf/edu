<?php



if ( ! function_exists('authLogin'))
{
	function authLogin()
	{
		$CI =& get_instance();

		$path = $CI->uri->uri_string();

		$id = $CI->session->userdata('userId');

		if($id){

			if(strstr($path,"login")){
				redirect('/','refresh');
			}

			return true;
		}else{
			
			$CI->session->set_userdata('redirect','/index.php/'.uri_string());
			
			if(!strstr($path,"login")){
				redirect('/index.php/login','refresh');
			}
			
		}

	}
}

?>