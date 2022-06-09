<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
    $this->load->model('auth_model');

		// if(! $this->session->userdata('uid'))
		// {
		// 	$allowed = array('login','do_login', 'logout');
		// 	if(!in_array($this->router->fetch_method(), $allowed))
		// 	{
		// 	  redirect('auth/');
		// 	}
		// }
  }

  public function index()
  {
    $this->load->view('main/login');
  }

	public function do_login()
  {
    $username = $this->input->post('username');
    $passwd = $this->input->post('passwd');
    $response = $this->auth_model->login($username,$passwd);

    $arraydata = array(
      'uid' => $response["uid"],
      'mail' => $response["mail"],
      'title' => $response["title"],
      'hrcode' => $response["hrcode"],
      'citizencode' => $response["citizencode"],
      'displayname' => $response["displayname"]
    );

    $this->session->set_userdata($arraydata);

    header('Content-Type: application/json');
    echo json_encode($arraydata);

  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
  }

  public function debug()
  {
    $identity = 'chatchawan_lap';
    $password = 'zaq123456789';
    // $auth_info = ldap_authenticate($identity, $password);
    $auth_info = ldap_bind_authenticate($identity, $password);
    print_r($auth_info);

  }

}
