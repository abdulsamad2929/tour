<?php
class CommonModel extends CI_Model
{

    public function GetCountry(){
        $query = $this->db->query("SELECT * FROM countries order by name");
        return $query->result_array();
    }

    public function RegionByCountry($countryId){
        $query = $this->db->query("SELECT * FROM regions where country_id=$countryId order by name");
      //  echo $this->db->last_query(); die;
        return $query->result_array();
    }
    public function CityByRegion($regionId){
        $query = $this->db->query("SELECT * FROM cities where region_id IN ($regionId) order by name limit 200");
        //  echo $this->db->last_query(); die;
        return $query->result_array();
    }
}