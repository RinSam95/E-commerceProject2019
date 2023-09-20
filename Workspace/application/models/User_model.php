<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
     * Class of User_model
     * 
     * @author Samu Rintala
     */
class User_model extends CI_model{
/**
     * Avaa tietokannan
     * 
     * @param       -
     * @return      -
     */  
public function __construct(){
        parent::__construct();
        $this->load->database();
}
/**
     * Syöttää rekisteröityjän tiedot tietokantaan
     * 
     * @param       -
     * @return      -
     */
public function register_user($user,$posti){
 
$this->db->insert('asiakas', $user);
$this->db->insert('posti', $posti); 
}
/**
     * Hakee asiakkaan tiedot posti taulusta
     * 
     * @param       -
     * @return      -
     */
public function get_post($user){
$this->db->where('tunnus', $user);
$query = $this->db->get('posti');
return $query->result_array();
}
/**
     * Vertaa asiakkaan sähköpostia ja salasanaa tietokantaan ja kirjaa hänet
     * sisään mikäli arvot täsmäävät
     * 
     * @param       -
     * @return      -
     */
public function login_user($user_login){
 //$email,$pass
  $this->db->select('*');
  $this->db->from('asiakas');
  
  $this->db->where('sposti', $user_login['sposti']);
 
  if($query=$this->db->get())
  {
    $result = $query->result_array();
    
    if($query->num_rows()==0){
      return 'Väärä salasana';
    }
    else{
      $password_hashInDb = $result[0]['salasana'];
      $encrypted_password = $user_login['salasana'];
      if($encrypted_password == $password_hashInDb )
        return $query->result_array();
      
      else {
        return 'Väärä salasana';
      }
    } 
  }
  else{
    return 'Väärä salasana';
  }
}
/**
     * tarkistaa onko sähköpostia ennestään tietokannassa
     * 
     * @param       -
     * @return      -
     */
public function email_check($email){
 
  $this->db->select('*');
  $this->db->from('asiakas');
  $this->db->where('sposti',$email);
  $query=$this->db->get();
 
  if($query->num_rows()>0){
    return false;
  }else
  {
    return true;
    }
  }
}
?>