<?php 
/**
 *
 * Aurovine artists list
 *
 */

defined('BASEPATH') or die('No direct script asscess is allowed');


class Artists extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function artists_list(){

		$url = API_URL.'get_all_artists';
		$json = file_get_contents($url);
		$data['data'] = json_decode($json);
		$this->load->view('artists_list',$data);
	}
}