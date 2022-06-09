<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
	private $aTemplate = array();
	var $data = array();


	public function render()
	{
		$this->aTemplate['header'] = $this->load->view('templates/header', $this->data, true);
		$this->aTemplate['content'] = $this->load->view($this->content, $this->data, true);
		$this->aTemplate['footer'] = $this->load->view('templates/footer', $this->data, true);
		$this->load->view('templates/index', $this->aTemplate);
	}
}
