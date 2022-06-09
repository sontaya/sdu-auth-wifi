<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataservices extends MY_Controller {


	public function __construct()
	{
    parent::__construct();
    $this->load->model('master_model');
    $this->load->model('profile_model');

		// if(! $this->session->userdata('uid'))
		// {
		// 	$allowed = array('login','do_login', 'logout');
		// 	if(!in_array($this->router->fetch_method(), $allowed))
		// 	{
		// 	  redirect('Backoffice/login');
		// 	}
		// }
  }


  public function search()
  {
    $conditions = array(
      "CODE_PERSON" => $this->input->post('inputSearch'),
      "CITIZEN_CODE" => null,
      "CODE_FACULTY" => $this->input->post('selectDepartment'),
      "CODE_DEPARTMENT" => $this->input->post('selectDepartmentSub'),
      "CODE_SITE" => '',
      "STAFF_TYPE" => $this->input->post('selectStaffType'),
      "SUBSTAFF_TYPE" => $this->input->post('selectSubStaffType'),
      "CODE_STATUS" => array('01','03')
    );
    $response = $this->profile_model->get_profile(array('conditions'=> $conditions));

    header('Content-Type: application/json');
    echo json_encode($response);

  }

  public function get_status()
  {
    $response = $this->master_model->get_status();
    header('Content-Type: application/json');
    echo json_encode($response);
  }

  public function get_department_sub($faculty)
  {
    $conditions = array(
      'CODE_FACULTY' => $faculty
    );

    $response = $this->master_model->get_department_sub(array('conditions'=> $conditions));
    header('Content-Type: application/json');
    echo json_encode($response);
  }

  public function get_personal_address($emp_id)
  {
    $conditions = array(
      'CODE_PERSON' => $emp_id
    );

    $response = $this->profile_model->get_address(array('conditions'=> $conditions));
    header('Content-Type: application/json');
    echo json_encode($response);
  }

}
