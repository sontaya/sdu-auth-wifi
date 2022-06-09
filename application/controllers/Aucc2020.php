<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aucc2020 extends MY_Controller {


	public function __construct()
	{
    parent::__construct();
    $this->load->model('Aucc_model');

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
    redirect('aucc2020/register');
  }

  public function register()
  {
    $this->load->view('aucc2020/register');
  }

  public function dev()
  {

    // $regis_idcard = '3730600203245';
    // $regis_password = generateRandomString();

    // $data = array(
    //   "regis_idcard" => $regis_idcard,
    //   "regis_password" => $regis_password
    // );
    // $extend_response = $this->Aucc_model->renew($data);

    // var_dump($extend_response);

    $this->load->view('aucc2020/login');
  }

  public function do_register()
  {

    $regis_idcard = $this->input->post('regis_idcard');
    $regis_name = $this->input->post('regis_name');
    $regis_surname = $this->input->post('regis_surname');
    $regis_email = $this->input->post('regis_email');
    $regis_password = generateRandomStringLowerCase();


    //--Check new user
    $get_conditions = array(
      "username" => $regis_idcard
    );
    $response = $this->Aucc_model->get_userinfo(array('conditions'=>$get_conditions));

    if($response){
      //--Extend Account
      $data = array(
        "regis_idcard" => $regis_idcard,
        "regis_password" => $regis_password
      );
      $extend_response = $this->Aucc_model->renew($data);

    }else{
      //--Register new Account
      $data = array(
        "regis_idcard" => $regis_idcard,
        "regis_name" => $regis_name,
        "regis_surname" => $regis_surname,
        "regis_email" => $regis_email,
        "regis_password" => $regis_password,
        "regis_creationby" => 'AUCC2020'
      );
      $register_response = $this->Aucc_model->register($data);

    }

    //--Get user Expire
    $expire_response = $this->Aucc_model->get_userexpire(array('conditions'=>$get_conditions));

    $response = array(
      "login_user" => $regis_idcard,
      "login_password" => $regis_password,
      "login_expire" => $expire_response[0]['value']
    );
    header('Content-Type: application/json');
    echo json_encode($response);

  }


  public function register_info()
  {


    //--Store session
    $arraydata = array(
      'account_user' => $this->input->post('account_user'),
      'account_password' => $this->input->post('account_password'),
      'account_expire' => $this->input->post('account_expire')
    );
    $this->session->set_userdata($arraydata);

    header('Content-Type: application/json');
    echo json_encode($arraydata);

    // $this->session->set_flashdata('account_user',  $this->input->post('account_user'));
    // $this->session->set_flashdata('account_password',  $this->input->post('account_password'));
    // $this->session->set_flashdata('account_expire',  $this->input->post('account_expire'));

    // redirect('aucc2020/register_info_download');
  }

  public function register_info_download()
  {

    // $data['account_user'] = $this->input->post('account_user');
    // $data['account_password'] = $this->input->post('account_password');
    // $data['account_expire'] = $this->input->post('account_expire');

    // print_r($this->session->flashdata);

    $data['account_user'] = $this->session->userdata('account_user');
    $data['account_password'] = $this->session->userdata('account_password');
    $data['account_expire'] = $this->session->userdata('account_expire');


    $this->load->view('aucc2020/register_info',$data);

  }

}
