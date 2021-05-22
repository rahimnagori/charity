<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizations extends CI_Controller {

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

  public function index(){
    $checkOrganization = $this->Common_Model->get_userdata();
    if(!$checkOrganization['is_logged_in'] && !$checkOrganization['is_organization']) redirect('');

    $where['id'] = $checkOrganization['organization_data']['id'];
    $pageData['orgDetails'] = $this->Common_Model->fetch_records('organizations', $where, false,true);

    $this->load->view('site/profile', $pageData);
  }

  public function login(){
    $response['status'] = 0;

    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array('required' => 'Valid email is required.'));
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
    if ($this->form_validation->run()){
      $where = $this->input->post();
      $where['password'] = md5($where['password']);
      $organization_data = $this->Common_Model->fetch_records('organizations', $where, false,true);
      if($organization_data){
        $this->Common_Model->update_user_login('organizations', $organization_data['id'], 1);
        $organizationData = [
          'is_logged_id' => 1,
          'is_organization' => 1,
          'id' => $organization_data['id'],
          'email' => $organization_data['email'],
          'phone' => $organization_data['phone']
        ];
        $this->session->set_userdata('is_logged_in', 1);
        $this->session->set_userdata('is_organization', 1);
        $this->session->set_userdata('organizationData', $organizationData);
        $response['organizationData'] = $organizationData;
        $response['status'] = 1;
        $response['redirect'] = ($organization_data['is_email_verified'] == 1) ? 'Profile' : 'Verify';
      }else{
        $response['status'] = 2;
        $response['responseMessage'] = $this->Common_Model->error('Either email or password is incorrect.');
      }
    }else{
      $response['status'] = 2;
      $response['responseMessage'] = $this->Common_Model->error(validation_errors());
    }
    echo json_encode($response);
  }

  public function email_verification($user_id, $token){
    $where['token'] = $token;
    $where['id'] = $user_id;
    $userdata = $this->Common_Model->fetch_records('organizations', $where, false, true);
    if($userdata){
      $update['token'] = null;
      $update['last_login'] = date("Y-m-d H:i:d");
      $update['is_email_verified'] = 1;
      if($this->Common_Model->update('organizations', array('id' => $userdata['id']), $update)){
        $to = $userdata['email'];
        $subject = 'Email successfully verified.';
        $body = '<p>Hello ' .$userdata['first_name'] .' ' .$userdata['last_name'] .',</p>';
        $body .= '<p>Congratulations!! your email has been verified successfully. You may now continue using our services.</p>';
        $this->Common_Model->send_mail($to, $subject, $body);

        if($this->session->userdata('user_id')){
          redirect('Verify');
        }else{
          $message = $this->Common_Model->success('Thank you: Your email has been verified successfully. Please login to continue.');
          $this->session->set_flashdata('email_verified', $message);
          redirect('');
        }
        // $this->session->set_userdata('is_user_logged_in', 1);
        // $this->session->set_userdata('user_id', $userdata['id']);
        // $this->session->set_userdata('email', $userdata['email']);
        // $pageData['userdata'] = $userdata;
        // $pageData['userdata']['is_email_verified'] = $pageData['is_email_verified'] = 1;
        // $this->load->view('site/verify', $pageData);
      }
    }else{
      redirect('');
    }
  }

  public function email_verified(){
    $pageData = $this->Common_Model->get_userdata();
    if($pageData['is_logged_in'] == 0) redirect('');
    if(!$pageData['is_organization']) redirect('');
    $organization_id = $pageData['organization_data']['id'];

    $pageData['userdata'] = $this->Common_Model->fetch_records('organizations', array('id' => $organization_id), false, true);
    $this->load->view('site/verify', $pageData);
  }

}
