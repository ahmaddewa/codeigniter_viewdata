<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Users extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Users_model');
	}
	public function index(){
		$data['users'] = $this->Users_model->getAllUsers();
		$this->load->view('user_list.php', $data);
	}
}

?>