<?php
class AgentModel extends CI_Model
{

public function ProfileStatus(){
    $query = $this->db->query("SELECT ProfileStatus FROM agent WHERE agentID='". $this->session->userdata('User_id')."'");
   return $query->row()->ProfileStatus;
}
public function GetProfile(){
    $query = $this->db->query("SELECT * FROM agent WHERE agentID='". $this->session->userdata('User_id')."'");
    return $query->result_array();

}


}