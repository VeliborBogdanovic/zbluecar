<?php


class Users_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function search_users($user,$pass,$mail)
            {
               $query = $this->db->get_where('users', array('username' => $user,'password'=>  md5($pass),'email'=>$mail));
                 return $query->num_rows;
            }
    public function logg($user,$pass)
    {
       $query = $this->db->get_where('users', array('username' => $user,'password'=>  md5($pass)));
         return $query->num_rows;
    }
    public function logg_id($user,$pass)
    {
//        
       $query = "SELECT id_user FROM users WHERE username='".$user."'AND password='".md5($pass)."'";
       $sql=  $this->db->query($query);
         return $sql->result();
    }
    
    public function insert($user,$pass,$mail)
            {
                    $pass=  md5($pass);
                        $data = array(
                           'username' => $user ,
                           'password' => $pass ,
                           'email' => $mail,
                            'id_role'=>2,
                        );

               $res= $this->db->insert('users', $data); 
                   return $res;
            }
            
}
