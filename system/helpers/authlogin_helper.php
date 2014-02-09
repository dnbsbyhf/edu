<?php



if ( ! function_exists('authLogin'))
{
	function authLogin()
	{
		$CI =& get_instance();


		$id = $CI->session->userdata('userId');

		if($id){
			return true;
		}else{
			
			$CI->session->set_userdata('redirect','/index.php/'.uri_string());
			
			redirect('/index.php/login','refresh');
		}

	}
}

?>