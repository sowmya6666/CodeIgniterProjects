<?php
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\libraries\REST_Controller;
//use Restserver\libraries\CI_Controller;	
defined('BASEPATH') OR exit('No direct script access allowed');

//require(APPPATH . '/libraries/REST_Controller.php');
//require(APPPATH . '/libraries/Format.php');

//use Restserver\Libraries\REST_Controller;

/**
 * Description of RestPostController
 *
 * @author sowmya
 */
class RestPostController extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ContactModel', 'cm');
    }

    function add_contact_post() {
       $contact_name = $this->post('contact_name');
        $contact_address = $this->post('contact_address');
        $contact_phone = $this->post('contact_phone');
        echo $contact_name;
        $result = $this->cm->add_contact($contact_name, $contact_address, $contact_phone);

        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } else {
            $this->response(array('status' => 'success'));
        }
    }


}

