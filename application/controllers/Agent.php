<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agent extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        $this->load->library('session');
        $this->load->library('encryption');
        $this->load->library('form_validation');
// for form validation
        $this->load->helper(array('form', 'url'));

        $this->load->model('AgentModel');
        $this->load->model('CommonModel');

    }

    public function Dashboard()
    {
        $check_profile = $this->AgentModel->ProfileStatus();

        if ($check_profile == 0) {
            $this->session->set_flashdata('info_flash', 'First Fill Your Profile And Payment information');
            redirect('Agent/AgentProfile');

        } else {


        }
    }
    public function AgentProfile(){

        $result['profile'] = $this->AgentModel->GetProfile();
      // debug($result);die;
        $this->load->view('Agent/profile',$result);
    }
    public function AgentTrip(){
       // $result['trip'] = $this->AgentModel->GetAgentTrip();
       $result['country'] =  $this->CommonModel->GetCountry();
            // debug($result);die;
        $this->load->view('Agent/tourtrip',$result);
    }
    public Function GetRegionbyCountry()
    {
        $countryId = $this->input->post('CountryId');
        $region = $this->CommonModel->RegionByCountry($countryId);
        echo ' <option> -- Select Region --</option>';
        foreach ($region as $row) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
        }
    }
        public Function GetCitybyRegion(){
            $regionId = $this->input->post('RegionId');
            $city =  $this->CommonModel->CityByRegion($regionId);
            echo ' <option> -- Select City/Place --</option>';
            foreach ($city as $row){
                echo "<option value='".$row['id']."'>".$row['name']."</option>";
            }
    }
}