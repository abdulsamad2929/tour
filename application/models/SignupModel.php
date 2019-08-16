<?php

class SignupModel extends CI_Model
{

    function GetAgentType()
    {
        $query = $this->db->query("SELECT * FROM AgentType WHERE STATUS=1");
        // echo $this->db->last_query(); die;
        return $query->result_array();
        //echo $this->db->last_query(); die;
    }
function CheckEmail($mail){
    $query = $this->db->query("SELECT * FROM tourlogin WHERE UserName='".$mail."'");
    if($query->num_rows() == 0){ return true;}else{ return false;}
}
    function AddAgent($data)
    {
        $query = $this->db->insert('agent', $data);
        return $this->db->insert_id();

    }

    function AddLogin($data)
    {
        $query = $this->db->insert('tourlogin', $data);
         return $this->db->insert_id();

    }

    function Authenticate($Auth_array)
    {
        $query = $this->db->query("SELECT tourlogin.*,agent.`AgentName`,agent.`ProfileStatus` FROM tourlogin 
INNER JOIN agent ON agent.AgentId = tourlogin.UserId
WHERE tourlogin.UserName='" . $Auth_array['UserName'] . "' AND tourlogin.PASSWORD='" . $Auth_array['Password'] . "' AND tourlogin.LoginType='" . $Auth_array['LoginType'] . "' AND tourlogin.STATUS=1");

        $data = $query->result_array();

        if ($data) {
            $log_data = array(
                'operator_id' => $data[0]['LoginId'],
                'reference_id' => $data[0]['UserId'],
                'refrence_type' => $Auth_array['LoginType'] . ' ' . $Auth_array['Email'] . '  ' . $_SERVER['REMOTE_ADDR'],
                'date_time' => date("Y-m-d H:i:s"),
                'action' => 'Login'
            );

            $this->db->insert('logs', $log_data);
        }
        return $data;
    }
}
