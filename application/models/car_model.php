<?php


class Car_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function pretraga()
            {
               
                  $upit="SELECT * FROM ads c JOIN brands b ON c.id_brand=b.id_brand JOIN fuels f ON c.id_fuel=f.id_fuel GROUP BY c.id_brand";
                   $rez=$this->db->query($upit);
                     return $rez->result();
            }
    public function models_from_brands($brand)
            {
               
                  $upit="SELECT * FROM ads c JOIN brands b ON c.id_brand=b.id_brand JOIN fuels f ON c.id_fuel=f.id_fuel WHERE b.brand='".$brand."' GROUP BY c.model ";
                   $rez=$this->db->query($upit);
                    return $rez->result();
                   
            }
     public function all_data($brand,$model)
            {
        
               
                  $upit="SELECT * FROM ads c JOIN brands b ON c.id_brand=b.id_brand JOIN fuels f ON c.id_fuel=f.id_fuel JOIN ads_users au on c.id_ad=au.id_ad JOIN users u ON au.id_user=u.id_user"

                 . " WHERE b.brand='".$brand."' AND c.model='".$model ."'";
                   $rez=$this->db->query($upit);
                    return $rez->result();
                   
            }       
}
