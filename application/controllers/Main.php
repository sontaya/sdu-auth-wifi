<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {


	public function __construct()
	{
    parent::__construct();
    $this->load->model('Radius_model');

		// if(! $this->session->userdata('uid'))
		// {
		// 	$allowed = array();
		// 	if(!in_array($this->router->fetch_method(), $allowed))
		// 	{
		// 	  redirect('auth');
		// 	}
		// }
  }

	public function index()
	{
    redirect('main/register');
  }

  public function register()
  {
    $this->load->view('main/register');
  }



  public function dev()
  {

    // $regis_idcard = '3730600203245';
    // $regis_password = generateRandomString();

    // $data = array(
    //   "regis_idcard" => $regis_idcard,
    //   "regis_password" => $regis_password
    // );
    // $extend_response = $this->Radius_model->renew($data);

    // var_dump($extend_response);

    $this->load->view('main/login');
  }

  public function do_register()
  {

    $regis_idcard = $this->input->post('regis_idcard');
    $regis_name = $this->input->post('regis_name');
    $regis_surname = $this->input->post('regis_surname');
    $regis_email = $this->input->post('regis_email');
    $regis_password = generateRandomString();


    //--Check new user
    $get_conditions = array(
      "username" => $regis_idcard
    );
    $response = $this->Radius_model->get_userinfo(array('conditions'=>$get_conditions));
    if($response)
    {
      //--Extend Account
      $data = array(
        "regis_idcard" => $regis_idcard,
        "regis_password" => $regis_password
      );
      $extend_response = $this->Radius_model->renew($data);

    }else{
      //--Register new Account
      $data = array(
        "regis_idcard" => $regis_idcard,
        "regis_name" => $regis_name,
        "regis_surname" => $regis_surname,
        "regis_email" => $regis_email,
        "regis_password" => $regis_password,
        "regis_creationby" => 'WIFI-CAFE'
      );
      $register_response = $this->Radius_model->register($data);

    }

    //--Get user Expire
    $expire_response = $this->Radius_model->get_userexpire(array('conditions'=>$get_conditions));

    $response = array(
      "login_user" => $regis_idcard,
      "login_password" => $regis_password,
      "login_expire" => $expire_response[0]['value']
    );
    header('Content-Type: application/json');
    echo json_encode($response);

  }



}
