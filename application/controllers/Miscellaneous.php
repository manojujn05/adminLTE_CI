<?php 
/**
 *
 * Miscellaneous controller
 *
 * 
 */


Class Miscellaneous extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function featured_list(){
		$url = API_URL.'get_all_feature_songs';
		$json = file_get_contents($url);
		$data['data'] = json_decode($json);
		$this->load->view('featured_list',$data);

	}
}

?>