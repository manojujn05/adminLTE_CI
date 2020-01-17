<?php 
/**
 *
 * Songs contorller 
 *
 * 
 */
	defined('BASEPATH') or die('Direct script access is not allowed');

Class Songs extends CI_Controller{


	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	Public function Songs_list()
	{
		$url = API_URL.'get_all_songs';
		$json = file_get_contents($url);
		$data['data'] = json_decode($json);
		$this->load->view('songs_list',$data);
	}
}


?>