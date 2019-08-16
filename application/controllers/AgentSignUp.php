<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AgentSignUp extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        $this->load->library('session');
        $this->load->library('encryption');

        $this->load->library('form_validation');
// for form validation
        $this->load->helper(array('form', 'url'));

        $this->load->model('SignupModel');

    }

    public function AgentRegister()
    {

        $result['Agenttype'] = $this->SignupModel->GetAgentType();
        $this->load->view("FrontWeb/AgentRegister", $result);

    }

    public function AddAgentRegister()
    {
        $email = $this->SignupModel->CheckEmail($this->input->post('Email'));
        if ($email == true) {
            $insert_array_agent = array(
                'AgentName' => $this->input->post('Fname') . ' ' . $this->input->post('Lname'),
                'CNIC' => $this->input->post('Cnic'),
                'Mobile' => '92' . str_replace('-', '', substr($this->input->post('Mobile'), 1)),
                'PAddress' => $this->input->post('Address'),
                'Email' => $this->input->post('Email'),
                'AgentType' => $this->input->post('AgentType'),
                'log' => gethostbyaddr($_SERVER['REMOTE_ADDR']) . ' ' . $_SERVER['REMOTE_ADDR'],
            );

            echo $inserts = $this->SignupModel->AddAgent($insert_array_agent);
//die;
            $insert_array_login = array(

                'UserId' => $inserts,
                'UserName' => $this->input->post('Email'),
                'Password' => sha1($this->input->post('Password')),
                'LoginType' => 'A',
                'log' => gethostbyaddr($_SERVER['REMOTE_ADDR']),

            );
            $inserts_id = $this->SignupModel->AddLogin($insert_array_login);
            if ($inserts_id >= 1) {
                $this->session->set_flashdata('success_flash', 'Sign In SuccessFully Welcome To Tour!');
                redirect('AgentSignUp/Login');
            } else {
                $this->session->set_flashdata('error_flash', 'Something Went wrong please Try Again !');
                redirect('AgentSignUp/Login');
            }
        } else {
            $this->session->set_flashdata('error_flash', 'Email Address Already Exist Please Login !');
            redirect('AgentSignUp/AgentRegister');
        }

    }

    public function Login()
    {
        $this->load->view('FrontWeb/AgentLogin');
    }

    public function Authenticate_Agent()
    {


        $Auth_array = array(
            'UserName' => $this->input->post('email'),
            'Password' => sha1($this->input->post('password')),
            'LoginType' => 'A'
        );

        $result = $this->SignupModel->Authenticate($Auth_array);

        if ($result) {
            $sessionData = array(
                'login_id' => $result[0]['LoginId'],
                'User_name' => $result[0]['UserName'],
                'User_id' => $result[0]['UserId'],
                'User_type' => $result[0]['LoginType'],
                'Display_picture' => $result[0]['DisplayPicture'],
                'Profile_status' => $result[0]['ProfileStatus'],
                'Agent_name' => $result[0]['AgentName'],

            );
            $this->session->set_userdata($sessionData);
            redirect('Agent/Dashboard');
        } else {
            $this->session->set_flashdata('error_flash', 'Login Falied Please Check Email Password!');
            redirect('AgentSignUp/Login');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('login_id');
        $this->session->unset_userdata('User_name');
        $this->session->unset_userdata('User_id');
        $this->session->unset_userdata('User_type');
        $this->session->unset_userdata('Display_picture');
        $this->session->unset_userdata('Profile_status');
        $this->session->unset_userdata('Agent_name');

        $this->session->sess_destroy();


        $_SESSION = array();
        redirect(base_url());
    }
    /******************** End AgentSignUp moudule *********************/


}
