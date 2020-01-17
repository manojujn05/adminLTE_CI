<?php 
	/**
	 *
	 *
	 * Albums controller 
	 *
	 * 
	 */

Class Albums extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
	}


	public function albums_list(){
		$url = API_URL.'get_all_albums';
		$json = file_get_contents($url);
		$data['data'] = json_decode($json);
		$this->load->view('albums_list',$data);
	}
}

?>