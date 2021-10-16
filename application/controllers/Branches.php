<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends CI_Controller {

	public function __construct() {
		  parent::__construct();
		  $this->load->helper('url'); 
		  $this->load->model('Branches_model');

	}

	public function index()
	{
		$page_title = "Branches View";
		$data = array(
            "branches" => $this->Branches_model->get_branches()
        );
		$this->load->view('layout/header');
		$this->load->view('branches/list' ,$data);
		$this->load->view('layout/footer');

	}

	public function create()
	{
		$data = array(
			"banks" =>  $this->Branches_model->get_banks()
        );
		$this->load->view('layout/header');
		$this->load->view('branches/create', $data);
		$this->load->view('layout/footer');
	}

	public function store()
	{
		$this->Branches_model->store_branch();
		redirect(base_url('branches'));
	}

	public function edit($id)
	{
		$data = array(
            "branch" => $this->Branches_model->get_branch($id),
			"banks" =>  $this->Branches_model->get_banks()
        );
		$this->load->view('layout/header');
        $this->load->view('branches/edit', $data);
		$this->load->view('layout/footer');
	}

	public function update($id)
	{
		$this->Branches_model->update_branch($id);
       	redirect(base_url('branches'));
	}

	public function delete($id)
	{
		$this->Branches_model->delete_branch($id);
       	redirect(base_url('branches'));
	}

}
