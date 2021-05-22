<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/Home
   *	- or -
   * 		http://example.com/index.php/Home/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/Home/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function __construct(){
    parent::__construct();
    $this->load->model('Common_Model');
    $this->load->library('session');
  }

  private function get_userdata(){
    $businessData = $this->Common_Model->fetch_records('business_details');
    $businessData = $businessData[0];

    return array('businessData' => $businessData);
  }

  public function index(){
    $pageData = $this->get_userdata();
    $pageData['services'] = $this->Common_Model->fetch_records('services', array('is_deleted' => 0));

    $this->load->view('site/index', $pageData);
  }

}
