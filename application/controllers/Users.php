<?php 
/**
 *
 * Aurovine Users list
 *
 */

defined('BASEPATH') or die('No direct script asscess is allowed');


class Users extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function users_list(){

		$url = API_URL.'get_all_users';
		$json = file_get_contents($url);
		$data['data'] = json_decode($json);
		$this->load->view('users_list',$data);
	}
}