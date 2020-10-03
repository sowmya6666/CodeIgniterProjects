<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Views extends CI_Controller {


    public function login()
    {
        $data['js_to_load'] = array();
        $data['css_to_load'] = array();

        $this->load->view('include/header',$data);
        $this->load->view('users/login');
        $this->load->view('include/footer');
    }

	public function createNode()
	{
        $data['js_to_load'] = array('pages/js/create-api.js');
        $data['css_to_load'] = array();

        $this->load->view('include/header',$data);
        $this->load->view('include/left-menu');
        $this->load->view('create-api/create-api-ui');
        $this->load->view('include/footer');
	}
    public function listNode()
    {
        $data['js_to_load'] = array('vendor/datatables/js/jquery.dataTables.min.js','vendor/datatables-plugins/dataTables.bootstrap.min.js','vendor/datatables-responsive/dataTables.responsive.js','pages/js/list-node.js');
        $data['css_to_load'] = array('vendor/datatables-plugins/dataTables.bootstrap.css','vendor/datatables-responsive/dataTables.responsive.css');

        $this->load->view('include/header',$data);
        $this->load->view('include/left-menu');
        $this->load->view('create-api/list-screen');
        $this->load->view('include/footer');
    }
    public function appFlow()
    {
        $data['js_to_load'] = array();
        $data['css_to_load'] = array();

        $this->load->view('include/header');
        $this->load->view('include/left-menu');
        $this->load->view('app-flow/app-flow',$data);
        $this->load->view('include/footer');
    }

}
